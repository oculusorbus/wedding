<?php
require_once __DIR__ . '/partials/helpers.php';
$page_title       = "Videos — Pastor Cam | It's A Wonderful Life Weddings";
$page_description = "Here you will find short video examples of our ceremonies, plus exclusive PASTOR CAM clips.";
$page_keywords    = "video, ceremony, ceremonies, pastor cam, weddings, ministers, pastor cam, videos, samples, cost, price, cheap, inexpensive";
$page_path        = "/videos.php";
$page_image       = "/images/wedding-video.jpg";
$page_schema      = [
  "@type" => "CollectionPage",
  "name"  => "Wedding Ceremony Pastor Cam Samples",
  "about" => "Recorded examples of It's A Wonderful Life wedding ceremonies."
];
$youtube = [
  "nZ7JDKcsLB4","H60OdcQ4QqE","Y-WxYbf8SK8","upSd4R_CIB4","cG0wHE8qAKc","_ztAlc-99vE","Z3ab9RbeKtI","kWDuurLY8f4",
  "sr9wA5Y3bAQ","0ed6Vi_PMmI","Cu0wLHrXXwY","Fd0fmeIcaMM","-5g06DeZMVc","Ear0NkrAO4Q","NV9_nO6L-1s","vQTEd74Figw",
  "GV0UhbwELSo","tbvJfxegcL4","exge5UjGtCU","nEzf9kCbxbs","F14QOhzIyvk","NEX0WzYzoDM","PVdHmBmBdlM","czuNitTpsng",
  "OfP7d1jo2AY","LAE90dXvmYM","vD28bBXX_xo","NFbEOKefurg","3XGd3rf2T7M",
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
      <?php img('images/wedding-video.jpg', 'Wedding video', ['eager' => true, 'sizes' => '100vw']); ?>
    </div>
    <div class="subhero-inner" data-reveal>
      <nav class="crumbs" aria-label="Breadcrumb"><a href="/index.php">Home</a><span class="sep">/</span>Pastor Cam Videos</nav>
      <span class="eyebrow">Pastor's Point of View</span>
      <h1>Exclusive Pastor Cam Videos</h1>
    </div>
  </section>

  <section class="section section--cream">
    <div class="container">
      <div class="section-title" data-reveal>
        <span class="eyebrow">Wedding Ceremony Samples</span>
        <h2>Real ceremonies. Real couples.</h2>
        <p class="lede">A small sampling of recorded ceremonies from couples who said yes to a "Wonderful Life" wedding.</p>
      </div>
      <div class="videos" data-reveal>
        <?php foreach ($youtube as $i => $id): ?>
          <div class="video-wrap">
            <iframe src="https://www.youtube-nocookie.com/embed/<?= htmlspecialchars($id) ?>" title="Wedding ceremony sample <?= $i + 1 ?>" frameborder="0" loading="lazy" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

</main>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
