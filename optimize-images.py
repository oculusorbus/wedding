#!/usr/bin/env python3
"""
Generate WebP versions + (optionally) resized JPGs for every raster image in images/.
Skips PSD/SVG/ICO and anything already optimized. Idempotent.

Outputs alongside each source:
  foo.jpg  -> foo.webp  (and foo-800.webp, foo-1600.webp for hero/background candidates)
"""
import os, sys
from pathlib import Path
from PIL import Image, ImageOps

ROOT = Path(__file__).parent / "images"
EXTS = {".jpg", ".jpeg", ".png"}
SKIP_NAMES = set()  # add filenames to skip
RESPONSIVE_WIDTHS = [480, 960, 1600]  # generate srcset variants for big images
RESPONSIVE_THRESHOLD = 1200  # only generate variants if source is wider than this

count_new = 0
count_skip = 0
total_saved = 0

for src in sorted(ROOT.rglob("*")):
    if not src.is_file():
        continue
    if src.suffix.lower() not in EXTS:
        continue
    if src.name in SKIP_NAMES:
        continue
    try:
        im = Image.open(src)
        im = ImageOps.exif_transpose(im)
        # auto convert to RGB if needed
        if im.mode in ("RGBA", "LA", "P"):
            base = im.convert("RGBA")
        else:
            base = im.convert("RGB")
        # 1) Main webp at original resolution
        out = src.with_suffix(".webp")
        if not out.exists() or out.stat().st_mtime < src.stat().st_mtime:
            base.save(out, "WEBP", quality=82, method=6)
            saved = src.stat().st_size - out.stat().st_size
            total_saved += saved
            count_new += 1
            print(f"  → {out.name}  ({src.stat().st_size//1024}K → {out.stat().st_size//1024}K)")
        else:
            count_skip += 1
        # 2) Responsive variants only for large images
        if base.width >= RESPONSIVE_THRESHOLD:
            for w in RESPONSIVE_WIDTHS:
                if w >= base.width:
                    continue
                vout = src.with_name(f"{src.stem}-{w}.webp")
                if not vout.exists() or vout.stat().st_mtime < src.stat().st_mtime:
                    ratio = w / base.width
                    resized = base.resize((w, int(base.height * ratio)), Image.LANCZOS)
                    resized.save(vout, "WEBP", quality=82, method=6)
                    count_new += 1
                    print(f"  → {vout.name} ({w}w)")
    except Exception as e:
        print(f"  ! Skipped {src.name}: {e}", file=sys.stderr)

print(f"\nDone. New/updated: {count_new}, skipped: {count_skip}, bytes saved on primaries: ~{total_saved//1024} KB")
