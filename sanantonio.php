<?php
require_once __DIR__ . '/partials/helpers.php';
$page_title       = "San Antonio Weddings | It's A Wonderful Life Weddings";
$page_description = "It's A Wonderful Life Weddings is a premier wedding officiant service in the San Antonio/Austin/Hill Country area of Texas. Brides love us, wedding planners love us, venues love us. You will too. 5 star ratings.";
$page_keywords    = "Pastor, david, barger, david barger, elaine hanson, joe, hallam, joe hallam, glenda hallam reverend, marriage, weddings, civil, committments, brides, grooms, wedding, minister, officiant, marriages, venues, events, ministerial, lgbt,  san antonio, austin, texas, wedding officiant, wedding officiants, wedding minister, wedding ministers, 78261, ceremony, ceremonies, brides, bridal, grooms, groom, non-denominational, catholic, protestant, alternative, cost, price, cheap, inexpensive";
$page_path        = "/sanantonio.php";
$page_image       = "/images/couple-sunset.jpg";
$page_schema      = [
  "@type" => "LocalBusiness",
  "name"  => "It's A Wonderful Life Weddings — San Antonio",
  "address" => [
    "@type" => "PostalAddress",
    "addressLocality" => "San Antonio",
    "addressRegion" => "TX",
    "addressCountry" => "US"
  ],
  "telephone" => "+1-210-712-5458",
  "areaServed" => ["San Antonio", "Hill Country", "South Texas"]
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
      <?php img('images/couple-sunset.jpg', 'San Antonio couple at sunset', ['eager' => true, 'sizes' => '100vw']); ?>
    </div>
    <div class="subhero-inner" data-reveal>
      <nav class="crumbs" aria-label="Breadcrumb"><a href="/index.php">Home</a><span class="sep">/</span>San Antonio</nav>
      <span class="eyebrow">Serving South Texas</span>
      <h1>San Antonio Weddings</h1>
    </div>
  </section>

  <section class="section section--cream">
    <div class="container">

      <!-- Pastor Manuel Maldonado -->
      <article class="pastor scroll-mt" id="manuelmaldonado" data-reveal>
        <div class="pastor-photo">
          <?php img('images/manuel-maldonado.jpg', 'Pastor Manuel Maldonado'); ?>
        </div>
        <div>
          <span class="pastor-role">Wedding Officiant · Bilingual Ceremonies · Christ-Centered Celebrations</span>
          <h2 class="pastor-name">Pastor Manuel Maldonado</h2>
          <p><i>San Antonio, Texas — Serving Couples Throughout South Texas</i></p>

          <p>Pastor Manuel Maldonado has lived in San Antonio since 1989, bringing over <strong>30 years of faithful service to the Lord</strong> through pastoral leadership, mentorship, and generational ministry. Born into a second-generation Puerto Rican pastoral family in Rochester, New York, Manuel's heritage of community outreach and spiritual care fuels his heart to serve others with compassion and purpose.</p>

          <p>He is a <strong>born-again believer in Jesus Christ</strong> whose life reflects an unwavering commitment to marriage ministry and family restoration. Alongside his wife of over 34 years, Manuel has led marriage-focused programs, guided couples through biblical wisdom, and celebrated meaningful unions that honor God’s covenant design.</p>

          <p>Manuel’s officiant experience spans <strong>English, Spanish, and bilingual ceremonies</strong>, creating inclusive environments that honor each couple’s unique story, heritage, and faith walk. His joy is witnessing two lives become one in a moment that carries spiritual depth and lasting impact.</p>

          <h3>Ministry Journey</h3>
          <ul>
            <li>Ordained through <strong>Summit Christian Center</strong> for over 19 years</li>
            <li>Currently serving with <strong>Community Bible Church (CBC)</strong></li>
            <li>Leader in <strong>Grace Alliance Mental Health Support</strong></li>
            <li>Partner with <strong>NAMI</strong> (National Alliance on Mental Illness)</li>
            <li>Mentor and facilitator of <strong>men’s accountability</strong> groups and <strong>mature marriage gatherings</strong></li>
            <li>Father of three adult children; married since <strong>August 1991</strong></li>
            <li>Guided by the belief that <i>“iron sharpens iron,”</i> building friendships through accountability and spiritual growth</li>
          </ul>

          <h3>Wedding Ministry Highlights</h3>
          <ul>
            <li>Officiates ceremonies tailored to your story and spiritual values</li>
            <li>Offers bilingual services in <strong>English and Spanish</strong> to reflect family traditions</li>
            <li>Provides optional <strong>pre-marital coaching</strong> rooted in Scripture and relational insight</li>
            <li>Leads with <strong>gentleness, joy, and faith-driven encouragement</strong></li>
            <li>Helps couples design meaningful, Spirit-led moments that reflect love and purpose</li>
          </ul>

          <blockquote>
            "Marriage is God’s covenant design—where love matures, purpose deepens, and two hearts become one in His perfect timing. Every wedding I officiate is an invitation to celebrate not just love, but legacy."<br>
            — Pastor Manuel Maldonado
          </blockquote>

          <h3>Ready to Begin Your Journey?</h3>
          <p>Let Pastor Manuel help make your day unforgettable with prayerful preparation and grace-filled celebration.</p>

          <div class="pastor-contact">
            <a href="tel:2108787030"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" stroke-linecap="round" stroke-linejoin="round"/></svg> 210-878-7439</a>
            <a href="mailto:mmaldo71@gmail.com"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke-linecap="round" stroke-linejoin="round"/><polyline points="22,6 12,13 2,6" stroke-linecap="round" stroke-linejoin="round"/></svg> Email Manuel</a>
          </div>
        </div>
      </article>

      <!-- Pastor Jose Cruz -->
      <article class="pastor scroll-mt" id="josecruz" data-reveal>
        <div class="pastor-photo">
          <?php img('images/jose-cruz.jpg', 'Pastor Jose Cruz'); ?>
        </div>
        <div>
          <span class="pastor-role">Wedding Officiant · English &amp; Spanish Ceremonies</span>
          <h2 class="pastor-name">Pastor Jose Cruz</h2>

          <p>Pastor Jose Cruz has resided in the San Antonio area for over 25 years. His passion for life-long marriages and the honor of witnessing two individuals come together as one, is one of his greatest joys.  Throughout the years, he has had the pleasure of officiated numerous wedding ceremonies in the English and Spanish languages, and in some instances in both languages to accommodate the needs of the bride and groom and their loved ones.</p>

          <p>He is a graduate of Wayland Baptist University, attaining the following degrees:</p>
          <ul>
            <li>AA - Associate of Applied Science in Religion</li>
            <li>BCM - Baccalaureate in Christian Ministry</li>
            <li>M.Ed. - Master of Education</li>
          </ul>

          <p style="margin: var(--sp-5) 0;">
            <?php img('images/jose-cruz-ceremony.jpg', 'Pastor Jose Cruz at a ceremony', ['attrs' => ['style' => 'border-radius: var(--r); box-shadow: var(--shadow);']]); ?>
          </p>

          <p>In his years of service to the San Antonio community, he has had the privilege of serving in the following roles and positions:</p>
          <ul>
            <li>Wedding Officiant</li>
            <li>Ordained Minister</li>
            <li>Bible Study Teacher</li>
            <li>Lead Pastor (Summit Centro Cristiano and The Bridge Christian Center)</li>
            <li>Vice President, Church of Hope Ministries (serving the homeless in the San Antonio community)</li>
            <li>Youth Pastor, Inner City Ministries</li>
            <li>Marriage Retreat Coordinator</li>
            <li>Marriage Coach</li>
          </ul>

          <div class="pastor-contact">
            <a href="tel:2107374135"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" stroke-linecap="round" stroke-linejoin="round"/></svg> 210-737-4135</a>
            <a href="mailto:pastorjosecruz01@yahoo.com"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke-linecap="round" stroke-linejoin="round"/><polyline points="22,6 12,13 2,6" stroke-linecap="round" stroke-linejoin="round"/></svg> Email Pastor José Cruz</a>
          </div>

          <details class="faq" style="margin-top: var(--sp-5);">
            <summary>Biografía En Español</summary>
            <div class="faq-body">
              <p>El Pastor José Cruz ha residido en el área de San Antonio por más de 25 años. Su pasión por los matrimonios duraderos y el honor de ver a dos personas unirse como una sola, es una de sus mayores alegrías. A lo largo de los años, ha tenido el placer de oficiar numerosas ceremonias de matrimonio en los idiomas de inglés y español, y en algunos casos en ambos idiomas para satisfacer las necesidades de los novios y sus seres queridos.</p>
              <p>Él es graduado de la Universidad Bautista Wayland y obtuvo los siguientes títulos universitarios:</p>
              <ul>
                <li>AA - Asociado en Ciencias Aplicadas en Religión</li>
                <li>BCM - Bachillerato en Ministerio Cristiano</li>
                <li>M.Ed. - Maestría en Educación</li>
              </ul>
              <p>En sus años de servicio a la comunidad de San Antonio, ha tenido el privilegio de servir en las siguientes funciones y cargos:</p>
              <ul>
                <li>Oficiante de Bodas Matrimoniales</li>
                <li>Ministro Ordenado</li>
                <li>Maestro de Estudios Bíblicos</li>
                <li>Pastor Principal (Summit Centro Cristiano y The Bridge Christian Center)</li>
                <li>Vicepresidente, Ministerio de la Iglesia de Esperanza (sirviendo a las personas desamparadas en la comunidad de San Antonio)</li>
                <li>Pastor de Jóvenes, Ministerios del Interior de la Ciudad</li>
                <li>Coordinador de Retiros Matrimoniales</li>
                <li>Entrenador de Matrimonios</li>
              </ul>
            </div>
          </details>
        </div>
      </article>

    </div>
  </section>

</main>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
