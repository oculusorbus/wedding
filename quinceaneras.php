<?php
require_once __DIR__ . '/partials/helpers.php';
$page_title       = "Quinceañera Celebrations | It's A Wonderful Life Weddings";
$page_description = "Pastor David puts as much caring, compassion, creativity, and commitment into your quinceañeras as he does with all of his award winning wedding ceremonies.";
$page_keywords    = "Quinceaneras, Quinceanera, birthday, 15, year, old, daugher, mother, father, celebration, spanish, latin, San Antonio, Hill County, Austin, Texas,, debutante, cost, price, inexpensive, cheap, pratical, down-to-earth, funny, spiritual, catholic, protestant, non-denominational";
$page_path        = "/quinceaneras.php";
$page_image       = "/images/quinceanera.jpg";
$page_schema      = [
  "@type" => "Service",
  "name"  => "Quinceañera Celebrations",
  "serviceType" => "Coming-of-age celebration",
  "provider" => ["@id" => "https://www.itsawonderfullifeweddings.com#organization"],
  "availableLanguage" => ["English", "Spanish"]
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
      <?php img('images/quinceanera.jpg', 'Quinceañera celebration', ['eager' => true, 'sizes' => '100vw']); ?>
    </div>
    <div class="subhero-inner" data-reveal>
      <nav class="crumbs" aria-label="Breadcrumb"><a href="/index.php">Home</a><span class="sep">/</span>Quinceañeras</nav>
      <span class="eyebrow">A Coming-of-Age Tradition</span>
      <h1>Quinceañera Celebrations</h1>
    </div>
  </section>

  <section class="section section--cream">
    <div class="container-tight" data-reveal>
      <p class="lede">Quinceañera is the Spanish word for a girl who is 15 years old. Among Latinos in the United States, quinceañera also is the name given to the coming-of-age celebration on a girl’s 15th birthday.</p>

      <p>The quinceañera has its origins many centuries ago when both boys and girls participated in rites of passage. To prepare for womanhood, girls were separated from other children at a certain age so the elder women could teach them about their future roles as members of family and community. During the official rites of passage, the community would thank the gods for the future wives and mothers, and the young women would vow to serve the community.</p>

      <p>Later, missionaries turned the event into a personal affirmation of faith by the young women and a pledge to become good Christian wives and mothers. A church celebration became an important part of the occasion.</p>

      <p>Pastor David Barger, and his associate officiants, place the same amount of commitment, creativity, and honor into each  quinceañeras as he does our award wedding ceremonies.</p>

      <p>Today, the quinceañera celebration often is a lavish party that may include a mariachi band, a feast and many guests—much like a wedding. Planning for a quinceañera can start as early as the birth of a daughter. The family and godparents save up money until the girl is of age. Actual preparations may take anywhere from 6 months to a year and a half. Dances have to be learned, decorations decided upon, cakes ordered, and in some cases, dresses made.</p>

      <p>The young woman wears an elaborate dress in pastel or, more recently, bold colors. Traditions vary, but they may include:</p>
      <ul>
        <li>Receiving a church, or religious blessing</li>
        <li>Having 14 male and female attendants and escorts to represent the previous 14 years of life</li>
        <li>Presenting a porcelain doll to a younger sister to symbolize leaving childhood behind, or receiving a final doll from her godparents</li>
        <li>Changing from flats into high-heeled shoes to represent becoming a young woman</li>
        <li>Dancing the first dance with her father</li>
      </ul>
    </div>

    <div class="container" style="margin-top: var(--sp-7);" data-reveal>
      <?php img('images/quinceanera-photoshoot.jpg', 'Quinceañera photoshoot', ['attrs' => ['style' => 'border-radius: var(--r-lg); box-shadow: var(--shadow); max-width: 1080px; margin: 0 auto;'], 'sizes' => '(min-width: 1080px) 1080px, 100vw']); ?>
    </div>

    <div class="container-tight" style="margin-top: var(--sp-7);" data-reveal>
      <h2>What is included in our quinceañera celebration?</h2>
      <ul>
        <li>Complimentary consultation (in person, over the phone or an online planning session)**</li>
        <li>Custom, fine-tuning your quinceañera to perfection</li>
        <li>Readings (i.e. Scripture, poem, blessing) are included</li>
        <li>Perform your ceremony.</li>
        <li>Runs up to 30 minutes (depending on customization), including the procession</li>
      </ul>

      <h3>Disclaimer</h3>
      <ul>
        <li><strong>Retainer:</strong> Your 50% retainer is non-refundable.</li>
        <li><strong>Accessories:</strong> It is your responsibility to provide all and any necessary accessories for the ceremony (if applicable).</li>
        <li><strong>Rehearsal:</strong> The quinceañera ceremony does not include a rehearsal/practice. That is available at an additional fee.</li>
        <li><strong>Language:</strong> We offer both English, and Spanish versions of the ceremony.</li>
        <li><strong>Fees:</strong> You understand your final payment is due one week prior to your date.</li>
        <li><strong>Delays:</strong> You must have ceremony start within 45 minutes of your scheduled time in order to accommodate officiants schedule.</li>
      </ul>

      <p><strong>**In-person appointment must be done in our home office, exception can be made if officiant happens to be traveling in your area.</strong></p>

      <p class="text-center" style="margin-top: var(--sp-6);">
        <a class="btn btn--gold" href="/contact.php">Plan Her Quinceañera</a>
      </p>
    </div>
  </section>

</main>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
