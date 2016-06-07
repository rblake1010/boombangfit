<?php
	if(isset($_POST['submit'])) {
	$post = $_POST;
	unset($post['submit']);
	$data = array_values ($post);
	$headers = array_keys($post);
	if ($fp = fopen('data.csv', 'a+')) {
		$line = fgets($fp);
		if(!$line == $headers) {
		fputcsv ($fp,$headers);
		fputcsv($fp,$data);	
			
			
			}
			else {
				fputcsv($fp,$data);
			}
			fclose($fp);
			header('Location: http://www.google.com ');
		
		}
			
	}
	
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />

<meta name="description" content="Jam Thunder DJ is a professional DJ company, providing a unique approach to each event. Jam Thunder DJ primarily serves the greater Hampton Roads area" />
<meta name="keywords" content="Jam Thunder DJ, Jam Thunder, Virginia Wedding DJ, Virginia Beach Wedding DJ, Hampton Roads DJ, Norfolk DJ, Suffolk DJ, Chesapeake DJ, Virginia Beach Disc Jockey, Disc Jockey, Disk Jockey, DeeJay, Prom DJ, Party DJ, Corporate Event DJ, Music DJ, Virginia Beach DJ, Virginia DJ, Virginia Disc Jockey, DJ, DJ virginia, Disc Jockey virginia, Mobile DJ, Richard Blake "/>
<meta name="geo.region" content="US-VA" />
<meta name="geo.placename" content="Virginia Beach" />
<meta name="geo.position" content="36.791794;-76.144119" />
<meta name="copyright" content="Copyright 2013 by Virginia Beach, VA Disc Jockey - Jam Thunder DJ" />
<meta name="distribution" content="global" />
<meta name="robots" content="all" />
<meta name="contactphonenumber" content="757-270-3656" />
<meta name="owner" content="Virginia Beach VA Disc Jockey - Jam Thunder DJ" />
<title>Jam Thunder DJ - Music for all Occasions</title>

<link href="css/reset.css" type="text/css" rel="stylesheet" />
<link href="css/style.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="favicon.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script src="js/modernizr.custom.67211.js"></script>

<script type="text/javascript" src="fancybox/jquery.fancybox.js"></script>
<script type="text/javascript" src="fancybox/helpers/jquery.fancybox-media.js"></script>
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="screen" />

<!-- bxSlider Javascript file -->
<script src="bxslider/jquery.bxslider.js"></script>
<!-- bxSlider CSS file -->
<link href="bxslider/jquery.bxslider.css" rel="stylesheet" />

<script src="js/jquery.cycle.all.js"></script>

<script src="js/custom.js" type="text/javascript"></script> 
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20149616-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


</head>
<body>
<div class="navigationwrap">
<div class="navigation">
<ul>
<li><a href="#about">About</a></li>
<li><a href="#media">Media</a></li>
<li><a href="#wedding">Weddings</a></li>
<li><a href="#package">Packages</a></li>
<li><a href="#contact">Contact</a></li>
</ul>
</div><!-- end navigation -->
</div><!-- end navigationwrap -->
<header>
<img src="images/navicon1.png" width="39" height="34" class="mobilenav">
<div class="slideshow">
<ul class="bxslider">
  <li><img src="images/slide1.jpg" alt="Jamthunder Wedding Equipment" /></li>
  <li><img src="images/slide2.jpg" alt="Jamthunder DJ Equipment"  /></li>
</ul>
</div>
<div class="logo">
<img src="images/logo.png" width="97" height="97" class="jamthunder" alt="Jamthunder Logo">
<h1>JamThunder<span>DJ</span></h1>
<h2>Music for all occasions</h2>
</div><!-- end logo -->
<nav>
<ul>
<li><img src="images/abouticon.png" width="19" height="18" class="icon" alt="About Jamthunder"><a href="#about">About</a></li>
<li><img src="images/mediaicon.png" width="23" height="26" class="icon" alt="Jamthunder Media"><a href="#media">Media</a></li>
<li><img src="images/weddingsicon.png" width="25" height="17" class="icon" alt="Jamthunder Weddings"><a href="#wedding">Weddings</a></li>
<li><img src="images/packagesicon.png" width="16" height="22" class="icon" alt="Jamthunder Packages"><a href="#package">Packages</a></li>
<li><img src="images/contact.png" width="22" height="15" class="icon" alt="Contact Jamthunder"><a href="#contact">Contact</a></li>
</ul>
</nav><!-- end nav -->
</header><!-- end header -->
<div class="aboutwrap">
<div class="about" >
<h1 class="bg-about" id="about"><img src="images/thunder.png" width="31" height="51" class="about-thunder">About</h1>
<img src="images/DJ.png" width="458" height="343" class="dj" alt="Richard Blake - Disc Jockey">
<div class="welcome">
<h2>Welcome</h2>
<p>Jam Thunder DJ is a professional mobile entertainment company based out of Virginia Beach,VA providing a unique approach to each event. We offer upscale entertainment for your dream wedding, birthday party or special event. So what are you waiting for? Book your special event now or call us at: <span class="number-about">(757) 270-3656</span> and Let the party begin! Jam Thunder DJ primarily serves the greater Hampton Roads area. </p>
<p>Richard Blake ( DJ Jam Thunder) <br />
Owner / Disc Jockey</p>
</div> <!-- end welcome -->
</div><!-- end about -->
</div><!-- end aboutwrap -->

<div class="mediawrap">
<div class="media" >
<h1 class="bg" id="media"><img src="images/thunder.png" width="31" height="51" class="media-thunder">Media</h1>

<div class="tucanos-clip">
<a class="fancybox-media" href="http://player.vimeo.com/video/63344253"><img src="images/tucanos-clip.png" width="458" alt="Tucanos Flash Mob" height="289"></a>
</div><!-- end tucanos-clip -->
<div class="party-begin">
<iframe class="test" src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fjamthunderdj&amp;width=450&amp;height=46&amp;colorscheme=light&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;send=true&amp;appId=178519965622863" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:46px;" allowTransparency="true"></iframe><h2>Let The Party Begin!</h2>

<p>Weddings, Proms, Birthdays or any other event you are planning, we're just what you are looking for. With over 15 years of experience as a Professional DJ Company, Jam Thunder DJ knows exactly what it takes to ensure your event exceeds your expectations. We were awarded the Best of Virginia Beach Award in 2012 for keeping the dance floor packed by playing the hottest and newest music for the crowd. We bring a variety of music to every event and we eagerly take music requests and play them on the spot.</p>
</div><!-- end party-begin-->

<div style="clear:both"></div>

<div class="small-photos">
<a class="fancybox" rel="pic" href="images/weddingbig.jpg"><img src="images/pic1.png" width="204" height="128" alt="Groomsmen and Groom Dancing" class="leftpic"></a>
<a class="fancybox" rel="pic" href="images/wedding2big.jpg"><img src="images/pic2.png" width="203" height="128" alt="Dancing Wedding" class="rightpic"></a>
<div style="clear:both"></div>
<!--<img src="images/pic1.png" width="204" height="128" class="leftpic">
<img src="images/pic2.png" width="203" height="128" class="rightpic">-->
</div><!-- end small-photos -->

<div class="testimonials">
<h2>Client Testimonials</h2>
<div class="blurb">
<div><p>"You were incredible. Everyone said you were the best DJ they have seen or heard. Best Company Party we've ever had" <br /> <span class="yellow">Jon Harper</span></p></div>
<div><p>"Thank you so much for the great music at our wedding! You were very professional and friendly." <br /> <span class="yellow">Bobby & Lisa Carter</span> </p></div>
<div><p>"The Best DJ in Virginia Beach..I can't imagine hiring anyone else. Gave my daughter the best Birthday" <br /> <span class="yellow">Amanda Clark</span> </p></div>
</div>

</div><!-- end testimonials-->

</div><!-- end media -->
</div><!-- end mediawrap -->

<div class="weddingwrap">
<div class="wedding" >
<h1 class="bg" id="wedding"><img src="images/thunder.png" width="31" height="51" class="wedding-thunder">Weddings</h1>
<img src="images/weddingcouple.png" width="458" alt="Just Married - Jamthunder DJ" height="343" class="dj">
<div class="welcome">
<h2>Your Special Day!</h2>
<p>Several things set us apart from other services. First, you have the opportunity to meet your DJ before your event. With most other entertainment services, your initial consultation is with a sales rep, or someone other than the actual DJ who will entertain at your reception. We feel it is very important for you to be comfortable with your entertainer. Every performance is important to us! Your DJ will be experienced, and courteous. We use only professional, commercial quality equipment. Standard dress for a wedding is a tuxedo. We take care of the little details that make the difference between an OK wedding reception and a MEMORABLE reception.</p>
<p><a href="pdf/wedreception.pdf" target="_blank">Wedding Reception Questionaire</a></p>
<p><a href="pdf/wedparty.pdf" target="_blank">Wedding Party Introduction</a></p>  

</div> <!-- end welcome -->
</div><!-- end wedding -->
</div><!-- end weddingwrap -->

<div style="clear:both"></div>

<div class="packagewrap">
<div class="package" >
<h1 class="bg" id="package" ><img src="images/thunder.png" width="31" height="51" class="package-thunder">Packages</h1>
<div style="clear:both"></div>
<div class="packageinfo">
<p>All DJ Packages come with: DJ plays your favorite music, Requests Taken, Interaction with the audience, Wireless Microphone.  All DJ Packages are for FOUR (4) hours - each hour afterwards is $50.  Light Show can be added to any DJ Package - $50 and up. <br /> <span class="hoverpack">Click and choose the <span class="number-contract">Package</span> thats right for you:</span> </p>
</div><!-- end packageinfo -->

<!-- end slideA -->
<div class="packageA deals" id="packageA">
<div class="slide">
<h3 id="packageA">Choose Basic</h3>
</div>
<h3>Basic</h3>
<ul>
<li>$300 and up</li>
<li>Parties</li>
<li>Backyard Parties</li>
<li>Pool Parties</li>
</ul>
</div><!-- end packageA -->

<div class="packageB deals" id="packageB">
<div class="slide">
<h3 id="packageB">Choose Regular</h3>
</div>
<h3>Regular</h3>
<ul>
<li>$350 and up</li>
<li>Large Birthday Parties</li>
<li>Anniversaries</li>
<li>School Dances</li>
</ul>
</div><!-- end packageB -->
<div class="packageC deals" id="packageC">
<div class="slide">
<h3 id="packageC">Choose Premium</h3>
</div>
<h3>Premium</h3>
<ul>
<li>$450 and up</li>
<li>Weddings</li>
<li>Military Functions</li>
<li>Proms</li>
<li>Corporate Functions</li>
</ul>
</div><!-- end packageC -->
</div><!-- end package -->
</div><!-- end packagewrap -->


<div class="contactwrap">
<div class="contact">
<h1 class="bg" id="contact" ><img src="images/thunder.png" width="31" height="51" class="contact-thunder">Contact</h1>

<div class="contract">
<h2>Contract Information</h2>
<p>The Contract and Event Planner will open in a new window, simply use your browser's print button to print out the Contract or Event Planner, and then email the completed forms to the address on top of the Contract. If there is a problem, please call Richard Blake, Jam Thunder Mobile DJ - at <span class="number-contract">(757) 270-3656</span> to have a Contract and Event Planner for your event mailed or faxed to you.</p>
<p><a href="pdf/Jamthunder-Contract.pdf" target="_blank">View Contract</a></p>
<p><a href="pdf/evplanjt.pdf" target="_blank">View Event Planner</a></p>
</div><!-- end contract-->

<div class="form">
<form method="post"  action="php/email.php" > 
<div class="form-item"><input type="text" name="name" class="name" value="Name"  /></div>
<div class="form-item"><input type="email" name="email" class="email" value="Email" /></div>
<div class="form-item"><input type="text" name="company" class="company" value="Company" /></div>
<div class="form-item"><input type="tel" name="phone" class="phone" value="Phone" /></div>
<div class="form-item">
<select name="packages" class="packages">
 <option value="choose" class="choose" selected ="selected">Choose...</option>
  <option value="packageA" >Basic</option>
  <option value="packageB">Regular</option>
  <option value="packageC">Premium</option>
  <option value="other">Other</option>
</select> </div>
<div class="form-item extra"><textarea name="message"  class="message" >Message</textarea></div>
<div class="form-item"><input type="submit" name="submit" class="submit" value="Submit"></div>
</form>

</div><!-- end form -->

</div><!-- end contact -->
</div><!-- end contactwrap -->


<div class="thankswrap">
<div class="thanks" >
<h1 class="bg" id="thanks"><img src="images/thunder.png" width="31" height="51" class="thanks-thunder">Submitted!</h1>
<div class="packageinfo">
<p>Thank you for your message. We will get back to you as soon as we can!!! </p>
</div><!-- end packageinfo -->
</div><!-- end thanks -->
</div><!-- end thankswrap -->

<div class="footerwrap">
<div class="footer" >
<div class="footerinfo">
<p>© 2013 Jamthunder DJ</p>
<p>Developed by <a href="http://www.richardrblake.com">richardrblake.com</a></p>
</div><!-- end footerinfo -->
</div><!-- end footer -->
</div><!-- end footerwrap -->


<a href="#" class="scrollup">Scroll</a>
</body><!-- end body -->
</html><!-- end html -->
