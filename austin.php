<?php
require_once __DIR__ . '/partials/helpers.php';
$page_title       = "Austin Weddings | It's A Wonderful Life Weddings";
$page_description = "Our Officiant service also serves the Austin metro area. Contact our Officiant, Renee Hanson-Malone for all your wedding needs.";
$page_keywords    = "Austin, weddings, ceremonies, officiant, officiants, ministers, preachers, pastors, marriage, price, cost, planning, venue, affordable, cheap";
$page_path        = "/austin.php";
$page_image       = "/images/flowers-couple.jpg";
$page_schema      = [
  "@type" => "LocalBusiness",
  "name"  => "It's A Wonderful Life Weddings — Austin",
  "address" => [
    "@type" => "PostalAddress",
    "addressLocality" => "Austin",
    "addressRegion" => "TX",
    "addressCountry" => "US"
  ],
  "telephone" => "+1-512-905-9112",
  "areaServed" => ["Austin", "Travis County", "Texas Hill Country"]
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
      <?php img('images/flowers-couple.jpg', 'Couple with flowers — Austin', ['eager' => true, 'sizes' => '100vw']); ?>
    </div>
    <div class="subhero-inner" data-reveal>
      <nav class="crumbs" aria-label="Breadcrumb"><a href="/index.php">Home</a><span class="sep">/</span>Austin</nav>
      <span class="eyebrow">Serving Central Texas</span>
      <h1>Austin Weddings</h1>
    </div>
  </section>

  <section class="section section--cream">
    <div class="container">

      <article class="pastor scroll-mt" id="reneehansonmalone" data-reveal>
        <div class="pastor-photo">
          <?php img('images/renee-hanson-malone.jpg', 'Officiant Renee Hanson Malone'); ?>
        </div>
        <div>
          <span class="pastor-role">Officiant &amp; Wedding Planner</span>
          <h2 class="pastor-name">Renee Hanson Malone</h2>

          <p>A longtime resident of Austin, Renee Hanson Malone, has over 15 years of experience in public speaking and event production. She has a MA in Latin American Studies, is bilingual and has traveled extensively in South America. She is currently Executive for the Austin Plastic Surgery foundation, Austin Smiles, and is passionate about making a difference in the community. If you are in need of a qualified wedding Officiant at an affordable price, contact Renee as soon as you can. Renee brings to our team a true commitment to others, and bi-lingual services. She will make your Austin wedding ceremony memorable!</p>

          <p>Her husband, Michael Malone, is a well known and sought after jazz saxophone artist that appears frequently at the Elephant Room in downtown Austin.</p>

          <p>Call Renee to schedule an appointment at <a href="tel:512-905-9112">512-905-9112</a>, or Pastor David at <a href="tel:210-712-5458">210-712-5458</a> to check for her availability in the Austin Metro Area.</p>

          <div class="pastor-contact">
            <a href="tel:5129059112"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" stroke-linecap="round" stroke-linejoin="round"/></svg> 512-905-9112</a>
            <a href="tel:2107125458"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" stroke-linecap="round" stroke-linejoin="round"/></svg> 210-712-5458 (Pastor David)</a>
          </div>
        </div>
      </article>

      <article class="pastor" data-reveal>
        <div class="pastor-photo">
          <?php img('images/michael-malone.jpg', 'Saxophonist Michael Malone'); ?>
        </div>
        <div>
          <span class="pastor-role">"The Sax Man of Austin"</span>
          <h2 class="pastor-name">Michael Malone</h2>

          <p>Just like Renee, Michael is a breath of fresh air, and creates an ambiance for your wedding guests to enjoy before, during, and after the ceremony.  He plays both soprano and tenor saxophone, playing solo or with a Jazz Trio.</p>

          <p>Michaels many accomplishments include:</p>
          <ul>
            <li>25 years experience of professional playing for large concerts, private events, Weddings, and Churches</li>
            <li>Recorded on Multiple Projects and has played world wide, including, Europe and Asia with musicians like: Jimmy Smith, Red Young and Mandy Gaines</li>
          </ul>

          <p>If you think Michael is just the person to make your wedding music complete, Call <a href="tel:5127624723">512-762-4723</a>, or email him today at: <a href="mailto:saxmanaustin@yahoo.com">saxmanaustin@yahoo.com</a></p>

          <div class="pastor-contact">
            <a href="tel:5127624723"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" stroke-linecap="round" stroke-linejoin="round"/></svg> 512-762-4723</a>
            <a href="mailto:saxmanaustin@yahoo.com"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke-linecap="round" stroke-linejoin="round"/><polyline points="22,6 12,13 2,6" stroke-linecap="round" stroke-linejoin="round"/></svg> saxmanaustin@yahoo.com</a>
          </div>
        </div>
      </article>

    </div>
  </section>

</main>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
