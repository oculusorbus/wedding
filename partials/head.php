<?php
/**
 * Common <head> partial.
 * Page sets before including:
 *   $page_title       (string)  required
 *   $page_description (string)  required
 *   $page_path        (string)  e.g. "/index.php", "/pricing.php"
 *   $page_image       (string|null) absolute or root-relative URL of social card image
 *   $page_keywords    (string|null)
 *   $page_schema      (array|null) JSON-LD ready to encode (single object or @graph)
 */

$site_name   = "It's A Wonderful Life Weddings";
$site_url    = "https://www.itsawonderfullifeweddings.com"; // canonical origin
$default_img = $site_url . "/images/main-header.jpg";

$page_title       = $page_title       ?? $site_name;
$page_description = $page_description ?? "Award-winning wedding officiants creating moving, custom ceremonies in San Antonio, Austin, the Hill Country, Kansas City, and Central Kentucky.";
$page_path        = $page_path        ?? $_SERVER['REQUEST_URI'] ?? '/';
$canonical        = $site_url . $page_path;
$page_image       = $page_image       ?? $default_img;
if (strpos($page_image, 'http') !== 0) $page_image = $site_url . '/' . ltrim($page_image, '/');
$page_keywords    = $page_keywords    ?? '';
?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title><?= htmlspecialchars($page_title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_description) ?>">
  <?php if ($page_keywords): ?><meta name="keywords" content="<?= htmlspecialchars($page_keywords) ?>"><?php endif; ?>
  <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">
  <meta name="robots" content="index,follow,max-image-preview:large">
  <meta name="theme-color" content="#4a1d5e">
  <meta name="format-detection" content="telephone=yes">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="<?= htmlspecialchars($site_name) ?>">
  <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($page_description) ?>">
  <meta property="og:url" content="<?= htmlspecialchars($canonical) ?>">
  <meta property="og:image" content="<?= htmlspecialchars($page_image) ?>">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:locale" content="en_US">

  <!-- Twitter / X -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($page_title) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($page_description) ?>">
  <meta name="twitter:image" content="<?= htmlspecialchars($page_image) ?>">

  <!-- Icons -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico">
  <link rel="apple-touch-icon" href="/images/ww-icon.png">

  <!-- Fonts (display=swap to avoid layout-blocking) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,400&family=Inter:wght@300;400;500;600;700&family=Allura&display=swap">

  <!-- App CSS -->
  <link rel="stylesheet" href="/assets/css/main.css">
  <link rel="preload" as="image" href="<?= htmlspecialchars($page_image) ?>" fetchpriority="high">
  <script>document.documentElement.classList.add('js');</script>

<?php
// Structured data — Organization + per-page schema
$organization = [
  "@context" => "https://schema.org",
  "@type"    => "LocalBusiness",
  "@id"      => $site_url . "#organization",
  "name"     => $site_name,
  "alternateName" => "Pastor David Barger Wedding Officiants",
  "url"      => $site_url,
  "logo"     => $site_url . "/images/ww-icon.png",
  "image"    => $default_img,
  "description" => "Award-winning wedding officiants creating custom ceremonies across Texas, Kansas City, and Central Kentucky. The Knot Best of Weddings Hall of Fame.",
  "telephone" => "+1-210-712-5458",
  "email"    => "pastordavidbarger@gmail.com",
  "priceRange" => "$$",
  "areaServed" => [
    ["@type" => "City", "name" => "San Antonio", "containedInPlace" => ["@type" => "State", "name" => "Texas"]],
    ["@type" => "City", "name" => "Austin",      "containedInPlace" => ["@type" => "State", "name" => "Texas"]],
    ["@type" => "City", "name" => "Kansas City", "containedInPlace" => ["@type" => "State", "name" => "Missouri"]],
    ["@type" => "AdministrativeArea", "name" => "Central Kentucky"]
  ],
  "address" => [
    "@type" => "PostalAddress",
    "addressLocality" => "San Antonio",
    "addressRegion"   => "TX",
    "addressCountry"  => "US"
  ],
  "sameAs" => [
    "https://www.facebook.com/WeddingsSA",
    "https://www.facebook.com/WeddingsKC",
    "https://www.theknot.com/marketplace/its-a-wonderful-life-weddings-sa-san-antonio-tx-770900",
    "https://www.weddingwire.com/biz/its-a-wonderful-life-weddings-sa-san-antonio/45fcd8eaa7611fb9.html"
  ],
  "award" => [
    "The Knot Best of Weddings Hall of Fame",
    "The Knot Best of Weddings 2018",
    "The Knot Best of Weddings 2019",
    "The Knot Best of Weddings 2020",
    "The Knot Best of Weddings 2021"
  ],
  "aggregateRating" => [
    "@type" => "AggregateRating",
    "ratingValue" => "5.0",
    "reviewCount" => "200",
    "bestRating"  => "5"
  ]
];

$graph = [$organization];
if (!empty($page_schema)) {
  if (isset($page_schema['@graph'])) {
    foreach ($page_schema['@graph'] as $node) $graph[] = $node;
  } elseif (isset($page_schema['@type'])) {
    $graph[] = $page_schema;
  } else {
    foreach ($page_schema as $node) $graph[] = $node;
  }
}
$ld = ["@context" => "https://schema.org", "@graph" => $graph];
?>
  <script type="application/ld+json"><?= json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?></script>

  <!-- Google Analytics (preserved from legacy) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108788012-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-108788012-2');
  </script>
