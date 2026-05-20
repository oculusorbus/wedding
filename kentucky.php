<?php
require_once __DIR__ . '/partials/helpers.php';
$page_title       = "Central Kentucky Weddings | It's A Wonderful Life Weddings";
$page_description = "Our Officiant service also serves the central Kentucky region. Contact our Officiant, Dr. Truemon Barger for all your wedding needs.";
$page_keywords    = "Kentucky, Danville, Central Kentucky, Lexington, Louisville, weddings, ceremonies, officiant, officiants, ministers, preachers, pastors, marriage, price, cost, planning, venue, affordable, cheap";
$page_path        = "/kentucky.php";
$page_image       = "/images/kentucky-wedding-couple.jpg";
$page_schema      = [
  "@type" => "LocalBusiness",
  "name"  => "It's A Wonderful Life Weddings — Central Kentucky",
  "address" => [
    "@type" => "PostalAddress",
    "addressLocality" => "Danville",
    "addressRegion" => "KY",
    "addressCountry" => "US"
  ],
  "telephone" => "+1-316-210-4760",
  "areaServed" => ["Danville", "Harrodsburg", "Lexington", "Louisville", "Central Kentucky"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/partials/head.php'; ?>
</head>
<body>
<?php include __DIR__ . '/header.php'; ?>

<main id="main" tabindex="-1">

  <section class="subhero">
    <div class="subhero-bg">
      <?php img('images/kentucky-wedding-couple.jpg', 'Kentucky wedding couple', ['eager' => true, 'sizes' => '100vw']); ?>
    </div>
    <div class="subhero-inner" data-reveal>
      <nav class="crumbs" aria-label="Breadcrumb"><a href="/index.php">Home</a><span class="sep">/</span>Central Kentucky</nav>
      <span class="eyebrow">Bluegrass Country</span>
      <h1>Central Kentucky Weddings</h1>
    </div>
  </section>

  <section class="section section--cream">
    <div class="container">

      <article class="pastor scroll-mt" id="truemonbarger" data-reveal>
        <div class="pastor-photo">
          <?php img('images/truemon-barger.jpg', 'Officiant Dr. Truemon Barger'); ?>
        </div>
        <div>
          <span class="pastor-role">Officiant · Danville, Kentucky</span>
          <h2 class="pastor-name">Officiant Dr. Truemon Barger</h2>

          <p>Dr. Truemon Barger is our Danville, KY officiant serving the great people of central Kentucky. Dr. Truemon is a chiropractor in Harrodsburg, KY where he eases the pain of his patients on the weekdays. On the weekends, he brings people together in matrimony to celebrate a happy union. His hobbies include family time with his family, learning new techniques to better serve his patients and community, watching the latest movie, exploring nature, and reading. He is a part of the Harrodsburg Rotary club and the Emerging Leaders of United Way Harrodsburg.</p>

          <p>Call Dr. Truemon directly at <a href="tel:3162104760">316-210-4760</a> to secure your date.</p>

          <div class="pastor-contact">
            <a href="tel:3162104760"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" stroke-linecap="round" stroke-linejoin="round"/></svg> 316-210-4760</a>
          </div>
        </div>
      </article>

    </div>
  </section>

</main>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
