<?php

if($_POST) {
  $vorname = "";
  $nachname = "";
  $email = "";
  $nachricht = "";
  $email_body = "<div>";

  if(isset($_POST['vorname'])) {
    $vorname = filter_var($_POST['vorname'], FILTER_SANITIZE_STRING);
    $email_body .= "<div>
    <label><b>Vorname:</b></label>&nbsp;<span>".$vorname."</span>
    </div>";
  }

  if(isset($_POST['nachname'])) {
    $vorname = filter_var($_POST['nachname'], FILTER_SANITIZE_STRING);
    $email_body .= "<div>
    <label><b>Nachname:</b></label>&nbsp;<span>".$nachname."</span>
    </div>";
  }

  if(isset($_POST['email'])) {
    $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $email_body .= "<div>
    <label><b>Email-Adresse:</b></label>&nbsp;<span>".$email."</span>
    </div>";
  }

  if(isset($_POST['nachricht'])) {
    $email = htmlspecialchars($_POST['nachricht']);
    $email_body .= "<div>
    <label><b>Visitor Message:</b></label>
    <div>".$nachricht."</div>
    </div>";
  }

  $recipient = "info@kuehsen-dok.de";

  $email_title = "Neue Nachricht von".$vorname.$nachname.".";

  $email_body .= "</div>";

  $headers  = 'MIME-Version: 1.0' . "\r\n"
  .'Content-type: text/html; charset=utf-8' . "\r\n"
  .'From: ' . $email . "\r\n";

  if(mail($recipient, $email_title, $email_body, $headers)) {
    echo "<p>Danke für Deine Nachricht, $vorname.</p>";
  } else {
    echo '<p>Fehler beim Senden.</p>';
  }

} else {
  echo '<p>Error</p>';
}
?>
