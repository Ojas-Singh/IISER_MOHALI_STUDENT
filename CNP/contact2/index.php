<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Contact + Polling + News </title>
  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>




      <link rel="stylesheet" href="css/style.css">


</head>

<body>
  <div id='browser'>
  <div id='browser-bar'>
    <div class='circles'></div>
    <div class='circles'></div>
    <div class='circles'></div>
    <p></p>
    <span class='arrow entypo-resize-full'></span>
  </div>
  <div id='content'>
    <div id='left'>
      <div id='map'>
        <p></p>


      </div>
      <ul id='location-bar'>
        <li>
          <a class='location' data-location='Israel' href=''>News</a>
        </li>

        <li>
          <a class='location' data-location='Singapore' href=''>Polling</a>
        </li>
      </ul>
    </div>
    <div id='right'>
      <p>Connect</p>
      <div id='social'>
        <a class='social'>
          <span class='entypo-facebook'></span>
        </a>
        <a class='social'>
          <span class='entypo-twitter'></span>
        </a>
        <a class='social'>
          <span class='entypo-linkedin'></span>
        </a>
        <a class='social'>
          <span class='entypo-gplus'></span>
        </a>
        <a class='social'>
          <span class='entypo-instagrem'></span>
        </a>
      </div>
      <?php
if ($_POST["email"]<>'') {
    $ToEmail = 'singhojas007@gmail.com';
    $EmailSubject = 'Site contact form';
    $mailheader = "From: ".$_POST["email"]."\r\n";
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n";
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $MESSAGE_BODY = "Subject: ".$_POST["Subject"]."";
    $MESSAGE_BODY .= "Email: ".$_POST["email"]."";
    $MESSAGE_BODY .= "Message: ".nl2br($_POST["Message"])."";
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
?>
Your message was sent
<?php
} else {
?>
      <form action="index.php" method="post">
        <p>Get in Contact</p>
        <input placeholder='Email' type='email' id="email">
        <input placeholder='Subject' type='text' id="Subject">
        <textarea placeholder='Message' rows='4' id="Message"></textarea>
        <input placeholder='Send' type='submit'>
      </form>
      <p>other way</p>
      <p class='other entypo-mail'>
        <a href='#'></a>
      </p>
      <p class='other entypo-phone'></p>
    </div>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
