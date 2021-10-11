<?php
if($_POST) {
    $vorname = "";
    $nachname = "";
    $email_title = "";
    $nachricht = "";
    $email_body = "<div>";

    if(isset($_POST['nachname'])) {
        $visitor_name = filter_var($_POST['nachname'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Visitor Surname:</b></label>&nbsp;<span>".$nachname."</span>
                        </div>";
    }

    if(isset($_POST['vorname'])) {
        $visitor_name = filter_var($_POST['vorname'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Visitor First Name:</b></label>&nbsp;<span>".$vorname."</span>
                        </div>";
    }

    if(isset($_POST['email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Visitor Email:</b></label>&nbsp;<span>".$visitor_email."</span>
                        </div>";
    }

    if(isset($_POST['nachricht'])) {
        $visitor_message = htmlspecialchars($_POST['nachricht']);
        $email_body .= "<div>
                           <label><b>Visitor Message:</b></label>
                           <div>".$visitor_message."</div>
                        </div>";
    }

    $recipient = "dohrendorfjmw@aol.de";
    $email_title = "Neue Nachricht: Kuehsen.Info";

    $email_body .= "</div>";

    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";

    if(mail($recipient, $email_title, $email_body, $headers)) {
        echo "<p>Thank you for contacting us.</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }

} else {
    echo '<p>Something went wrong</p>';
}
?>
