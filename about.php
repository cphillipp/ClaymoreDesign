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
  <meta name="description" content="Read more about Claymore Design and the owner of our business here."/>
  <meta name="keywords" content="idaho falls web design, idaho web design, web design, idaho, idaho falls web design portfolio, seo idaho falls, idaho falls seo, idaho seo, seo idaho, web design, website design idaho falls, idaho falls website design, website design portfolio"/>
  <title>About Us | About our Idaho Falls Web Design Company | Claymore Design</title>
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
  <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-33238695-1']);
    _gaq.push(['_setDomainName', 'claymoredesigns.com']);
    _gaq.push(['_setAllowLinker', true]);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
</head>
<body>
  <div class="wrapper">
    <header>
      <h1><a href="http://www.claymoredesigns.com/index.php" title="Claymore Design Home Page">Claymore Design, Idaho Falls Web Design logo.</a></h1>
      <nav><a href="http://www.claymoredesigns.com/index.php" title="Claymore Design Home Page">Home</a><a href="http://www.claymoredesigns.com/portfolio.php" title="Portfolio of Business Websites">Portfolio</a><a href="http://www.claymoredesigns.com/services.php" title="Website Services We Offer">Services</a><a href="http://www.claymoredesigns.com/about.php" class="active" title="About Claymore Design websites">About Us</a><a href="http://www.claymoredesigns.com/faqs.php" title="Frequently Asked Questions for Business Websites">FAQ'S</a><a href="http://www.claymoredesigns.com/contact.php" title="Claymore Design Business Website Contact Information">Contact</a></nav>
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
        <div class="push">
          <script type="text/javascript"><!--
            google_ad_client = "ca-pub-6307068354307812";
            /* index */
            google_ad_slot = "7155290198";
            google_ad_width = 250;
            google_ad_height = 250;
            //-->
            </script>
            <script type="text/javascript"
            src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
          </script>
        </div>
      </div>
      <div class="right">        
        <h2>Who We Are</h2>
        <section>
          <div class="back"></div>
          <h3>Clayton Phillipp</h3>
          <img src="images/me.png" alt="Idaho Falls Business Owner Clayton Phillipp" />
          <p>My name is Clayton Phillipp, and I live in Idaho Falls, Idaho. I met my wife at Brigham Young University, Idaho, where I graduated in 2009.</p>
          <p>I started Claymore Design in Idaho Falls, Idaho, in order to pursue my passion for design and web development technologies. My goal is to create a home based web design, web development, and online marketing company with very low overhead so that I can charge less then any other design company in the area.</p>
          <div class="line"></div>
          <h3>Past Experience</h3>
          <p>After graduation, I spent several years working in web development with several businesses located in Idaho Falls, Idaho, and Rexburg, Idaho. Here are some of the websites I have helped develop.</p>
          <ul>
            <li><a href="http://www.zumiez.com/" target="_blank" title="Clothing Website">www.zumiez.com</a></li>
            <li><a href="http://www.allenbrothers.com/" target="_blank" title="Steakhouse Website">www.allenbrothers.com</a></li>
            <li><a href="https://www.pagodabox.com/" target="_blank" title="Hosting Website">www.pagodabox.com</a></li>
            <li><a href="http://www.redmarblesteaks.com/" target="_blank" title="Steak Website">www.redmarblesteaks.com</a></li>
            <li><a href="http://www.rejuvenation.com/" target="_blank" title="Lighting and Hardware Website">www.rejuvenation.com</a></li>
            <li>AND MANY MORE!</li>
          </ul>
          <div class="line"></div>
          <h3>My Goals</h3>
          <p>My main focus in starting Claymore Design is to help the small businesses and entrepreneurs who have a desire to succeed and make money online.</p>
          <p>I also want to share my knowledge of Web Design &amp; Marketing with my clients. I believe every business has the potential to learn more about Web Design & Online Marketing Technologies.</p>
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
        <li><span>Email:</span> hello@claymoredesigns.com</li>
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