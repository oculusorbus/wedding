<?php /* Site header / navigation. Markup intentionally semantic-first. */ ?>
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
          <button type="button" class="nav-toggle" aria-haspopup="true" aria-expanded="false">Services <span class="chev" aria-hidden="true"></span></button>
          <ul class="dropdown" role="menu">
            <li><a href="/pricing.php#weddings" role="menuitem">Weddings</a></li>
            <li><a href="/quinceaneras.php" role="menuitem">Quinceañeras</a></li>
            <li><a href="/baptism.php" role="menuitem">In&nbsp;Home Baptisms</a></li>
          </ul>
        </li>
        <li class="has-submenu">
          <button type="button" class="nav-toggle" aria-haspopup="true" aria-expanded="false">Locations <span class="chev" aria-hidden="true"></span></button>
          <ul class="dropdown" role="menu">
            <li><a href="/sanantonio.php" role="menuitem">San Antonio</a></li>
            <li><a href="/austin.php" role="menuitem">Austin</a></li>
            <li><a href="/kansascity.php" role="menuitem">Kansas City</a></li>
            <li><a href="/kentucky.php" role="menuitem">Central Kentucky</a></li>
          </ul>
        </li>
        <li><a href="/pricing.php">Pricing</a></li>
        <li><a href="/faqs.php">FAQs</a></li>
        <li><a href="/reviews.php">Reviews</a></li>
        <li class="has-submenu">
          <button type="button" class="nav-toggle" aria-haspopup="true" aria-expanded="false">Pastors <span class="chev" aria-hidden="true"></span></button>
          <ul class="dropdown" role="menu">
            <li><a href="/kansascity.php#davidbarger" role="menuitem">Pastor David Barger</a></li>
            <li><a href="/kentucky.php#truemonbarger" role="menuitem">Dr. Truemon Barger</a></li>
            <li><a href="/kansascity.php#elainehanson" role="menuitem">Officiant Elaine Hanson</a></li>
            <li><a href="/austin.php#reneehansonmalone" role="menuitem">Renee Hanson Malone</a></li>
            <li><a href="/sanantonio.php#manuelmaldonado" role="menuitem">Pastor Manuel Maldonado</a></li>
            <li><a href="/sanantonio.php#josecruz" role="menuitem">Pastor Jose Cruz</a></li>
          </ul>
        </li>
        <li class="has-submenu">
          <button type="button" class="nav-toggle" aria-haspopup="true" aria-expanded="false">Media <span class="chev" aria-hidden="true"></span></button>
          <ul class="dropdown" role="menu">
            <li><a href="/photos.php" role="menuitem">Photo Gallery</a></li>
            <li><a href="/videos.php" role="menuitem">Pastor Cam Videos</a></li>
          </ul>
        </li>
      </ul>
    </nav>

    <a class="nav-cta" href="/contact.php">Book a Date</a>

    <button class="nav-burger" aria-label="Open menu" aria-controls="mobile-nav">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M3 7h18M3 12h18M3 17h18" stroke-linecap="round"/></svg>
    </button>
  </div>
</header>

<aside id="mobile-nav" class="mobile-nav" aria-label="Mobile menu">
  <button class="mobile-nav-close" aria-label="Close menu">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M6 6l12 12M18 6L6 18" stroke-linecap="round"/></svg>
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
      <button type="button">Services <span class="chev"></span></button>
      <ul class="submenu">
        <li><a href="/pricing.php#weddings">Weddings</a></li>
        <li><a href="/quinceaneras.php">Quinceañeras</a></li>
        <li><a href="/baptism.php">In Home Baptisms</a></li>
      </ul>
    </li>
    <li class="mobile-nav-group">
      <button type="button">Locations <span class="chev"></span></button>
      <ul class="submenu">
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
      <button type="button">Pastors <span class="chev"></span></button>
      <ul class="submenu">
        <li><a href="/kansascity.php#davidbarger">Pastor David Barger</a></li>
        <li><a href="/kentucky.php#truemonbarger">Dr. Truemon Barger</a></li>
        <li><a href="/kansascity.php#elainehanson">Officiant Elaine Hanson</a></li>
        <li><a href="/austin.php#reneehansonmalone">Renee Hanson Malone</a></li>
        <li><a href="/sanantonio.php#manuelmaldonado">Pastor Manuel Maldonado</a></li>
        <li><a href="/sanantonio.php#josecruz">Pastor Jose Cruz</a></li>
      </ul>
    </li>
    <li class="mobile-nav-group">
      <button type="button">Media <span class="chev"></span></button>
      <ul class="submenu">
        <li><a href="/photos.php">Photo Gallery</a></li>
        <li><a href="/videos.php">Pastor Cam Videos</a></li>
      </ul>
    </li>
    <li class="mobile-nav-group"><a href="/contact.php">Contact Us</a></li>
  </ul>
  <a class="btn btn--gold mobile-nav-cta" href="/contact.php">Book Your Date</a>
</aside>
