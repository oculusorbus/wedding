<?php
require_once __DIR__ . '/partials/helpers.php';
$page_title       = "In Home Baptisms | It's A Wonderful Life Weddings";
$page_description = "Pastor David puts as much caring, compassion, creativity, and commitment into your in-home baptism as he does with all of his award winning wedding ceremonies.";
$page_keywords    = "baptism, in-home baptism, home baptism, baby, child, holy water, baptismal, candle, cloth, font, baptize";
$page_path        = "/baptism.php";
$page_image       = "/images/baptism.jpg";
$page_schema      = [
  "@type" => "Service",
  "name"  => "In Home Baptisms",
  "serviceType" => "Religious ceremony",
  "provider" => ["@id" => "https://www.itsawonderfullifeweddings.com#organization"],
  "description" => "In home baptisms of children or adults including baptismal certificate and candle."
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
      <?php img('images/baptism.jpg', 'Baptism ceremony', ['eager' => true, 'sizes' => '100vw']); ?>
    </div>
    <div class="subhero-inner" data-reveal>
      <nav class="crumbs" aria-label="Breadcrumb"><a href="/index.php">Home</a><span class="sep">/</span>In Home Baptisms</nav>
      <span class="eyebrow">Sacred &amp; Personal</span>
      <h1>In Home Baptisms</h1>
    </div>
  </section>

  <section class="section section--cream">
    <div class="container-tight" data-reveal>
      <p class="lede">It’s A Wonderful Life Weddings is pleased to also offer in home baptisms of children or adults. The baptism package includes a baptismal certificate, a baptism candle, and your Pastor will bring all necessary items.</p>
      <p>A baptism ceremony is, indeed, a ceremony. There is an entire process that takes place during the course of the baptism, which typically takes about 20 to 30 minutes.</p>

      <blockquote>Jesus said:<br>
      "All authority in heaven and on earth has been given to me. Therefore go and make disciples of all nations, baptizing them in the name of the Father and of the Son and of the Holy Spirit, and teaching them to obey everything I have commanded you. And surely I am with you always, to the very end of the age." (Matt. 28:18-20)
      </blockquote>

      <p>When parents bring their newborn child to be baptized, they are promising that child that his or her home will be a place of love and faith. They are promising to do their best to share the Good News of Jesus live, death, and resurrection with their son or daughter. They do this by striving to create a home where all feel loved and accepted, where the Word of God is honored and read, where prayer is part of the daily fabric of life, and where, as a family and as individuals, all strive be kind to the least of our brothers and sisters – when and how they appear to us.</p>

      <p>The baptizing community also makes a pledge – witnessed by the Godparents and the minister – that we will assist the parents to live the challenging life of faith. We assist them by our prayers, our support, our shared faith, and our love.</p>

      <p>Baptism isn’t something that happens once and is over – it represents a commitment that we must take seriously every day.</p>

      <p><strong>Contact your pastor of choice to get more details, pricing, and reserve your date.</strong></p>

      <p style="margin-top: var(--sp-6);" class="text-center">
        <a class="btn btn--gold" href="/contact.php">Schedule a Baptism</a>
      </p>
    </div>
  </section>

</main>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
