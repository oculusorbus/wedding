<?php
require_once __DIR__ . '/partials/helpers.php';

// Form processing logic (preserved from legacy contact.php)
$form_state = 'show'; // 'show', 'error', 'success'
$form_error_msg = '';

// Officiant roster offered in the "Requested Minister" menu.
$officiants = [
  'Pastor David Barger',
  'Pastor Manuel Maldonado',
  'Pastor Jose Cruz',
  'Pastor Ashlae Ortiz',
  'Renee Hanson Malone',
  'Elaine Hanson',
  'Dr. Truemon Barger',
];

/*
 * Form spec: field name => [label used in the email, required?, validation type].
 * Drives both server-side validation and the message Pastor David receives.
 */
$form_fields = [
  'bride_first'        => ['Bride First Name',   true,  'name'],
  'bride_last'         => ['Bride Last Name',    true,  'name'],
  'groom_first'        => ['Groom First Name',   true,  'name'],
  'groom_last'         => ['Groom Last Name',    true,  'name'],
  'email'              => ['Email',              true,  'email'],
  'telephone'          => ['Phone',              true,  'text'],
  'bride_address'      => ['Bride Street Address', true, 'text'],
  'bride_city'         => ['Bride City',         true,  'text'],
  'bride_state'        => ['Bride State',        true,  'text'],
  'bride_zip'          => ['Bride ZIP',          true,  'text'],
  'groom_address'      => ['Groom Street Address', true, 'text'],
  'groom_city'         => ['Groom City',         true,  'text'],
  'groom_state'        => ['Groom State',        true,  'text'],
  'groom_zip'          => ['Groom ZIP',          true,  'text'],
  'wedding_date'       => ['Wedding Date',       true,  'text'],
  'wedding_time'       => ['Wedding Start Time', true,  'text'],
  'wedding_venue'      => ['Wedding Venue',      false, 'text'],
  'wedding_city'       => ['Wedding City',       true,  'text'],
  'wedding_state'      => ['Wedding State',      true,  'text'],
  'requested_minister' => ['Requested Minister', false, 'text'],
  'comments'           => ['Comments',           true,  'text'],
];

function died($error) {
  global $form_state, $form_error_msg;
  $form_state = 'error';
  $form_error_msg = $error;
}

// Re-fills the form after a validation error so the couple doesn't retype everything.
function old($field, $fallback = '') {
  return htmlspecialchars($_POST[$field] ?? $fallback, ENT_QUOTES, 'UTF-8');
}

// "2027-06-12" -> "Saturday, June 12, 2027"; "14:30" -> "2:30 PM". Falls back to raw input.
function pretty_date($value) {
  $d = DateTime::createFromFormat('Y-m-d', $value);
  return $d ? $d->format('l, F j, Y') : $value;
}
function pretty_time($value) {
  $t = DateTime::createFromFormat('H:i', $value);
  return $t ? $t->format('g:i A') : $value;
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

      $v = [];
      foreach ($form_fields as $field => $spec) {
        $v[$field] = trim((string)($_POST[$field] ?? ''));
      }

      $error_message = "";
      $email_exp  = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
      $string_exp = "/^[\p{L} .'-]+$/u"; // unicode-aware so names like José validate

      foreach ($form_fields as $field => $spec) {
        list($label, $required, $type) = $spec;
        $value = $v[$field];

        if ($required && $value === '') {
          $error_message .= 'The ' . $label . ' field is required.<br />';
          continue;
        }
        if ($value === '') continue;

        if ($type === 'email' && !preg_match($email_exp, $value)) {
          $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
        }
        if ($type === 'name' && !preg_match($string_exp, $value)) {
          $error_message .= 'The ' . $label . ' you entered does not appear to be valid.<br />';
        }
      }

      if ($v['comments'] !== '' && strlen($v['comments']) < 2) {
        $error_message .= 'The Comments you entered do not appear to be valid.<br />';
      }

      if(strlen($error_message) > 0) {
        died($error_message);
      } else {
        function clean_string($string) {
          $bad = array("content-type","bcc:","to:","cc:","href");
          return str_replace($bad,"",$string);
        }

        $c = function($field) use ($v) { return clean_string($v[$field]); };

        $email_message  = "New wedding inquiry from itsawonderfullifeweddings.com\n\n";

        $email_message .= "THE COUPLE\n";
        $email_message .= "  Bride: " . $c('bride_first') . " " . $c('bride_last') . "\n";
        $email_message .= "  Groom: " . $c('groom_first') . " " . $c('groom_last') . "\n\n";

        $email_message .= "CONTACT\n";
        $email_message .= "  Email: " . $c('email') . "\n";
        $email_message .= "  Phone: " . $c('telephone') . "\n\n";

        $email_message .= "BRIDE'S ADDRESS\n";
        $email_message .= "  " . $c('bride_address') . "\n";
        $email_message .= "  " . $c('bride_city') . ", " . $c('bride_state') . " " . $c('bride_zip') . "\n\n";

        $email_message .= "GROOM'S ADDRESS\n";
        $email_message .= "  " . $c('groom_address') . "\n";
        $email_message .= "  " . $c('groom_city') . ", " . $c('groom_state') . " " . $c('groom_zip') . "\n\n";

        $email_message .= "WEDDING DETAILS\n";
        $email_message .= "  Date: " . pretty_date($c('wedding_date')) . "\n";
        $email_message .= "  Start Time: " . pretty_time($c('wedding_time')) . "\n";
        if ($v['wedding_venue'] !== '') {
          $email_message .= "  Venue: " . $c('wedding_venue') . "\n";
        }
        $email_message .= "  Location: " . $c('wedding_city') . ", " . $c('wedding_state') . "\n";
        $email_message .= "  Requested Minister: " . ($v['requested_minister'] !== '' ? $c('requested_minister') : 'No preference') . "\n\n";

        $email_message .= "COMMENTS / SPECIAL CIRCUMSTANCES\n";
        $email_message .= "  " . $c('comments') . "\n";

        $email_from = "pastordavid@itsawonderfullifeweddings.com";
        $headers = 'From: '.$email_from."\r\n".
                   'Reply-To: '.$email_from."\r\n" .
                   'X-Mailer: PHP/' . phpversion();
        mail($email_to, $email_subject, $email_message, $headers);

        $form_state = 'success';
      }
    } else {
      died("Please check the 'I'm not a robot' box before submitting!");
    }
  }
}

// Deep links such as /contact.php?minister=Pastor+Jose+Cruz preselect the officiant.
$preselected_minister = $_POST['requested_minister'] ?? ($_GET['minister'] ?? '');

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

<main id="main" tabindex="-1">

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
        <div class="form-card text-center" data-reveal role="status" aria-live="polite">
          <h2 class="header">Success!</h2>
          <p class="lede"><strong>Thank you for contacting us. We will be in touch with you very soon.</strong></p>
          <p style="margin-top: var(--sp-5);"><a class="btn btn--ghost" href="/index.php">Return Home</a></p>
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

        <?php if ($form_state === 'error'): ?>
          <div class="form-card" data-reveal role="alert" aria-live="assertive" style="margin-top: var(--sp-6); border-color: var(--plum);">
            <h2 class="header">Oops!</h2>
            <p>We are very sorry, but there were error(s) found with the form you submitted:</p>
            <p><i><?= $form_error_msg /* preserved literal HTML from legacy validation messages */ ?></i></p>
            <p>Your answers are still below &mdash; please correct the item(s) above and send again.</p>
          </div>
        <?php endif; ?>

        <div class="form-card" data-reveal data-reveal-delay="1" style="margin-top: var(--sp-6);">
          <form id="contact-form" name="contactform" method="post" action="/contact.php#contact-form" aria-labelledby="contact-form-heading">
            <h2 id="contact-form-heading" class="visually-hidden">Contact form</h2>
            <p id="required-note" class="text-muted" style="font-size: 0.85rem; margin-bottom: var(--sp-4);"><span aria-hidden="true">*</span> indicates a required field.</p>

            <fieldset class="form-section">
              <legend>The Couple</legend>
              <div class="grid grid-2">
                <div class="field">
                  <label for="bride_first">Bride&rsquo;s First Name <span aria-hidden="true">*</span><span class="visually-hidden"> required</span></label>
                  <input id="bride_first" name="bride_first" type="text" required aria-required="true" autocomplete="off" value="<?= old('bride_first') ?>">
                </div>
                <div class="field">
                  <label for="bride_last">Bride&rsquo;s Last Name <span aria-hidden="true">*</span><span class="visually-hidden"> required</span></label>
                  <input id="bride_last" name="bride_last" type="text" required aria-required="true" autocomplete="off" value="<?= old('bride_last') ?>">
                </div>
                <div class="field">
                  <label for="groom_first">Groom&rsquo;s First Name <span aria-hidden="true">*</span><span class="visually-hidden"> required</span></label>
                  <input id="groom_first" name="groom_first" type="text" required aria-required="true" autocomplete="off" value="<?= old('groom_first') ?>">
                </div>
                <div class="field">
                  <label for="groom_last">Groom&rsquo;s Last Name <span aria-hidden="true">*</span><span class="visually-hidden"> required</span></label>
                  <input id="groom_last" name="groom_last" type="text" required aria-required="true" autocomplete="off" value="<?= old('groom_last') ?>">
                </div>
              </div>
            </fieldset>

            <fieldset class="form-section">
              <legend>How We Reach You</legend>
              <div class="grid grid-2">
                <div class="field">
                  <label for="email">Email <span aria-hidden="true">*</span><span class="visually-hidden"> required</span></label>
                  <input id="email" name="email" type="email" required aria-required="true" autocomplete="email" inputmode="email" value="<?= old('email') ?>">
                </div>
                <div class="field">
                  <label for="telephone">Phone <span aria-hidden="true">*</span><span class="visually-hidden"> required</span></label>
                  <input id="telephone" name="telephone" type="tel" required aria-required="true" autocomplete="tel" inputmode="tel" value="<?= old('telephone') ?>">
                </div>
              </div>
            </fieldset>

            <fieldset class="form-section">
              <legend>Bride&rsquo;s Address</legend>
              <div class="field">
                <label for="bride_address">Street Address <span aria-hidden="true">*</span><span class="visually-hidden"> required</span></label>
                <input id="bride_address" name="bride_address" type="text" required aria-required="true" autocomplete="off" value="<?= old('bride_address') ?>">
              </div>
              <div class="grid grid-3">
                <div class="field">
                  <label for="bride_city">City <span aria-hidden="true">*</span><span class="visually-hidden"> required</span></label>
                  <input id="bride_city" name="bride_city" type="text" required aria-required="true" autocomplete="off" value="<?= old('bride_city') ?>">
                </div>
                <div class="field">
                  <label for="bride_state">State <span aria-hidden="true">*</span><span class="visually-hidden"> required</span></label>
                  <input id="bride_state" name="bride_state" type="text" required aria-required="true" autocomplete="off" placeholder="TX" value="<?= old('bride_state') ?>">
                </div>
                <div class="field">
                  <label for="bride_zip">ZIP <span aria-hidden="true">*</span><span class="visually-hidden"> required</span></label>
                  <input id="bride_zip" name="bride_zip" type="text" required aria-required="true" autocomplete="off" inputmode="numeric" value="<?= old('bride_zip') ?>">
                </div>
              </div>
            </fieldset>

            <fieldset class="form-section">
              <legend>Groom&rsquo;s Address</legend>
              <div class="field">
                <label for="groom_address">Street Address <span aria-hidden="true">*</span><span class="visually-hidden"> required</span></label>
                <input id="groom_address" name="groom_address" type="text" required aria-required="true" autocomplete="off" value="<?= old('groom_address') ?>">
              </div>
              <div class="grid grid-3">
                <div class="field">
                  <label for="groom_city">City <span aria-hidden="true">*</span><span class="visually-hidden"> required</span></label>
                  <input id="groom_city" name="groom_city" type="text" required aria-required="true" autocomplete="off" value="<?= old('groom_city') ?>">
                </div>
                <div class="field">
                  <label for="groom_state">State <span aria-hidden="true">*</span><span class="visually-hidden"> required</span></label>
                  <input id="groom_state" name="groom_state" type="text" required aria-required="true" autocomplete="off" placeholder="TX" value="<?= old('groom_state') ?>">
                </div>
                <div class="field">
                  <label for="groom_zip">ZIP <span aria-hidden="true">*</span><span class="visually-hidden"> required</span></label>
                  <input id="groom_zip" name="groom_zip" type="text" required aria-required="true" autocomplete="off" inputmode="numeric" value="<?= old('groom_zip') ?>">
                </div>
              </div>
            </fieldset>

            <fieldset class="form-section">
              <legend>Wedding Details</legend>
              <div class="grid grid-2">
                <div class="field">
                  <label for="wedding_date">Wedding Date <span aria-hidden="true">*</span><span class="visually-hidden"> required</span></label>
                  <input id="wedding_date" name="wedding_date" type="date" required aria-required="true" value="<?= old('wedding_date') ?>">
                </div>
                <div class="field">
                  <label for="wedding_time">Start Time <span aria-hidden="true">*</span><span class="visually-hidden"> required</span></label>
                  <input id="wedding_time" name="wedding_time" type="time" required aria-required="true" value="<?= old('wedding_time') ?>">
                </div>
              </div>
              <div class="field">
                <label for="wedding_venue">Venue or Location Name</label>
                <input id="wedding_venue" name="wedding_venue" type="text" autocomplete="off" placeholder="Optional &mdash; e.g. The Chandelier of Gruene" value="<?= old('wedding_venue') ?>">
              </div>
              <div class="grid grid-2">
                <div class="field">
                  <label for="wedding_city">Wedding City <span aria-hidden="true">*</span><span class="visually-hidden"> required</span></label>
                  <input id="wedding_city" name="wedding_city" type="text" required aria-required="true" autocomplete="off" value="<?= old('wedding_city') ?>">
                </div>
                <div class="field">
                  <label for="wedding_state">Wedding State <span aria-hidden="true">*</span><span class="visually-hidden"> required</span></label>
                  <input id="wedding_state" name="wedding_state" type="text" required aria-required="true" autocomplete="off" placeholder="TX" value="<?= old('wedding_state') ?>">
                </div>
              </div>
              <div class="field">
                <label for="requested_minister">Requested Minister</label>
                <select id="requested_minister" name="requested_minister">
                  <option value="">No preference &mdash; please assign the best officiant</option>
                  <?php foreach ($officiants as $officiant): ?>
                    <option value="<?= htmlspecialchars($officiant, ENT_QUOTES, 'UTF-8') ?>"<?= $preselected_minister === $officiant ? ' selected' : '' ?>><?= htmlspecialchars($officiant, ENT_QUOTES, 'UTF-8') ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </fieldset>

            <fieldset class="form-section">
              <legend>Tell Us About Your Ceremony</legend>
              <div class="field">
                <label for="comments">Comments <span aria-hidden="true">*</span><span class="visually-hidden"> required</span></label>
                <p class="text-muted" style="font-size: 0.85rem; margin: -0.25rem 0 0.6rem;">Please tell us what you are looking for in your ceremony, along with any special circumstances we should know about.</p>
                <textarea id="comments" name="comments" rows="5" required aria-required="true"><?= old('comments') ?></textarea>
              </div>
            </fieldset>

            <div class="field" role="group" aria-label="Spam protection">
              <div class="g-recaptcha" data-sitekey="6Ld414gUAAAAAFq0gh7PDnX7ZlPuO-M4WNAWJDJJ"></div>
            </div>
            <button class="btn btn--gold" type="submit" name="action">
              Send Message
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg>
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
