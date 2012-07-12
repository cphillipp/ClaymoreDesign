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
  <title>Our Services | Idaho Falls Web Design Company | Claymore Design</title>
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
      <h1><a href="index.php">Claymore Design, Idaho Falls Web Design logo</a></h1>
      <nav><a href="index.php">Home</a><a href="portfolio.php">Portfolio</a><a href="services.php" class="active">Services</a><a href="about.php">About Us</a><a href="faqs.php">FAQ'S</a><a href="contact.php">Contact</a></nav>
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
        <h2>Our Services</h2>
        <section>
          <h3>We Create Websites</h3>
          <p>In order to ensure the greatest outcome for your business we like to follow a strict set of guidelines and check points throughout the development process. We start with an assessment gathering information from you about your business or goals. We like to understand your specific needs or wants, and what your business means to your clients and to you, yourself.</p>
          <p>Once we fully understand everything we can about you, we will come up with the perfect strategy to meet all your goals and expectations. Finally, we will execute, working with you step-by-step in building and branding your business, along with advertising it to the worlds greatest market.</p>
          <div class="line"></div>
          <div class="box">
            <h4>Web Design</h4>
            <p>When it comes to a website, you must represent your business correctly in order to get the most out of it. We are educated in every aspect of creating a premier effective website. We deliver crisp professional designs for the fraction of a cost of main stream design firms.</p>
          </div>
          <div class="box">
            <h4>Graphic Design</h4>
            <p>We can create all types of graphic designs from simple and modest, to very technical and intricate. Our professional team brings a full spectrum of style and intelect into every design project that we take part in. No matter your needs we have got you covered.</p>
          </div>
          <div class="box">
            <h4>Internet Marketing</h4>
            <p>Our team has an enormous amount of marketing strategies & techniques that will benefit the promotion of your business dramatically. We make sure you are heard and more importantly remembered.</p>
          </div>
          <div class="box">
            <h4>Social Media</h4>
            <p>Social media sites are amongst the most populated sites on the web. Which is why it makes perfect sense to take advantage of their amazing abilities to quickly connect you with your future customers for free.</p>
          </div>
          <div class="box">
            <h4>SEO</h4>
            <p>Search Engine Optimization is a great way to market your website online. We specialize in unique SEO strategies that deliver better result to our customers for a lot less money that most marketing agencies.</p>
          </div>
          <div class="box">
            <h4>Web Hosting</h4>
            <p>Dependable web hosting is a very important aspect of every website. Our servers are all on a cloud platform so we can eliminate downtime and complications with our system, which allows us to ensure great hosting services.</p>
          </div>
          <div class="box">
            <h4>Ecommerce Solutions</h4>
            <p>An online store is on of the best ways to make money on the internet. We have everything it takes to construct very detailed and user friendly shopping carts that you will be able to manage and control, with no problem.</p>
          </div>
          <div class="box">
            <h4>Tracking &amp; Analytics</h4>
            <p>If you are not tracking the traffic flow that your website gets then you are making a very big mistake. How can you plan on improving your business if you don’t know where you currently stand? You simply can't!</p>
          </div>
          <div class="box">
            <h4>Logo Design</h4>
            <p>If your business is in need of a logo that will stand out and yell at your target audience we can design it for you. Or maybe you just need to revamp your outdated business logo; we do that too!</p>
          </div>
          <div class="box">
            <h4>Branding</h4>
            <p>The brand of your business says a lot about your business in a whole. You need to have a simple yet eye catching and memorable brand more then anything. We specialize in creating brand power that everyone will remember.</p>
          </div>
        </section>
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