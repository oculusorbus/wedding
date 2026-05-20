<?php
require_once __DIR__ . '/partials/helpers.php';
$page_title       = "Photo Gallery | It's A Wonderful Life Weddings";
$page_description = "Find out why we are fast becoming the number one wedding minister service in the Metro area.";
$page_keywords    = "wedding, kansas, city, attire, ceremony, officiant, overland, park, lenexa, leawood, shawnee, bride, groom, marriage, Denver, Austin, San Antonio, wedding, officiant";
$page_path        = "/photos.php";
$page_image       = "https://live.staticflickr.com/65535/54879956212_ed64c37446_z.jpg";
$page_schema      = [
  "@type" => "ImageGallery",
  "name"  => "It's a Wonderful Life Weddings Photo Gallery",
  "url"   => "https://www.flickr.com/photos/146240318@N05/albums/72157702304415142"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/partials/head.php'; ?>
</head>
<body>
<?php include __DIR__ . '/header.php'; ?>

<main id="main">

  <section class="subhero">
    <div class="subhero-bg">
      <?php img('images/bride-groom-tree.jpg', 'Couple by a tree', ['eager' => true, 'sizes' => '100vw']); ?>
    </div>
    <div class="subhero-inner" data-reveal>
      <nav class="crumbs" aria-label="Breadcrumb"><a href="/index.php">Home</a><span class="sep">/</span>Photo Gallery</nav>
      <span class="eyebrow">Moments Captured</span>
      <h1>Photo Gallery</h1>
    </div>
  </section>

  <section class="section section--cream">
    <div class="container">
      <div data-reveal>
        <a class="gallery-cover" data-flickr-embed="true" data-header="false" data-footer="false" href="https://www.flickr.com/photos/146240318@N05/albums/72157702304415142" title="It&#x27;s a Wonderful Life Weddings">
          <img src="https://live.staticflickr.com/65535/54879956212_ed64c37446_z.jpg" alt="It&#x27;s a Wonderful Life Weddings" loading="lazy" decoding="async">
          <span class="glow"></span>
          <span class="label">Browse Our Album →</span>
        </a>
        <script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
        <p class="text-center" style="margin-top: var(--sp-5);">
          <a class="btn btn--gold" href="https://www.flickr.com/photos/146240318@N05/albums/72157702304415142" target="_blank" rel="noopener">View Full Photo Album on Flickr</a>
        </p>
      </div>
    </div>
  </section>

</main>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
