<!doctype html>
<html>
  <head>
  <meta charset="UTF-8">
  <title>Untitled Document</title>
  <link href="css/khc_global.css" rel="stylesheet" type="text/css">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,700,700italic,400italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:800italic' rel='stylesheet' type='text/css'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>
	</head>

	<body>
    <div id="wrapper">
      <header>
        <section id="title"> </section>
        <nav class="menu">
          <ul class="menu">
            <li><a href="index.php">SITE HOME</a></li>
            <li><a href="about.html">ABOUT KSP</a></li>
            <li><a href="products.html">PRODUCTS</a></li>
            <li><a href="innovation.html">INNOVATION</a></li>
            <li><a href="testimonials.php">TESTIMONIALS</a></li>
            <li><a href="contact.html">CONTACT US</a></li>
          </ul>
          <a href="/testimonials.html#" id="pull">Menu</a></nav>
      </header>
      <div id="testimonials">
      <p>With almost 30 years of serving the RV industry nationally, as well as within the local community, we have always strived to build long-lasting business partnerships.</p>
      <img src="/images/filler.jpg" alt="">
      <p>Through professional business ethics, product credibility, and exceptional customer service, Kencon has become a favorite wholesaler among suppliers. See who proudly endorses Kencon in the Northern Indiana RV Industry!</p>

<h3><em>“We’ve worked with Kencon for over 20 years and have yet to find another supplier as responsive and quick with last minute requests”</em> – Jen, account manager at Jayco</h3>

<h3><em>“Always on time!”</em> – Greg, PM at Forrest River</h3>

<h3><em>“They always keep us up to date on new products and are rarely out of the inventory that we need”</em> – Frank, Vice President at Hartland RV</h3>
</div>
    <footer>
      <h2>KENCON SPECIALTY PRODUCTS</h2>
      <h3>P.O. Box 737</h3>
      <h3>Fax# 574-848-7674</h3>
      <h3>19974 County Road 6, Bristol, IN 46507</h3>
      <h6>&copy;2014</h6>
    </footer>
    </div>


</body>
</html>