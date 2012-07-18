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
  <meta name="description" content="We create websites, logos, color-schemes, and graphics that will improve your Business &amp; Website Identity."/>
  <meta name="keywords" content="idaho falls web design, idaho web design, web design, idaho, idaho falls web design portfolio, seo idaho falls, idaho falls seo, idaho seo, seo idaho, web design, website design idaho falls, idaho falls website design, website design portfolio"/>
  <title>Our Services | Idaho Falls Web Design Company Services | Claymore Design</title>
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
      <nav><a href="http://www.claymoredesigns.com/index.php" title="Claymore Design Home Page">Home</a><a href="http://www.claymoredesigns.com/portfolio.php" title="Portfolio of Business Websites">Portfolio</a><a href="http://www.claymoredesigns.com/services.php" class="active" title="Website Services We Offer">Services</a><a href="http://www.claymoredesigns.com/about.php" title="About Claymore Design websites">About Us</a><a href="http://www.claymoredesigns.com/faqs.php" title="Frequently Asked Questions for Business Websites">FAQ'S</a><a href="http://www.claymoredesigns.com/contact.php" title="Claymore Design Business Website Contact Information">Contact</a></nav>
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
        <h2>What We Do</h2>
        <section>
          <div class="back"></div>
          <h3>Our Services</h3>
          <p>With our extensive knowledge in Design and Internet Marketing Solutions, Claymore Design can help you Brand &amp; Establish your company.</p> 
          <p>We create websites, logos, color-schemes, and graphics that will improve your Business &amp; Website Identity. We can teach you how to understand the web in order to get your business to the top of all major search engines.</p>
          <div class="line"></div>
          <div class="box">
            <h4>Web Design</h4>
            <p>Having a website to showcase your business is very important. At Claymore Design we take the confusion, frustration and worry out of designing a website. We develop affordable custom websites for every need.</p>
          </div>
          <div class="box">
            <h4>Graphic Design</h4>
            <p>We can create all types of graphic designs from simple and modest, to very technical and intricate. Our website designs bring the full spectrum of style and intelect into every design project that we take part in.</p>
          </div>
          <div class="box">
            <h4>Internet Marketing</h4>
            <p>Our business uses the best marketing strategies &amp; techniques that will benefit the promotion of your business dramatically. We make sure you are heard and more importantly remembered.</p>
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
            <p>An online store is one of the best ways to make money on the internet. We have everything it takes to construct very detailed and user friendly shopping carts that you will be able to manage and control, with no problem.</p>
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
            <p>The brand of your business says a lot about your business as a whole. You need to have a simple yet eye catching and memorable brand more then anything. We specialize in creating brand power that everyone will remember.</p>
          </div>
          <div class="line"></div>
          <h3>Superior Support</h3>
          <p>Perhaps most importantly, we want to emphasize our commitment to superior customer service. We realize that the backbone to any successful business is not only understanding what the customer wants, but correctly executing their demands in an orderly fashion. In this business it is especially important because a design needs to be an exact extension of that company or individual. We want you to understand where we are coming from and we will always attempt to answer any questions that you may have to the best of our abilities. By understanding our clients we have been able to not only meet their wishes, we’ve been able to exceed their expectations. Which is why we work with you step-by-step, no changes, or updates are made until you are completely aware and in agreeance. This ensures a quicker turnaround time and a better experience for our company and your's.</p>
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