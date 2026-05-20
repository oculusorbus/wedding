<?php
require_once __DIR__ . '/partials/helpers.php';

// Form processing logic (preserved from legacy contact.php)
$form_state = 'show'; // 'show', 'error', 'success'
$form_error_msg = '';

function died($error) {
  global $form_state, $form_error_msg;
  $form_state = 'error';
  $form_error_msg = $error;
}

function validate_rechapcha($response){
  $verifyURL = 'https://www.google.com/recaptcha/api/siteverify';
  $post_data = http_build_query(
    array(
      'secret' => '6Ld414gUAAAAAJ7S6K3gFHG44P1qHiWRwhUAQWJg',
      'response' => $response,
      'remoteip' => (isset($_SERVER["HTTP_CF_CONNECTING_IP"]) ? $_SERVER["HTTP_CF_CONNECTING_IP"] : $_SERVER['REMOTE_ADDR'])
    )
  );
  if(function_exists('curl_init') && function_exists('curl_setopt') && function_exists('curl_exec')) {
    $ch =  curl_init($verifyURL);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-type: application/x-www-form-urlencoded'));
    $response = curl_exec($ch);
    curl_close($ch);
  } else {
    $opts = array('http' =>
      array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $post_data
      )
    );
    $context  = stream_context_create($opts);
    $response = file_get_contents($verifyURL, false, $context);
  }
  if($response) {
    $result = json_decode($response);
    if ($result->success===true) return true;
  }
  return false;
}

if(isset($_POST['email'])) {
  if(isset($_POST['g-recaptcha-response'])) {
    if(validate_rechapcha($_POST['g-recaptcha-response'])) {
      $email_to = "pastordavidbarger@gmail.com";
      $email_subject = "New Inquiry - It's a Wonderful Life Weddings";

      if(!isset($_POST['first_name']) ||
         !isset($_POST['last_name']) ||
         !isset($_POST['email']) ||
         !isset($_POST['telephone']) ||
         !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
      }

      if ($form_state !== 'error') {
        $first_name = $_POST['first_name'];
        $last_name  = $_POST['last_name'];
        $email_from = $_POST['email'];
        $telephone  = $_POST['telephone'];
        $comments   = $_POST['comments'];

        $error_message = "";
        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

        if(!preg_match($email_exp,$email_from)) {
          $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
        }

        $string_exp = "/^[A-Za-z .'-]+$/";

        if(!preg_match($string_exp,$first_name)) {
          $error_message .= 'The First Name you entered does not appear to be valid.<br />';
        }

        if(!preg_match($string_exp,$last_name)) {
          $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
        }

        if(strlen($comments) < 2) {
          $error_message .= 'The Comments you entered do not appear to be valid.<br />';
        }

        if(strlen($error_message) > 0) {
          died($error_message);
        } else {
          $email_message = "Form details below.\n\n";

          function clean_string($string) {
            $bad = array("content-type","bcc:","to:","cc:","href");
            return str_replace($bad,"",$string);
          }

          $email_message .= "First Name: ".clean_string($first_name)."\n";
          $email_message .= "Last Name: ".clean_string($last_name)."\n";
          $email_message .= "Email: ".clean_string($email_from)."\n";
          $email_message .= "Telephone: ".clean_string($telephone)."\n";
          $email_message .= "Comments: ".clean_string($comments)."\n";

          $email_from = "pastordavid@itsawonderfullifeweddings.com";
          $headers = 'From: '.$email_from."\r\n".
                     'Reply-To: '.$email_from."\r\n" .
                     'X-Mailer: PHP/' . phpversion();
          mail($email_to, $email_subject, $email_message, $headers);

          $form_state = 'success';
        }
      }
    } else {
      died("Please check the 'I'm not a robot' box before submitting!");
    }
  }
}

$page_title       = "Contact Us | It's A Wonderful Life Weddings";
$page_description = "Ready to contact the Metros top wedding officiant service? Pastor David and his team of wedding professionals stand ready to assist in any type of service you wish.";
$page_keywords    = "pricing, fee, marriage, wedding, ceremony, officiant, bride, groom, price, cost, affordable, cheap";
$page_path        = "/contact.php";
$page_image       = "/images/contact.jpg";
$page_schema      = [
  "@type" => "ContactPage",
  "url"   => "https://www.itsawonderfullifeweddings.com/contact.php",
  "name"  => "Contact It's A Wonderful Life Weddings"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/partials/head.php'; ?>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<?php include __DIR__ . '/header.php'; ?>

<main id="main">

  <section class="subhero">
    <div class="subhero-bg">
      <?php img('images/contact.jpg', 'Wedding ceremony', ['eager' => true, 'sizes' => '100vw']); ?>
    </div>
    <div class="subhero-inner" data-reveal>
      <nav class="crumbs" aria-label="Breadcrumb"><a href="/index.php">Home</a><span class="sep">/</span>Contact</nav>
      <span class="eyebrow">Begin Your Story</span>
      <h1>Contact Us</h1>
    </div>
  </section>

  <section class="section section--cream">
    <div class="container-tight">

      <?php if ($form_state === 'success'): ?>
        <div class="form-card text-center" data-reveal>
          <h1 class="header">Success!</h1>
          <p class="lede"><strong>Thank you for contacting us. We will be in touch with you very soon.</strong></p>
          <p style="margin-top: var(--sp-5);"><a class="btn btn--ghost" href="/index.php">Return Home</a></p>
        </div>
      <?php elseif ($form_state === 'error'): ?>
        <div class="form-card" data-reveal>
          <h1 class="header">Oops!</h1>
          <p>We are very sorry, but there were error(s) found with the form you submitted.</p>
          <p>These error(s) appear below:</p>
          <p><i><?= $form_error_msg /* preserved literal HTML from legacy validation messages */ ?></i></p>
          <p>Please go back and fix these error(s).</p>
          <p><strong><a class="btn btn--primary btn--sm" href="javascript:history.back()">Try Again?</a></strong></p>
        </div>
      <?php else: ?>
        <div data-reveal>
          <p class="lede"><strong>The choosing of an Officiant is not just an after thought that needs to be made shortly before the wedding. The Officiant is a key player in making
          your day special and memorable. It takes a lot of  time to create your perfect wedding ceremony, and I love doing it for each couple. But the
          delivery of the service is what  turns an ordinary Officiant into A Wonderful Life Officiant. Presence, authority, leadership, and professionalism all
          can be found in our service to you.</strong></p>

          <p><strong>Please use the form below to contact us. Pastor David will then assign the best officiant for your ceremony, who will then contact you for more
          information. If you wish to contact Pastor David personally, please indicate that in your message. We hope to hear from you soon, but whatever
          you decide, we wish you a Wonderful Life Ceremony.</strong></p>
        </div>

        <div class="form-card" data-reveal data-reveal-delay="1" style="margin-top: var(--sp-6);">
          <form name="contactform" method="post" action="/contact.php" novalidate>
            <div class="grid grid-2">
              <div class="field">
                <label for="first_name">First Name <span aria-hidden="true">*</span></label>
                <input id="first_name" name="first_name" type="text" required>
              </div>
              <div class="field">
                <label for="last_name">Last Name <span aria-hidden="true">*</span></label>
                <input id="last_name" name="last_name" type="text" required>
              </div>
            </div>
            <div class="field">
              <label for="email">Email <span aria-hidden="true">*</span></label>
              <input id="email" name="email" type="email" required>
            </div>
            <div class="field">
              <label for="telephone">Phone</label>
              <input id="telephone" name="telephone" type="tel">
            </div>
            <div class="field">
              <label for="comments">Comments <span aria-hidden="true">*</span></label>
              <textarea id="comments" name="comments" rows="5" required></textarea>
            </div>
            <div class="field">
              <div class="g-recaptcha" data-sitekey="6Ld414gUAAAAAFq0gh7PDnX7ZlPuO-M4WNAWJDJJ"></div>
            </div>
            <button class="btn btn--gold" type="submit" name="action">
              Send Message
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
          </form>
        </div>

        <div class="grid grid-3" style="margin-top: var(--sp-7);" data-reveal>
          <div class="card text-center">
            <div class="eyebrow">Texas Weddings</div>
            <p class="mt-4"><a href="tel:2107125458" style="font-family: var(--f-display); font-size: 1.4rem; color: var(--plum);">210-712-5458</a></p>
          </div>
          <div class="card text-center">
            <div class="eyebrow">Kansas City</div>
            <p class="mt-4"><a href="tel:9138000349" style="font-family: var(--f-display); font-size: 1.4rem; color: var(--plum);">913-800-0349</a></p>
          </div>
          <div class="card text-center">
            <div class="eyebrow">Kentucky</div>
            <p class="mt-4"><a href="tel:3162104760" style="font-family: var(--f-display); font-size: 1.4rem; color: var(--plum);">316-210-4760</a></p>
          </div>
        </div>
      <?php endif; ?>

    </div>
  </section>
</main>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
