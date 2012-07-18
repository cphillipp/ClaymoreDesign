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
  <meta name="description" content="Looking for a quote on a business website? You can contact Claymore Design by using our form here."/>
  <meta name="keywords" content="idaho falls web design, idaho web design, web design, idaho, idaho falls web design portfolio, seo idaho falls, idaho falls seo, idaho seo, seo idaho, web design, website design idaho falls, idaho falls website design, website design portfolio"/>
  <title>Contact Us | Idaho Falls Web Design Company Contact Page | Claymore Design</title>
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
      <nav><a href="http://www.claymoredesigns.com/index.php" title="Claymore Design Home Page">Home</a><a href="http://www.claymoredesigns.com/portfolio.php" title="Portfolio of Business Websites">Portfolio</a><a href="http://www.claymoredesigns.com/services.php" title="Website Services We Offer">Services</a><a href="http://www.claymoredesigns.com/about.php" title="About Claymore Design websites">About Us</a><a href="http://www.claymoredesigns.com/faqs.php" title="Frequently Asked Questions for Business Websites">FAQ'S</a><a href="http://www.claymoredesigns.com/contact.php" class="active" title="Claymore Design Business Website Contact Information">Contact</a></nav>
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
        <h2>Contact Us</h2>
        <section>
          <div class="back"></div>
          <h3>How To Reach Us</h3>
          <p>Claymore Design is located in the heart of Idaho Falls.<!--  Contact us for possible solutions for your business. --></p>
          <p>In order to ensure the greatest outcome for your business we take great care throughout the development process. We start with an assessment about your business goals in order to understand your specific needs or wants.</p>
          <p>Once we fully understand everything we can about you, we will come up with the perfect strategy to meet all your goals and expectations.</p>
          <div class="line"></div>
          <h3>Looking For A Quote?</h3>
          <p>Call us for a free consultation and website review. Or use the form on the left to send us an email.</p>
          <h4>Phone: <span>208.390.7477 - (9am to 6pm)</span></h4>
          <h4>Email: <span>hello@claymoredesigns.com</span></h4>
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