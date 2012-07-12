<?php
error_reporting(E_ERROR);
session_start();
if(isset($_SESSION['message'])) {
  $display_message = $_SESSION['message'];
  $_SESSION['message'] = '';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="description" content="Getting a website in Idaho Falls is easy with Claymore Design. We are an Idaho Falls Web Design company building websites that are optimized &amp; easily found all over the web."/>
  <meta name="keywords" content="idaho falls web design, web design idaho falls, idaho web design, web design idaho, idaho falls seo, seo idaho falls, idaho seo, seo idaho, idaho falls marketing, marketing idaho falls, idaho marketing, marketing idaho, idaho falls website design, website design idaho falls, idaho website design, website design idaho"/>
  <title>Idaho Falls Web Design | Affordable websites for Idaho Falls businesses | Claymore Design</title>
  <link rel="shortcut icon" href="images/favicon.ico" />
  <link rel="stylesheet" href="css/styles.css" />
  <link href='http://fonts.googleapis.com/css?family=Abel|Squada+One' rel='stylesheet' type='text/css' />
  <script type="text/javascript" src="js/jquery1.7.2.min.js"></script>
  <script type="text/javascript" src="js/placeholder.js"></script>
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>
  <script type="text/javascript" src="js/forms.js"></script>
  <!--[if lt IE 9]>
  <script>
    document.createElement('header');
    document.createElement('nav');
    document.createElement('section');
    document.createElement('footer');
  </script>
  <![endif]-->
  <!--[if !IE 7]>
    <style type="text/css">
      .wrapper {display:table;height:100%}
    </style>
  <![endif]-->
</head>
<body>
  <div class="wrapper">
    <header>
      <h1><a href="index.php">Claymore Design, Idaho Falls Web Design logo.</a></h1>
      <nav><a href="index.php" class="active">Home</a><a href="portfolio.php">Portfolio</a><a href="services.php">Services</a><a href="about.php">About Us</a><a href="faqs.php">FAQ'S</a><a href="contact.php">Contact</a></nav>
    </header>
    <div class="main">
      <div class="left">
        <h2>have a question?</h2>
        <form method="post" action="form.php" id="contact-form">
          <fieldset>
            <input name="name" type="text" placeholder="Name" class="required" minlength="5" />
            <input name="email" type="text" placeholder="Email" class="required email" />
            <input name="phone" type="tel" placeholder="Telephone" class="required number" minlength="7" />
            <textarea name="message" placeholder="Message" class="required" minlength="10"></textarea>
            <?php
              if(isset($display_message)) {
                  echo "<p name='bottom' class='thank-you'>" . $display_message . "</p>";
              }
            ?>
            <input type="submit" value="Submit Now" class="submit" />
          </fieldset>
        </form>
      </div>
      <div class="right">        
        <h2>Our Portfolio</h2>
        <ul>
          <li><a href="http://www.eastidaholaw.net" target="_blank"><img src="images/tswa3.png" alt="Local Idaho Falls business website" /><span>TSWA </span></a></li>
          <li><a href="http://www.rugboards.com" target="_blank"><img src="images/jensenrugboards3.png" alt="California based business website" /><span>Jensen Rugboards</span></a></li>
          <li><a href="http://www.yourlocallife.pagodabox.com" target="_blank"><img src="images/yll3.png" alt="Local Idaho Falls business website" /><span>Your Local Life</span></a></li>
        </ul>
      </div>
    </div>
  </div>
  <footer>
    <div class="first">
      <p>&copy; Claymore Design 2012 All Rights Reserved</p>
    </div>
    <div class="second">
      <ul>
        <li><span>Phone:</span> 208.390.7477</li>
        <li><span>Email:</span> info@claymoredesigns.com</li>
      </ul>
    </div>
  </footer>
  <?php
    if(isset($display_message)) {
      unset($_SESSION['message']);
    }
  ?>
</body>
</html>