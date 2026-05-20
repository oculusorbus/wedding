<?php
require_once __DIR__ . '/partials/helpers.php';
$page_title       = "Pricing & Services | It's A Wonderful Life Weddings";
$page_description = "Pastor David and his team of wedding professionals make sure you are totally satisfied with the ceremony before the wedding even occurs. Named Officiant of the year by Theknot.com. Find out why more and more couples are choosing our services.";
$page_keywords    = "marriage, counseling, wedding, services, prices, square, catholic, protestant, skype, weekday, small, intimate, officiants, officiant, minister, ministers, Austin, San Antonio, texas, Hill Country, non-denominational, fee, fees, budget, weddings, venues, planners, planning, cost, price, cheap, inexpensive";
$page_path        = "/pricing.php";
$page_image       = "/images/affectionate-couple.jpg";
$page_schema      = ["@graph" => [
  [
    "@type" => "BreadcrumbList",
    "itemListElement" => [
      ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://www.itsawonderfullifeweddings.com/"],
      ["@type" => "ListItem", "position" => 2, "name" => "Pricing & Services", "item" => "https://www.itsawonderfullifeweddings.com/pricing.php"]
    ]
  ],
  [
    "@type" => "Service",
    "serviceType" => "Wedding Officiant Services",
    "provider" => ["@id" => "https://www.itsawonderfullifeweddings.com#organization"],
    "areaServed" => ["San Antonio TX", "Austin TX", "Hill Country TX", "Kansas City MO", "Central Kentucky"],
    "hasOfferCatalog" => [
      "@type" => "OfferCatalog",
      "name"  => "Wedding Officiant Packages",
      "itemListElement" => [
        ["@type" => "Offer", "name" => "Ultimate Gold Wedding Package", "price" => "450", "priceCurrency" => "USD"],
        ["@type" => "Offer", "name" => "Sterling Silver Wedding Package", "price" => "350", "priceCurrency" => "USD"],
        ["@type" => "Offer", "name" => "Bronze Elopement Package", "price" => "200", "priceCurrency" => "USD"]
      ]
    ]
  ]
]];
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
      <?php img('images/affectionate-couple.jpg', 'Affectionate couple', ['eager' => true, 'sizes' => '100vw']); ?>
    </div>
    <div class="subhero-inner" data-reveal>
      <nav class="crumbs" aria-label="Breadcrumb"><a href="/index.php">Home</a><span class="sep">/</span>Pricing &amp; Services</nav>
      <span class="eyebrow">Pricing &amp; Services</span>
      <h1>Pricing &amp; Services</h1>
    </div>
  </section>

  <section class="section section--cream">
    <div class="container-tight">
      <div data-reveal>
        <p class="lede">What type of wedding ceremony do you want? Traditional, or something different. Protestant, Catholic, Non-religious, Inter-Faith, Civil,
        Elopement, or commitment, we can perform any and all. It helps us if you have a good idea  where you want to go, so we can tailor
        your ceremony to fit that need. We specialize in Inter-Faith ceremonies. We make it simple so you can relax and enjoy the experience.</p>
        <p>Our pricing reflects a professional approach to your ceremony, and is priced appropriately. We have a professional
        process that will assure you of a wonderful ceremony. It takes time, approximately 40 hours, to interview the couple, research their
        particular wants for a ceremony, create, plan, and write a custom made ceremony, revisions, rehearsals, travel, legal documentation
        and storage, and marriage certificate creation. No off the rack ceremonies here. We are dedicated to making sure you will have happy
        memories of your day for years to come. Our pricing reflects that dedication to your needs and expectations.</p>
        <p><strong>Pricing Schedule: Balance payment <strong>due one week</strong> before performance of ceremony.</strong><br>
        <strong>We accept Cash, Check, Most online payment apps.</strong></p>
        <p><strong><a href="#military">View our Active Military and First Responders special pricing.</a></strong></p>
        <p>All ceremonies require a <strong>non-refundable</strong> $50.00 booking deposit and contract in advance to secure your date.</p>
      </div>
    </div>
  </section>

  <section class="section section--cream-2" id="weddings">
    <div class="container">
      <div class="section-title" data-reveal>
        <span class="eyebrow">Wedding Packages</span>
        <h2>Choose Your Celebration</h2>
        <p>Every package includes our award-winning attention to detail, custom approach, and complete legal handling.</p>
      </div>
      <div class="pkg-grid">
        <article class="pkg pkg--gold" data-reveal>
          <?php img('images/gold.png', 'Gold package medal', ['attrs' => ['class' => 'pkg-medal']]); ?>
          <div class="pkg-tier">Most Popular</div>
          <h3 class="pkg-title">Ultimate Gold Wedding Package</h3>
          <div class="pkg-price"><span class="currency">$</span>450</div>
          <ul>
            <li>All creative meetings.</li>
            <li>Complete custom ceremony creation.</li>
            <li>As many consultations as needed.</li>
            <li>Rehearsal is included.</li>
            <li>Complete legal documentation processing and handling.</li>
            <li>24/7 access to Officiant.</li>
          </ul>
          <a class="btn btn--gold btn--sm" href="/contact.php">Book Gold</a>
        </article>

        <article class="pkg pkg--silver" data-reveal data-reveal-delay="1">
          <?php img('images/silver.png', 'Silver package medal', ['attrs' => ['class' => 'pkg-medal']]); ?>
          <div class="pkg-tier">Classic</div>
          <h3 class="pkg-title">Sterling Silver Wedding Package</h3>
          <div class="pkg-price"><span class="currency">$</span>350</div>
          <ul>
            <li>All creative meetings.</li>
            <li>Standard ceremony.</li>
            <li>Any and all consultations needed.</li>
            <li>Complete legal documentation processing and handling.</li>
            <li>24/7 access to Officiant.</li>
          </ul>
          <a class="btn btn--ghost btn--sm" href="/contact.php">Book Silver</a>
        </article>

        <article class="pkg pkg--bronze" data-reveal data-reveal-delay="2">
          <?php img('images/bronze.png', 'Bronze package medal', ['attrs' => ['class' => 'pkg-medal']]); ?>
          <div class="pkg-tier">Elopement</div>
          <h3 class="pkg-title">Bronze Elopement Package</h3>
          <div class="pkg-price"><span class="currency">$</span>200</div>
          <ul>
            <li>Courthouse style elopement.</li>
            <li>Ready made ceremony. No customizations.</li>
            <li>Mon, Tue, Wed, Thur only. Not valid on holidays.</li>
            <li>Other Restrictions apply. Please ask your Officiant.</li>
            <li>Very basic in and out type of ceremony.</li>
            <li>No customization of ceremony.</li>
          </ul>
          <a class="btn btn--ghost btn--sm" href="/contact.php">Book Bronze</a>
        </article>
      </div>

      <div class="text-center" style="margin-top: var(--sp-7);" data-reveal>
        <h3 style="margin-bottom: var(--sp-4);">Additional Services <small style="font-size: 0.6em; color: var(--text-soft); display: block; margin-top: 4px;">(consult with your Officiant for pricing)</small></h3>
        <p style="display: flex; flex-wrap: wrap; gap: var(--sp-3); justify-content: center; list-style: none;">
          <a class="btn btn--ghost btn--sm" href="/baptism.php">In Home Baptisms</a>
          <span class="btn btn--ghost btn--sm" style="cursor: default;">Funerals</span>
          <a class="btn btn--ghost btn--sm" href="/quinceaneras.php">Quinceañera</a>
        </p>
        <p style="margin-top: var(--sp-5); font-family: var(--f-display); font-style: italic; font-size: var(--fs-lg); color: var(--plum);">
          <strong>Remember, we NEVER let a fee stand in the way of a great wedding. Let's talk soon.</strong>
        </p>
      </div>
    </div>
  </section>

  <section class="section section--plum scroll-mt" id="military">
    <div class="container">
      <div class="feature-row reverse" data-reveal>
        <div>
          <?php img('images/military-couple.jpg', 'Military couple at their wedding', ['sizes' => '(min-width: 900px) 540px, 100vw']); ?>
        </div>
        <div>
          <span class="eyebrow">Special Pricing</span>
          <h2 style="color:var(--cream)">Active Military &amp; First Responders</h2>
          <p style="color: rgba(250,246,239,0.92);"><strong>We would like to honor our hard fighting Armed Forces, First Responders, and Teachers with a special that never ends.</strong></p>
          <p style="color: rgba(250,246,239,0.92);"><strong>Let your Officiant know that you are:</strong></p>
          <ul style="color: rgba(250,246,239,0.92);">
            <li>Active military or veteran</li>
            <li>First Responder, PD, FD, or EMS</li>
            <li>Teacher</li>
          </ul>
          <p style="color: rgba(250,246,239,0.92);"><strong>and enjoy a $50.00 savings on any ceremony.</strong></p>
          <p style="margin-top: var(--sp-5);">
            <?php img('images/flag.png', 'American flag', ['attrs' => ['style' => 'height: 110px;']]); ?>
          </p>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
