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
  <meta name="description" content="Looking for answers to all your website questions? Read the most common questions about business design and website services here."/>
  <meta name="keywords" content="idaho falls web design, idaho web design, web design, idaho, idaho falls web design portfolio, seo idaho falls, idaho falls seo, idaho seo, seo idaho, web design, website design idaho falls, idaho falls website design, website design portfolio"/>
  <title>FAQ'S | Idaho Falls Web Design Company FAQ'S | Claymore Design</title>
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
      <nav><a href="http://www.claymoredesigns.com/index.php" title="Claymore Design Home Page">Home</a><a href="http://www.claymoredesigns.com/portfolio.php" title="Portfolio of Business Websites">Portfolio</a><a href="http://www.claymoredesigns.com/services.php" title="Website Services We Offer">Services</a><a href="http://www.claymoredesigns.com/about.php" title="About Claymore Design websites">About Us</a><a href="http://www.claymoredesigns.com/faqs.php" class="active" title="Frequently Asked Questions for Business Websites">FAQ'S</a><a href="http://www.claymoredesigns.com/contact.php" title="Claymore Design Business Website Contact Information">Contact</a></nav>
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
        <h2>Frequently Asked Questions</h2>
        <section>
          <div class="back"></div>
          <h3>Q: Will we need to have a meeting in connection with the website design?</h3>
          <p><span>A:</span> In the majority of cases a meeting isn’t necessary and most of our websites are generally completed with contact via email and telephone only. We place suggested website designs onto the Internet in a private place where only yourselves and us can view the content. We then liaise with you regularly to discuss the web designs in order that the website design and functionality is exactly as you wish.</p>
          <div class="line"></div>
          <h3>Q: How long will it take for my website to be designed?</h3>
          <p><span>A:</span> The timescale of a website design project is often dictated by the client. If you have a deadline in mind we will endeavour to meet it for you. The most common delay in the creation and completion of a new website is waiting for content (text/images) to be sent to us by the client.</p>
          <div class="line"></div>
          <h3>Q: I run a small/medium size business and want an online presence to promote my business in a professional manner to new customers and to provide a more professional image to existing customers. What do I need to achieve this? </h3>
          <p><span>A:</span> You need a professionally developed website, a domain name, and hosting facilities for your website. You also need the website to be uploaded onto your hosting facilities and promoted to the search engines.</p>
          <div class="line"></div>
          <h3>Q: I dont think a website will do anything for me, am I right?</h3>
          <p><span>A:</span> No, many people overlook the various products, services, or business processes they can include on a website. Any communication or interactions that happen within your business can be made easier and more efficient by the web. Your business will save money and time while appealing to a much greater audience, the world.</p>
          <div class="line"></div>
          <h3>Q: This is my first design project. What should I consider?</h3>
          <p><span>A:</span> Simple is better. It’s best not to get too complex with your design. Understand your market. How do you want your company perceived? Young and energetic? Dependable? Innovative? Speak your mind! If you have a design style in mind, make it known! Send us samples of designs you’ve seen online that you like.</p>
          <div class="line"></div>
          <h3>Q: What types of payment do you accept?</h3>
          <p><span>A:</span> We accept Visa/ MasterCard/ AMEX/ Paypal and checks from local clients.</p>
          <div class="line"></div>
          <h3>Q: What is web hosting?</h3>
          <p><span>A:</span> Web hosting is a monthly or annual fee that you pay to have your site viewable on the Internet. We can provide web hosting for our clients.</p>
          <div class="line"></div>
          <h3>Q: If I already have a site can you help me improve it?</h3>
          <p><span>A:</span> Yes. We can usually redesign or freshen up an existing site quicker, and for less money than building one from scratch. Whether your company’s website “doesn’t look professional”, takes too long to load or the navigation is baffling to visitors, we can help.</p>
          <div class="line"></div>
          <h3>Q: What does Website Maintenance or Website Updates mean?</h3>
          <p><span>A:</span> Website Maintenance or Website Updates, refers to changes made to your website after the initial design &#038; setup. Keeping a website up-to-date is essential in having repeat visitors to your site. Updating the site with sales, articles, new products, newsletters, press releases, financial figures and links are all examples of website Maintenance.</p>
          <div class="line"></div>
          <h3>Q: Can you use my company&#8217;s existing logo, brochure design, and other materials for my website?</h3>
          <p><span>A:</span> Yes, we can certainly use your existing company literature such as logos’, brochure, etc. for incorporating in the new web site.</p>
          <div class="line"></div>
          <h3>Q: What are the things that you expect form my company to complete the website design?</h3>
          <p><span>A:</span> Brochures, logos, photographs, product descriptions, business cards etc. are all recommended resources to use. For new businesses we will help you get started from scratch. A dedicated person will answer any questions during your website project.</p>
          <div class="line"></div>
          <h3>Q: Where are you located?</h3>
          <p><span>A:</span> We are located in Idaho Falls, Idaho. We have been offering Idaho Falls Web Design for quite some time now, and are currently expanding our services to the entire state of Idaho and surrounding areas. If you are not from Idaho don’t worry, we have clients from as far as Michigan. We will work with any business regardless of location.</p>
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