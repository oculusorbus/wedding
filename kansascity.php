<?php
require_once __DIR__ . '/partials/helpers.php';
$page_title       = "Kansas City Weddings | It's A Wonderful Life Weddings";
$page_description = "Our Officiant service also serves the Austin metro area. Contact our Officiant, Renee Hanson-Malone for all your wedding needs.";
$page_keywords    = "Austin, weddings, ceremonies, officiant, officiants, ministers, preachers, pastors, marriage, price, cost, planning, venue, affordable, cheap";
$page_path        = "/kansascity.php";
$page_image       = "/images/prairie-couple.jpg";
$page_schema      = [
  "@type" => "LocalBusiness",
  "name"  => "It's A Wonderful Life Weddings — Kansas City",
  "address" => [
    "@type" => "PostalAddress",
    "addressLocality" => "Kansas City",
    "addressRegion" => "MO",
    "addressCountry" => "US"
  ],
  "telephone" => "+1-913-800-0349",
  "areaServed" => ["Kansas City", "Overland Park", "Lenexa", "Leawood", "Olathe"]
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
      <?php img('images/prairie-couple.jpg', 'Kansas City couple on the prairie', ['eager' => true, 'sizes' => '100vw']); ?>
    </div>
    <div class="subhero-inner" data-reveal>
      <nav class="crumbs" aria-label="Breadcrumb"><a href="/index.php">Home</a><span class="sep">/</span>Kansas City</nav>
      <span class="eyebrow">Where It All Began</span>
      <h1>Kansas City Weddings</h1>
    </div>
  </section>

  <section class="section section--cream">
    <div class="container">

      <!-- Pastor David Barger -->
      <article class="pastor scroll-mt" id="davidbarger" data-reveal>
        <div class="pastor-photo">
          <?php img('images/david-barger-wedding.jpg', 'Pastor David Barger at a ceremony'); ?>
        </div>
        <div>
          <span class="pastor-role">Senior Pastor &amp; Founder</span>
          <h2 class="pastor-name">Pastor David Barger</h2>

          <p>Senior Pastor David Barger founded the team in the Kansas City Metro back in 2010 on one guiding principle, “Your wedding done your way”. Since then, our team has grown to 5 Officiants in four areas of the States. Pastor David brings years of experience and studies into all faiths and religions. His ceremony writing skills have garnered awards and has helped place the team in the Knot.com Officiant Team Hall of Fame consistently gathering five star reviews. Some of his accomplishments include:</p>

          <ul>
            <li>Ordained Minister and Wedding Officiant</li>
            <li>Founded It’s A Wonderful Life Weddings in Kansas City, 2010</li>
            <li>Motivational Speaker and Consultant</li>
            <li>Retired Broadcast Television Meteorologist</li>
            <li>Bachelors Degree, Wichita State University</li>
            <li>Associates Degree, Barton County Community College</li>
            <li>Attended Oklahoma City University of Law</li>
            <li>Church Eucharistic Minister, Administrative Board, Staff Parish Relations, Sunday School Leader, New Testament Educator</li>
            <li>U.S. Army Veteran</li>
          </ul>

          <p>Pastor David is a calm, steady voice to help you realize your wedding dream. Contact him today to secure your wedding date.</p>

          <blockquote>“We were so fortunate to have Pastor David for our daughter’s wedding. He was an amazing officiant that was easy to talk with, very helpful in guiding our daughter and now son-in-law in planning their ceremony, and was kind in his interaction with our wedding party and guests. His communication skills are excellent which was quite helpful as we changed dates due to the pandemic. His experience in officiating was quite evident in our ceremony and we are quite grateful for his calm, positive demeanor as well as his sense of humor. The most compliments our guests shared with us throughout the wedding day we’re about how much they liked Pastor David.”</blockquote>

          <blockquote>“With all the chaos of wedding planning, Pastor David and Ms. Elaine were the calming, reassuring presence we needed. We did the initial meeting via video chat and immediately knew they were the right fit for us. Pastor David provided several ceremony samples and we went through two revisions. He was committed to making sure it was perfect. At the rehearsal, Ms. Elaine provided guidance, suggestions and patiently waited while we practiced as many times as we needed. On wedding day, both Ms. Elaine and Pastor David encouraged and reassured us, continues to guide the process seamlessly. We ABSOLUTELY recommend It's A Wonderful Life Weddings SA!”</blockquote>

          <div class="pastor-contact">
            <a href="tel:9138000349"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" stroke-linecap="round" stroke-linejoin="round"/></svg> 913-800-0349 (Kansas City)</a>
            <a href="tel:2107125458"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" stroke-linecap="round" stroke-linejoin="round"/></svg> 210-712-5458 (San Antonio)</a>
            <a href="mailto:pastordavidbarger@gmail.com"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> Email Pastor David</a>
          </div>
        </div>
      </article>

      <!-- Officiant Elaine Hanson -->
      <article class="pastor scroll-mt" id="elainehanson" data-reveal>
        <div class="pastor-photo">
          <?php img('images/elaine-hanson-ceremony.jpg', 'Officiant Elaine Hanson at a ceremony'); ?>
        </div>
        <div>
          <span class="pastor-role">Officiant &amp; Team Member</span>
          <h2 class="pastor-name">Officiant Elaine Hanson</h2>

          <p>Elaine’s experience as a teacher, learning specialist, and wedding officiant gives her the background to work with each couple in an authentic and caring way. On the day of your wedding, she sets the tone of making your marriage ceremony meaningful and a moment to remember! Elaine specializes in small, intimate weddings, blended families, and renewal of vows. If you are seeking someone who is responsible, respectful and willing to work on your behalf, Elaine is your Wedding Officiant!</p>

          <ul>
            <li>Officiant and Team Member of It’s A Wonderful Life Weddings</li>
            <li>Owner, Hanson’s Tutoring Service, San Antonio</li>
            <li>Bachelor Degree, Education, University of Kansas</li>
            <li>Masters, Degree in Special Education, Kansas State University</li>
            <li>Learning Specialist Education (ED.S.) University of Kansas</li>
            <li>Learning Resource Specialist, USD 233, 30 years in Olathe, Kansas</li>
            <li>Mediation Certificate</li>
            <li>Elementary and High School Sunday School Teacher</li>
          </ul>

          <blockquote>"The officiant went above and beyond to ensure that we were comfortable and happy with the script. We passed around multiple drafts to each other, and they were able to accommodate some of our last-minute changes. Elaine was the officiant for our wedding, and she officiated us beautifully. The couple was so understanding of our circumstances with some sick family members, and took extra steps to ensure that they were recognized. They're such a caring and wonderful couple that goes the extra mile for the couples. I highly recommend them!" ~ Jieun H.</blockquote>

          <blockquote>"With all the chaos of wedding planning, Pastor David and Ms. Elaine were the calming, reassuring presence we needed.
          We did the initial meeting via video chat and immediately knew they were the right fit for us. Pastor David provided several ceremony samples and we went through two revisions. He was committed to making sure it was perfect.
          At the rehearsal, Ms. Elaine provided guidance, suggestions and patiently waited while we practiced as many times as we needed.
          On wedding day, both Ms. Elaine and Pastor David encouraged and reassured us, continues to guide the process seamlessly.
          We ABSOLUTELY recommend It's A Wonderful Life Weddings SA!"</blockquote>

          <div class="pastor-contact">
            <a href="tel:9136019631"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" stroke-linecap="round" stroke-linejoin="round"/></svg> 913-601-9631</a>
            <a href="mailto:elainehanson2@yahoo.com"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> Email Elaine Hanson</a>
          </div>
        </div>
      </article>

    </div>
  </section>

</main>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
