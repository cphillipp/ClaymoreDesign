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
        <ul>       
          <li>
            <div class="wrap">
              <h3>Business Branding &amp;<br /> Print Services</h3>
              <img src="images/blob3.png" alt="Local Idaho Falls business website" />
              <p>Streamline your entire business</p>
              <ul>
                <li>Logo Design</li>
                <li>Print Design</li>
                <li>Business Cards</li>
                <li>Fliers, Brochures, &#038; Post Cards</li>
              </ul>
              <a href="services.php" class="button">view our branding services</a>
            </div>
          </li>
          <li>
            <div class="wrap">
              <h3>Online Marketing<br /> Services</h3>
              <img src="images/blob2.png" alt="Local Idaho Falls business website" />
              <p>Increase your online presence</p>
              <ul>
                <li>Social Media Marketing</li>
                <li>Tracking &#038; Analytics</li>
                <li>Email Marketing</li>
                <li>Search Engine Optimization (SEO)</li>
              </ul>
              <a href="services.php" class="button">view our marketing services</a>
            </div>
          </li>
          <li>
            <div class="wrap">
              <h3>Website Design &amp;<br /> Development</h3>
              <img src="images/blob1.png" alt="Local Idaho Falls business website" />
              <p>Market your business online</p>
              <ul>
                <li>Website Design</li>
                <li>Website Development</li>
                <li>Ecommerce Solutions</li>
                <li>Content Management Systems (CMS)</li>
              </ul>
              <a href="services.php" class="button">view our design services</a>
            </div>
          </li>
        </ul>
        <h2>Some of our clients</h2>
        <ul>
          <li><a href="http://www.eastidaholaw.net" target="_blank"><img src="images/tswa3.png" alt="Local Idaho Falls business website" /><span>TSWA </span></a></li>
          <li><a href="http://www.rugboards.com" target="_blank"><img src="images/jensenrugboards3.png" alt="California based business website" /><span>Jensen Rugboards</span></a></li>
          <li><a href="http://www.yourlocallife.pagodabox.com" target="_blank"><img src="images/yll3.png" alt="Local Idaho Falls business website" /><span>Your Local Life</span></a></li>
          <!-- <li><a href="#"><img src="images/paymentrix.png" alt="Local Idaho Falls business website" /><span>Paymentrix</span></a></li>
          <li><a href="#"><img src="images/sir.png" alt="Local Idaho Falls business website" /><span>Southern Idaho Rentals</span></a></li>
          <li><a href="#"><img src="images/abh.png" alt="Local Oregon based business website" /><span>Arnold Beach Haven</span></a></li> -->
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