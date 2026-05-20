<?php
require_once __DIR__ . '/partials/helpers.php';
$page_title       = "FAQs | It's A Wonderful Life Weddings";
$page_description = "Named 2018 Best of Wedding Officiants by Theknot.com, Pastor David is a professional wedding officiant that custom creates each ceremony. All legal paperwork is completed and follow through is performed.";
$page_keywords    = "wedding, links, marriage, groom, bride, testimonial, cheap, price, cost, inexpensive, affordable, budget";
$page_path        = "/faqs.php";
$page_image       = "/images/couple-lake.jpg";

// FAQ Schema for rich snippets
$faqItems = [
  ["Why It's a Wonderful Life Weddings?",
   "Most of our couples do not have a church home and, subsequently, did not know how to get married. As an Officiant I am honored to work with people through some of life’s most awesome moments. I receive so much joy in creating the ceremony and then, on the wedding day, blessing the couple with a ceremony they can remember for years to come. The qualities I bring to your ceremony come from my background of education, but also from crafting and presiding at ceremonies, public events, and television broadcasting. My motivation and desire is to give you a custom made ceremony."],
  ["How much does a personalized ceremony cost?",
   "Each couple is different in what they are looking for in a ceremony and accordingly, my fees vary. In any given month, I am officiating wedding ceremonies normally ranging from $250-$450 for my services. By the time it is all said and done, your officiant will spend about 40 hours to make your day the best it can be. As a Celebrant, I take great pride in my work and expect perfection in what I do. Rather than merely inserting a one-size-fits-all wedding script for you to listen to, I custom create the written script for each couple. I take significant time to learn who you are individually and as a couple. I also explore what your wants and desires are for the ceremony. In listening to you, and gathering this key information, I can then offer creative ideas on how we can accomplish your dream ceremony. Of course, it always helps if the couple has ideas of their own. I love it when the bride overflows with creative ideas. In addition to the time it takes to develop a unique and personalized ceremony, my fee also includes unlimited consultation with me via email, in person, or telephone, and time and travel to lead your rehearsal and preside at your wedding ceremony. It also includes the proper preparation, delivery, and follow up to all legal documents. For more detailed information, please go to Services and Fees."],
  ["How long are your wedding ceremonies?",
   "I have found that the ideal range of time for a wedding ceremony is between 25 and 35 minutes. If it is shorter than 20 minutes, people may wonder why they took the time to get dressed up! With my creative way to a unique and personalized ceremony, your guests will be engaged and you will be surprised where the time went. Fun times."],
  ["Do we need to have a rehearsal?",
   "I view the rehearsal as an extension of the entire wedding experience, and it is usually at the rehearsal where the festivities begin. I have two goals for the rehearsal; The first is to get to know the wedding party, family, and friends. The second goal of the rehearsal is to walk through all of the “movements” of the ceremony, and to make sure the processional/recessional elements happen according to your desires. We do not run through the words, but rather keep them revered for the wedding day. In my experience, this type of rehearsal is an enjoyable experience that will give you the inspiration and confidence you need to be fully present during the ceremony. No worries! Rehearsals often last between 45 and 60 minutes."],
  ["Can we write our own vows?",
   "I would hope you do! Your vows are that exact moment when the world closes around you as a couple and you look into each others eyes and declare you love and devotion for each other. Who better knows what is in your hearts than you? I am available to guide you in the process even if you write them yourselves."],
  ["Do you have an assistant or person to back you up?",
   "Yes, in both markets, we have back up. We promise to be there."],
  ["When do we sign the marriage license?",
   "I recommend receiving from you the legal documents at rehearsal. In my experience, keeping “paper work” out of the wedding day helps continue a rich flow of festivity between the ceremony and the reception. I believe signing the marriage license right before the ceremony becomes meaningful and symbolic as the bride and groom prepare for their ceremony and transition into marriage. Finally, it is my job to see that all signed legal paperwork gets immediately returned for processing to the Clerks Office. You then receive a pdf copy of your license by email the evening of your wedding."],
  ["How do you dress for a ceremony?",
   "I will always dress dignified and appropriately for a ceremony. I give the couple the choice of my attire, but I usually wear a black suit with an Anglican minister type shirt that works well with your wedding attire. Upon request, I have also worn a ministerial robe (black) with a stole. I also do a great Elvis imitation and have the complete outfit."],
  ["What if we are getting married outside of the Metro area?",
   "Have car, will travel! I’ve been to many places, event venues, and parks. I will go to anywhere in the San Antonio / Hill Country / Austin area. It’s your wedding and I will do my best to accommodate your wishes. Contact Me – Phone, Email or Short/Easy Form! To contact Pastor David please EMAIL HERE, or call me at 210-712-5458."],
];
$page_schema = [
  "@type" => "FAQPage",
  "mainEntity" => array_map(function($qa) {
    return [
      "@type" => "Question",
      "name"  => $qa[0],
      "acceptedAnswer" => ["@type" => "Answer", "text" => $qa[1]]
    ];
  }, $faqItems)
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
      <?php img('images/couple-lake.jpg', 'Couple by a lake', ['eager' => true, 'sizes' => '100vw']); ?>
    </div>
    <div class="subhero-inner" data-reveal>
      <nav class="crumbs" aria-label="Breadcrumb"><a href="/index.php">Home</a><span class="sep">/</span>FAQs</nav>
      <span class="eyebrow">Answers Before You Ask</span>
      <h1>Frequently Asked Questions</h1>
    </div>
  </section>

  <section class="section section--cream">
    <div class="container-tight">
      <div class="faq-list" data-reveal>
        <details class="faq">
          <summary>Why It's a Wonderful Life Weddings?</summary>
          <div class="faq-body">
            <p>Most of our couples do not have a church home and, subsequently, did not know how to get married. As an Officiant I am honored to work with people
              through some of life’s most awesome moments.  I receive so much joy in creating the ceremony and then, on the wedding day, blessing the couple with
              a ceremony they can remember for years to come.  The qualities I bring to your ceremony come from my background of education, but also from
              crafting and presiding at ceremonies, public events, and television broadcasting. My motivation and desire is to give you a custom made ceremony.</p>
          </div>
        </details>

        <details class="faq">
          <summary>How much does a personalized ceremony cost?</summary>
          <div class="faq-body">
            <p>Each couple is different in what they are looking for in a ceremony and accordingly, my fees vary.  In any given month, I am officiating wedding
              ceremonies normally ranging  from $250-$450 for my services. By the time it is all said and done, your officiant will spend about 40 hours to make your
              day the best it can be.</p>
            <p>As a Celebrant, I take great pride in my work and expect perfection in what I do.  Rather than merely inserting a one-size-fits-all wedding script for you
              to listen to, I custom create the written script for each couple.  I take significant time to learn who you are individually and as a couple. I also explore
              what your wants and desires are for the ceremony.  In listening to you, and gathering this key information,  I can then offer creative ideas on how we
              can accomplish your dream ceremony. Of course, it always helps if the couple has ideas of their own. I love it when the bride overflows with creative
              ideas.</p>
            <p>In addition to the time it takes to develop a unique and personalized ceremony, my fee also includes unlimited consultation with me via email, in person,
              or telephone, and time and travel to lead your rehearsal and preside at your wedding ceremony. It also includes the proper preparation, delivery, and
              follow up to all legal documents.</p>
            <p>For more detailed information, please go to Services and Fees.</p>
          </div>
        </details>

        <details class="faq">
          <summary>How long are your wedding ceremonies?</summary>
          <div class="faq-body">
            <p>I have found that the ideal range of time for a wedding ceremony is between 25 and 35 minutes.  If it is shorter than 20 minutes, people may wonder
              why they took the time to get dressed up! With my creative way to a unique and personalized ceremony, your guests will be engaged and you will be
              surprised where the time went. Fun times.</p>
          </div>
        </details>

        <details class="faq">
          <summary>Do we need to have a rehearsal?</summary>
          <div class="faq-body">
            <p>I view the rehearsal as an extension of the entire wedding experience, and it is usually at the rehearsal where the festivities begin.  I have two goals for
              the rehearsal; The first is to get to know the wedding party, family, and friends.
              The second goal of the rehearsal is to walk through all of the “movements” of the ceremony, and to make sure the processional/recessional elements
              happen according to your desires.  We do not run through the words, but rather keep them revered for the wedding day. In my experience, this type of
              rehearsal is an enjoyable experience that will give you the inspiration and confidence you need to be fully present during the ceremony.  No worries!</p>
            <p>Rehearsals often last between 45 and 60 minutes.</p>
          </div>
        </details>

        <details class="faq">
          <summary>Can we write our own vows?</summary>
          <div class="faq-body">
            <p>I would hope you do!  Your vows are that exact moment when the world closes around you as a couple and you look into each others eyes and declare
              you love and devotion for each other. Who better knows what is in your hearts than you? I am available to guide you in the process even if you write
              them yourselves.</p>
          </div>
        </details>

        <details class="faq">
          <summary>Do you have an assistant or person to back you up?</summary>
          <div class="faq-body">
            <p>Yes, in both markets, we have back up. We promise to be there.</p>
          </div>
        </details>

        <details class="faq">
          <summary>When do we sign the marriage license?</summary>
          <div class="faq-body">
            <p>I recommend receiving from you the legal documents at rehearsal.  In my experience, keeping “paper work” out of the wedding day helps continue a
              rich flow of festivity between the ceremony and the reception. I believe signing the  marriage license right before the ceremony becomes meaningful
              and symbolic as the bride and groom prepare for their ceremony and transition into marriage. Finally, it is my job to see that all signed legal paperwork
              gets immediately returned for processing to the Clerks Office. You then receive a pdf copy of your license by email the evening of your wedding.</p>
          </div>
        </details>

        <details class="faq">
          <summary>How do you dress for a ceremony?</summary>
          <div class="faq-body">
            <p>I will always dress dignified and appropriately for a ceremony. I give the couple the choice of my attire, but  I usually wear a black suit with an Anglican
              minister type shirt that works well with your wedding attire.  Upon request, I have also worn a ministerial robe (black) with a stole. I also do a great Elvis
              imitation and have the complete outfit.</p>
          </div>
        </details>

        <details class="faq">
          <summary>What if we are getting married outside of the Metro area?</summary>
          <div class="faq-body">
            <p>Have car, will travel!  I’ve been to many places, event venues, and parks. I will go to anywhere in the San Antonio / Hill Country / Austin area.  It’s your
              wedding and I will do my best to accommodate your wishes.</p>
            <p>Contact Me – <a href="tel:210-712-5458">Phone</a>, <a href="mailto:pastordavidbarger@gmail.com">Email</a> or <a href="/contact.php">Short/Easy Form!</a></p>
            <p>To contact Pastor David please <a href="mailto:pastordavidbarger@gmail.com">EMAIL HERE</a>, or call me at <a href="tel:210-712-5458">210-712-5458</a>.</p>
          </div>
        </details>
      </div>

      <div class="text-center" style="margin-top: var(--sp-7);" data-reveal>
        <p class="lede">Have a question that isn't here? We'd love to hear from you.</p>
        <a class="btn btn--gold" href="/contact.php">Get in Touch</a>
      </div>
    </div>
  </section>

</main>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
