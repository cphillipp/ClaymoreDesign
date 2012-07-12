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
  <meta name="description" content="Our past web projects can be seen here. Each design is tailored for the individual needs of each business."/>
  <meta name="keywords" content="idaho falls web design, idaho web design, web design, idaho, idaho falls web design portfolio, seo idaho falls, idaho falls seo, idaho seo, seo idaho, web design, website design idaho falls, idaho falls website design, website design portfolio"/>
  <title>Portfolio | Idaho Falls Web Design Company | Claymore Design</title>
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="stylesheet" href="css/styles.css" />
  <link href='http://fonts.googleapis.com/css?family=Abel|Squada+One' rel='stylesheet' type='text/css'>
  <script src="js/jquery1.7.2.min.js"></script>
  <script src="js/placeholder.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/forms.js"></script>
  <!--[if lt IE 9]>
  <script>
    document.createElement('header');
    document.createElement('nav');
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
      <h1><a href="index.php">Claymore Design, Idaho Falls Web Design logo</a></h1>
      <nav><a href="portfolio.php" class="active">Portfolio</a><a href="services.php">Services</a><a href="about.php">About Us</a><a href="faqs.php">FAQ'S</a><a href="contact.php">Contact</a></nav>
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
          <li><a href="http://www.paymentrix.com" target="_blank"><img src="images/paymentrix3.png" alt="Local Idaho Falls business website" /><span>Paymentrix</span></a></li>
          <li><a href="http://www.sidahorentals.com" target="_blank"><img src="images/sir3.png" alt="Local Idaho Falls business website" /><span>Southern Idaho Rentals</span></a></li>
          <li><a href="http://www.arnoldbeachhaven.com" target="_blank"><img src="images/abh3.png" alt="Local Oregon based business website" /><span>Arnold Beach Haven</span></a></li>
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