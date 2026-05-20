<?php
require_once __DIR__ . '/partials/helpers.php';
$page_title       = "It's A Wonderful Life Weddings — Award-Winning Officiants in San Antonio, Austin & Beyond";
$page_description = "Named 2018, 2019, 2020, and 2021 Best of Wedding Officiants by Theknot.com, Pastor David creates imaginative, moving, and unique Texas wedding ceremonies exclusive to each couple.";
$page_keywords    = "wedding, weddings,  affordable, bride, ceremony, ceremonies, Pastor, David, Barger, Officiant, Officiants, marriage, venues, events, religious, non-religious, lgbt, friendly, San Antonio, Austin, Hill Country, Bexar, Travis, quinceanera, quinceaneras, price, cost, affordable, cheap, inexpensive, best, Christian, non-denominational, protestant, catholic, It's A Wonderful Life Weddings San Antonio, It's A Wonderful Life Weddings SA, It's A Wonderful Life Weddings Austin, It's A Wonderful Life Weddings New Braunfels";
$page_path        = "/index.php";
$page_image       = "/images/main-header.jpg";
$page_schema      = [
  "@type" => "WebSite",
  "@id"   => "https://www.itsawonderfullifeweddings.com#website",
  "url"   => "https://www.itsawonderfullifeweddings.com/",
  "name"  => "It's A Wonderful Life Weddings",
  "publisher" => ["@id" => "https://www.itsawonderfullifeweddings.com#organization"]
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

  <!-- HERO -->
  <section class="hero">
    <div class="hero-bg">
      <?php img('images/main-header.jpg', 'Couple kissing by the sea', ['eager' => true, 'sizes' => '100vw']); ?>
    </div>
    <div class="hero-inner" data-reveal>
      <span class="eyebrow" style="color:var(--gold-soft); margin-bottom: var(--sp-3);">Best of Weddings · Hall of Fame</span>
      <h1>
        <span class="script-accent">It's a Wonderful Life</span>
        Weddings
      </h1>
      <p class="lede">Award-winning wedding officiants creating imaginative, moving, and unique ceremonies — exclusive to each couple.</p>
      <div class="hero-actions">
        <a class="btn btn--gold" href="/contact.php">Book Your Date</a>
        <a class="btn btn--ghost-light" href="/pricing.php#weddings">View Packages</a>
      </div>
    </div>
    <div class="hero-meta">
      <span>San Antonio</span><span class="dot"></span>
      <span>Austin</span><span class="dot"></span>
      <span>Hill Country</span><span class="dot"></span>
      <span>Kansas City</span><span class="dot"></span>
      <span>Central Kentucky</span>
    </div>
  </section>

  <!-- HALL OF FAME -->
  <section class="section section--plum">
    <div class="container-tight text-center">
      <div class="section-title" data-reveal>
        <span class="eyebrow">Honored Recognition</span>
        <h2>We're Best of Weddings Hall of Fame Inductees!</h2>
      </div>
      <p class="lede" data-reveal data-reveal-delay="1" style="color: rgba(250,246,239,0.85);">
        We are pleased to announce that we have been inducted into The Knot, the world's leading wedding website, Best of Weddings Hall of Fame! Only exceptional wedding professionals who have earned four or more of the Best of Weddings awards are inducted into the prestigious <a href="https://www.theknot.com/marketplace/its-a-wonderful-life-weddings-sa-san-antonio-tx-770900" target="_blank" rel="noopener">TheKnot.com</a> Best of Weddings Hall of Fame. To determine the winners, The Knot analyzed its millions of user reviews across various vendor categories to find the highest rated vendors of the year. These winners represent the best of the best wedding professionals that engaged couples should consider booking for their own unique weddings. In 2021, Best of Weddings winners represent the top five percent of local wedding vendors listed on The Knot.
      </p>
      <div class="trust-strip" data-reveal data-reveal-delay="2">
        <a href="https://www.theknot.com/marketplace/its-a-wonderful-life-weddings-sa-san-antonio-tx-770900" target="_blank" rel="noopener" aria-label="The Knot Hall of Fame">
          <?php img('images/knot-hall-of-fame-badge.png', 'The Knot Best of Weddings Hall of Fame', ['attrs' => ['style' => 'height: 180px;']]); ?>
        </a>
      </div>
    </div>
  </section>

  <!-- TESTIMONIAL 1 -->
  <section class="section section--cream">
    <div class="container">
      <div class="feature-row" data-reveal>
        <div class="testimonial-photo">
          <?php img('images/bride-groom-heart-background.jpg', 'Couple forming a heart with their hands', ['sizes' => '(min-width: 900px) 540px, 100vw']); ?>
        </div>
        <div>
          <span class="eyebrow eyebrow--left">What Our Clients Are Saying</span>
          <h2>"He seemed like he really wanted to marry you two."</h2>
          <blockquote>
            "They took the time to get to know us, to understand what this day meant, and what he created in the ceremony was perfect.
            The highlight of the entire experience was a couple of days later, when I was asked by a guest at our wedding who the pastor
            was and they commented: "He (Pastor David) seemed like he really wanted to marry you two, it was almost like he was just as
            proud to be there as you and your wife".
            I could not have described him any better. Thank you, Pastor David, for making our day even more special."
          </blockquote>
          <p class="testimonial-author">~ Mark K.</p>
          <p style="margin-top: var(--sp-5);">
            <a class="btn btn--ghost" href="https://www.theknot.com/marketplace/its-a-wonderful-life-weddings-sa-san-antonio-tx-770900?utm_source=vendor_website&amp;utm_medium=banner&amp;utm_term=77d0316a-ea60-41d4-ad19-a3b501522c47&amp;utm_campaign=vendor_badge_assets#reviews-area" target="_blank" rel="noopener">See Our Reviews on The Knot</a>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- QUALITY SERVICES / BARGER + HANSON -->
  <section class="section section--cream-2">
    <div class="container">
      <div class="section-title" data-reveal>
        <span class="eyebrow">Quality Services at an Affordable Price</span>
        <h2>Crafted with care. Performed with heart.</h2>
      </div>
      <div class="feature-row reverse" data-reveal data-reveal-delay="1">
        <div>
          <?php img('images/david-lainey-barger.jpg', 'Pastor David Barger with Officiant Elaine Hanson', ['sizes' => '(min-width: 900px) 480px, 100vw']); ?>
          <p class="text-center" style="margin-top: var(--sp-3);"><strong>Pastor David Barger &amp; Officiant Elaine Hanson</strong></p>
        </div>
        <div>
          <p>Thanks for taking an interest in our affordable Officiant services which have been voted best of
          Officiants on <a href="https://www.theknot.com/marketplace/its-a-wonderful-life-weddings-sa-san-antonio-tx-770900" target="_blank" rel="noopener">TheKnot.com</a>.
          We are a family, veteran owned, service
          headed by Pastor David and wife, Elaine. We provide original ceremonies, empowered by you that are down to earth,
          practical, yet fun wedding ceremonies. We feel we are the best at delivering you an affordable, memorable wedding
          ceremony no matter what your wishes are. Our mission is to give you a stress free ceremony so you can enjoy this
          once in a lifetime experience with the person you love. Keep in mind that with all the different events going on, your
          wedding comes down to the Ceremony. It is the most important part of your wedding day memories. Your Officiant is
          the only legal requirement to have at the wedding. All the other events are icing on the cake. Our custom written
          ceremonies are popular and have been featured on <a href="https://www.theknot.com" target="_blank" rel="noopener">TheKnot.com</a>. Most of all, we keep it affordable.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- VIDEO CONSULTATIONS -->
  <section class="section section--cream">
    <div class="container-tight">
      <div class="section-title" data-reveal>
        <span class="eyebrow">From Anywhere</span>
        <h2>Video Consultations</h2>
        <p>For your convenience and safety, we are now offering video consultations on just about any platform you use! Don't worry if you don't see your app of choice below, we're always willing to try something new!</p>
      </div>
      <div class="platforms" data-reveal data-reveal-delay="1">
        <div class="platform">
          <?php img('images/video-icons/facetime.png', 'Facetime'); ?>
          <p>Facetime</p>
        </div>
        <div class="platform">
          <?php img('images/video-icons/zoom.png', 'Zoom'); ?>
          <p>Zoom</p>
        </div>
        <div class="platform">
          <?php img('images/video-icons/microsoft-teams.png', 'Microsoft Teams'); ?>
          <p>Microsoft Teams</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SPANISH CEREMONIES -->
  <section class="section section--cream-2">
    <div class="container-tight text-center">
      <div data-reveal>
        <span class="eyebrow">Bilingual Services</span>
        <h2>Ceremonies in Spanish</h2>
        <p class="lede"><a href="/sanantonio.php#josecruz">Pastor Jose Cruz</a>, and Pastor Manuel Maldonado, officiate wedding ceremonies in the English and Spanish languages, and in some instances in both languages to accommodate the needs of the bride and groom and their loved ones.</p>
      </div>
    </div>
  </section>

  <!-- TESTIMONIAL 2 -->
  <section class="section section--cream">
    <div class="container">
      <div class="feature-row" data-reveal>
        <div class="testimonial-photo">
          <?php img('images/bride-groom-lake-background.jpg', 'Bride and groom embracing by a lake', ['sizes' => '(min-width: 900px) 540px, 100vw']); ?>
        </div>
        <div>
          <span class="eyebrow eyebrow--left">Don't Just Take Our Word For It</span>
          <h2>"Pastor David was incredibly personable, professional, funny and kind."</h2>
          <blockquote>
            "Words cannot describe how amazing Pastor David is at It's a Wonderful Life Weddings! He was absolutely wonderful in every
            way and we could not be more thankful for him and his wife Elaine for making sure our wedding ceremony went off without a
            hitch! Pastor David was incredibly personable, professional, funny and kind. He made us feel so comfortable throughout the
            entire process! Our wedding was a beautiful success because of Pastor David!"
          </blockquote>
          <p class="testimonial-author">~ Brooke A.</p>
          <p style="margin-top: var(--sp-5);">
            <!--$begin html$--><script src="https://cdn1.weddingwire.com/_js/wp-rated.js?v=4"></script>
              <a id="wp-rated-img" href="https://www.weddingwire.com/biz/its-a-wonderful-life-weddings-sa-san-antonio/45fcd8eaa7611fb9.html" title="Reviewed on WeddingWire" style="display: inline-block; background-image: url(&quot;https://cdn1.weddingwire.com/assets/img/en_CA/badges/rated/badge-3.png&quot;); width: 130px; height: 130px; background-size: contain; background-repeat: no-repeat; position: relative;">
                  <span id="wp-rated-reviews" style="position: absolute; left: 50%; transform: translateX(-50%); text-align: center; top: 45px; color: rgb(255, 255, 255); font-family: Arial, sans-serif; font-size: 31px;">9</span>
              </a>
              <script>wpShowRatedWW('715669');</script>
            <!--$end html$-->
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- TRUST / IAPWO -->
  <section class="section section--plum">
    <div class="container-tight text-center">
      <div data-reveal>
        <span class="eyebrow">Trust Your Wedding to the Best!</span>
        <h2>Custom-made ceremonies, never off-the-rack.</h2>
        <p class="lede" style="color: rgba(250,246,239,0.85);">
          You can put your trust in our proven method of custom ceremony creation to give you a lifetime
          of great memories. We succeed by keeping one thing in mind; it is your wedding ceremony. We feel we are
          innovators in the field of Wedding Officiants, and it shows in the level of care our couples receive. We are members in
          good standing of the International Association of Professional Wedding Officiants, constantly making sure our
          ceremonies stand up to their quality standards. There are no pre-set menus to pick from with us. Your ceremony is custom made, just
          as you like it.
        </p>
        <div class="trust-strip" data-reveal data-reveal-delay="1">
          <?php img('images/iapwo.png', 'International Association of Professional Wedding Officiants logo', ['attrs' => ['style' => 'height: 220px; background: rgba(255,255,255,0.06); padding: 20px; border-radius: 18px;']]); ?>
        </div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIAL 3 + REVIEWS CTA -->
  <section class="section section--cream-2">
    <div class="container">
      <div class="feature-row reverse" data-reveal>
        <div class="testimonial-photo">
          <?php img('images/bride-groom-destination-background.jpg', 'Bride and groom embracing at a destination wedding', ['sizes' => '(min-width: 900px) 540px, 100vw']); ?>
        </div>
        <div>
          <span class="eyebrow eyebrow--left">Rave Reviews Keep Pouring In!</span>
          <h2>"Pastor David was awesome!"</h2>
          <blockquote>
            "Pastor David was awesome! Our ceremony was fantastic and several of our wedding guests mentioned how much they loved our
            officiant!"
          </blockquote>
          <p class="testimonial-author">~ Chad D.</p>
          <blockquote style="margin-top: var(--sp-5);">
            "Pastor David did a fantastic job with our ceremony! He was a great speaker and really tailored the ceremony to fit our
            personalities. We will recommend him to others in the future!"
          </blockquote>
          <p class="testimonial-author">~ Rachel</p>
          <p style="margin-top: var(--sp-6);">
            <a class="btn btn--primary" href="/reviews.php">Read More Reviews</a>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- OUR PROMISE -->
  <section class="section section--cream">
    <div class="container-tight">
      <div class="section-title" data-reveal>
        <span class="eyebrow">A Solemn Commitment</span>
        <h2>Our Promise to You!</h2>
        <p>
          <?php img('images/pinky-promise.png', 'Pinky promise icon', ['attrs' => ['style' => 'height: 70px; margin: var(--sp-4) auto 0;']]); ?>
        </p>
      </div>
      <div data-reveal data-reveal-delay="1">
        <p>We only book one wedding a day per Officiant. We do not double book. In all the years of service, we have never
        missed a ceremony. We promise to be there.</p>
        <p>As your Celebrant, we promise to you that we will:</p>
        <ul>
          <li>Meet with you at a no-obligation interview to discuss your vision of the ceremony.</li>
          <li>Listen to you to learn your personal story.</li>
          <li>Share our ritual ideas of how to make your vision a reality.</li>
          <li>Craft and write a ceremony that incorporates our shared creativity.</li>
          <li>Consult with you until the ceremony is just right.</li>
          <li>Rehearse with you in a way that is fun and engaging, so that you will be confident and comfortable during
          your ceremony and able to be fully present to the moment.</li>
          <li>Serve as an Officiant for your wedding day, which includes arriving early to coordinate all ceremonial
          details.</li>
          <li>Submit a signed legal document to the County Clerk.</li>
        </ul>
        <p class="text-center" style="margin: var(--sp-5) 0;">
          <?php img('images/wedding-rings.png', 'Wedding rings', ['attrs' => ['style' => 'height: 100px; margin: 0 auto;']]); ?>
        </p>
        <p>Ceremonies are affordable and we never let a fee stand in the way of a great wedding. Give us a
        call and lets discuss how we can make this important day more than
        you could expect. Also, be sure and ask about our Active Military and First Responders special pricing.</p>
        <p class="text-center" style="margin-top: var(--sp-6);">
          <a class="btn btn--gold" href="/pricing.php">See Pricing & Packages</a>
        </p>
      </div>
    </div>
  </section>

  <!-- LOCATIONS -->
  <section class="section section--plum">
    <div class="container">
      <div class="section-title" data-reveal>
        <span class="eyebrow">Now Serving Multiple Locations!</span>
        <h2 style="color: var(--cream);">Where will your "Wonderful Life" begin?</h2>
        <p class="lede" style="color: rgba(250,246,239,0.85);"><strong>Whether it is in San Antonio, Austin, the Hill Country, Kansas City, or Central Kentucky, we are ready to help you make your dreams come true. We are dedicated to making this part of your life, "A Wonderful Life."</strong></p>
      </div>

      <figure class="service-map" data-reveal data-reveal-delay="1">
        <div class="service-map-frame">
          <?php img('images/service-area-map.png', 'Stylized map of our service area covering Texas, Kansas City, and Central Kentucky', ['sizes' => '(min-width: 720px) 540px, 90vw']); ?>
          <a class="service-pin service-pin--kc" href="/kansascity.php" aria-label="Kansas City weddings">
            <span class="service-pin-tip">Kansas City</span>
          </a>
          <a class="service-pin service-pin--ky" href="/kentucky.php" aria-label="Central Kentucky weddings">
            <span class="service-pin-tip">Central Kentucky</span>
          </a>
          <a class="service-pin service-pin--tx" href="/sanantonio.php" aria-label="San Antonio and Austin weddings">
            <span class="service-pin-tip">San Antonio &amp; Austin</span>
          </a>
        </div>
        <figcaption class="service-map-caption">Tap a heart to learn more about that location.</figcaption>
      </figure>

      <div class="locations" data-reveal data-reveal-delay="2">
        <a href="/sanantonio.php" class="loc">
          <?php img('images/san-antonio.jpg', 'San Antonio weddings', ['sizes' => '(min-width: 980px) 25vw, 100vw']); ?>
          <div class="loc-label">
            <div class="eyebrow">Texas</div>
            <h3>San Antonio <span class="arrow">→</span></h3>
          </div>
        </a>
        <a href="/austin.php" class="loc">
          <?php img('images/flowers-couple.jpg', 'Austin weddings', ['sizes' => '(min-width: 980px) 25vw, 100vw']); ?>
          <div class="loc-label">
            <div class="eyebrow">Texas Hill Country</div>
            <h3>Austin <span class="arrow">→</span></h3>
          </div>
        </a>
        <a href="/kansascity.php" class="loc">
          <?php img('images/prairie-couple.jpg', 'Kansas City weddings', ['sizes' => '(min-width: 980px) 25vw, 100vw']); ?>
          <div class="loc-label">
            <div class="eyebrow">Missouri</div>
            <h3>Kansas City <span class="arrow">→</span></h3>
          </div>
        </a>
        <a href="/kentucky.php" class="loc">
          <?php img('images/kentucky-wedding-couple.jpg', 'Central Kentucky weddings', ['sizes' => '(min-width: 980px) 25vw, 100vw']); ?>
          <div class="loc-label">
            <div class="eyebrow">Bluegrass State</div>
            <h3>Central Kentucky <span class="arrow">→</span></h3>
          </div>
        </a>
      </div>
    </div>
  </section>

</main>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
