<?php /* Site header / navigation. Markup intentionally semantic-first. */ ?>
<a class="skip-link" href="#main">Skip to main content</a>
<header class="site-header" role="banner">
  <div class="nav-inner">
    <a class="brand" href="/index.php" aria-label="It's A Wonderful Life Weddings — Home">
      <span class="brand-monogram" aria-hidden="true">
        <img src="/images/ww-icon.png" alt="" class="brand-monogram-light" width="78" height="38">
        <img src="/images/ww-icon-dark.png" alt="" class="brand-monogram-dark" width="78" height="38">
      </span>
      <span class="brand-text">
        <span>It's a Wonderful Life</span>
        <span>Weddings</span>
      </span>
    </a>

    <nav aria-label="Primary">
      <ul class="nav-links">
        <li class="has-submenu">
          <button type="button" class="nav-toggle" aria-haspopup="true" aria-expanded="false" aria-controls="menu-services">Services <span class="chev" aria-hidden="true"></span></button>
          <ul id="menu-services" class="dropdown">
            <li><a href="/pricing.php#weddings">Weddings</a></li>
            <li><a href="/quinceaneras.php">Quinceañeras</a></li>
            <li><a href="/baptism.php">In&nbsp;Home Baptisms</a></li>
          </ul>
        </li>
        <li class="has-submenu">
          <button type="button" class="nav-toggle" aria-haspopup="true" aria-expanded="false" aria-controls="menu-locations">Locations <span class="chev" aria-hidden="true"></span></button>
          <ul id="menu-locations" class="dropdown">
            <li><a href="/sanantonio.php">San Antonio</a></li>
            <li><a href="/austin.php">Austin</a></li>
            <li><a href="/kansascity.php">Kansas City</a></li>
            <li><a href="/kentucky.php">Central Kentucky</a></li>
          </ul>
        </li>
        <li><a href="/pricing.php">Pricing</a></li>
        <li><a href="/faqs.php">FAQs</a></li>
        <li><a href="/reviews.php">Reviews</a></li>
        <li class="has-submenu">
          <button type="button" class="nav-toggle" aria-haspopup="true" aria-expanded="false" aria-controls="menu-pastors">Pastors <span class="chev" aria-hidden="true"></span></button>
          <ul id="menu-pastors" class="dropdown">
            <li><a href="/kansascity.php#davidbarger">Pastor David Barger</a></li>
            <li><a href="/kentucky.php#truemonbarger">Dr. Truemon Barger</a></li>
            <li><a href="/kansascity.php#elainehanson">Officiant Elaine Hanson</a></li>
            <li><a href="/austin.php#reneehansonmalone">Renee Hanson Malone</a></li>
            <li><a href="/sanantonio.php#manuelmaldonado">Pastor Manuel Maldonado</a></li>
            <li><a href="/sanantonio.php#josecruz">Pastor Jose Cruz</a></li>
          </ul>
        </li>
        <li class="has-submenu">
          <button type="button" class="nav-toggle" aria-haspopup="true" aria-expanded="false" aria-controls="menu-media">Media <span class="chev" aria-hidden="true"></span></button>
          <ul id="menu-media" class="dropdown">
            <li><a href="/photos.php">Photo Gallery</a></li>
            <li><a href="/videos.php">Pastor Cam Videos</a></li>
          </ul>
        </li>
      </ul>
    </nav>

    <a class="nav-cta" href="/contact.php">Book a Date</a>

    <button class="nav-burger" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-nav">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true" focusable="false"><path d="M3 7h18M3 12h18M3 17h18" stroke-linecap="round"/></svg>
    </button>
  </div>
</header>

<aside id="mobile-nav" class="mobile-nav" aria-label="Mobile menu" aria-hidden="true">
  <button class="mobile-nav-close" type="button" aria-label="Close menu">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true" focusable="false"><path d="M6 6l12 12M18 6L6 18" stroke-linecap="round"/></svg>
  </button>
  <a class="brand" href="/index.php" style="color:var(--ink); margin-bottom: var(--sp-5);">
    <img src="/images/ww-icon-dark.png" alt="" width="78" height="38">
    <span class="brand-text" style="color:var(--ink)">
      <span style="color:var(--plum)">It's a Wonderful Life</span>
      <span>Weddings</span>
    </span>
  </a>
  <ul>
    <li class="mobile-nav-group">
      <button type="button" aria-expanded="false" aria-controls="m-services">Services <span class="chev" aria-hidden="true"></span></button>
      <ul id="m-services" class="submenu">
        <li><a href="/pricing.php#weddings">Weddings</a></li>
        <li><a href="/quinceaneras.php">Quinceañeras</a></li>
        <li><a href="/baptism.php">In Home Baptisms</a></li>
      </ul>
    </li>
    <li class="mobile-nav-group">
      <button type="button" aria-expanded="false" aria-controls="m-locations">Locations <span class="chev" aria-hidden="true"></span></button>
      <ul id="m-locations" class="submenu">
        <li><a href="/sanantonio.php">San Antonio</a></li>
        <li><a href="/austin.php">Austin</a></li>
        <li><a href="/kansascity.php">Kansas City</a></li>
        <li><a href="/kentucky.php">Central Kentucky</a></li>
      </ul>
    </li>
    <li class="mobile-nav-group"><a href="/pricing.php">Pricing</a></li>
    <li class="mobile-nav-group"><a href="/faqs.php">FAQs</a></li>
    <li class="mobile-nav-group"><a href="/reviews.php">Reviews</a></li>
    <li class="mobile-nav-group">
      <button type="button" aria-expanded="false" aria-controls="m-pastors">Pastors <span class="chev" aria-hidden="true"></span></button>
      <ul id="m-pastors" class="submenu">
        <li><a href="/kansascity.php#davidbarger">Pastor David Barger</a></li>
        <li><a href="/kentucky.php#truemonbarger">Dr. Truemon Barger</a></li>
        <li><a href="/kansascity.php#elainehanson">Officiant Elaine Hanson</a></li>
        <li><a href="/austin.php#reneehansonmalone">Renee Hanson Malone</a></li>
        <li><a href="/sanantonio.php#manuelmaldonado">Pastor Manuel Maldonado</a></li>
        <li><a href="/sanantonio.php#josecruz">Pastor Jose Cruz</a></li>
      </ul>
    </li>
    <li class="mobile-nav-group">
      <button type="button" aria-expanded="false" aria-controls="m-media">Media <span class="chev" aria-hidden="true"></span></button>
      <ul id="m-media" class="submenu">
        <li><a href="/photos.php">Photo Gallery</a></li>
        <li><a href="/videos.php">Pastor Cam Videos</a></li>
      </ul>
    </li>
    <li class="mobile-nav-group"><a href="/contact.php">Contact Us</a></li>
  </ul>
  <a class="btn btn--gold mobile-nav-cta" href="tel:2107125458">Call Us · 210-712-5458</a>
</aside>
