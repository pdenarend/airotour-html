<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Contact Form'; 
		$to = 'paul@freetourrome.com'; 
		$subject = 'Message from Contact Form ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

<!DOCTYPE html>
<html>
  <head>
  <title>Airotour - free walking tours everywhere</title>

  	<meta name="Description" content="AiroTour. Free walking tours around the world, stay tuned for new walking tours and new cities to be added">
  	<meta name="Keywords" content="airo, airotour, free, tours, tour, guided, walking">
  	<meta name="robots" content="INDEX, FOLLOW">
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	
	<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
	<link rel="manifest" href="/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
	
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="main.css">

    <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
<script type="text/javascript">
    window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","learnMore":"More info","link":"http://www.airotour.com/privacy","theme":"dark-bottom"};
</script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
<!-- End Cookie Consent plugin -->

  </head>

<body>
<!-- Navigation bar -->
<div class="nav">
	<div class="container">
  		<ul class="pull-left">
  			<li><img src="/favicon/favicon-16x16.png"><a href="http://www.airotour.com/">airoTour</a></li>
  			<li><a href="http://www.airotour.com/all-tours">Browse Tours</a></li>
		</ul>
		
		<ul class="pull-right">
          <li><a href="http://www.airotour.com/become-a-tour-guide">Become a Guide</a></li>
          <li><a href="http://airotour.checkfront.com">My Booking</a></li>
		  <li><a href="http://www.airotour.com/blog">Blog</a></li>
          <li><a href="http://www.airotour.com/contact.php">Contact</a></li>
        </ul>
  	</div>
  	</div>

		<!-- Mobile Nav -->

<div class="mobile-nav">
<div class="container">
  		<ul >
  			<li class="pull-left"><a href="/"><img src="/pics/logonav.png"></a></li>
			<li class="pull-right"><a class="btn btn-default" data-toggle="collapse" aria-expanded="false" href="#mobile-menu"><strong>Menu</strong></a></li>
			</ul>
			
			<div class="collapse" id="mobile-menu">
			<div class="collapsedmenu">
			<div class="btn-group-vertical">
			
				<button type="button" class="btn btn-default"><a href="/all-tours.html">Browse Tours</a></button>
				<button type="button" class="btn btn-default"><a href="/become-a-tour-guide">Become a Guide</a></button>
				<button type="button" class="btn btn-default"><a href="http://airotour.checkfront.com">My Booking</a></button>
				<button type="button" class="btn btn-default"><a href="/blog">Blog</a></button>
				<button type="button" class="btn btn-default"><a href="/contact.php">Contact</a></li></button>
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Languages<span class="caret"></span></button>
						<ul class="dropdown-menu" role="menu">
						  <li><a href="/"><img src="/pics/English.jpg">English</a></li>
						  <li><a href="/es/"><img src="/pics/spain.png">Spanish</a></li>
						</ul>
										
					
			</div>
			 
		
</div></div></div></div>

		
		<!-- Jumbotron -->
	    <div class="jumbotron contactjumbo">
	
			<div class="container">
			<div class="page-header">
			<h1>Contact us!</h1>
			<p>Send us a message and we will get back to you as soon as possible!</p>
			</div>
			</div>
	  
		</div> 
		
		<!-- Breadcrumbs -->
		<div class="container">
		<ol class="breadcrumb">
			<li><a href="http://www.airotour.com">Home</a></li>
			<li><a href="http://www.airotour.com/contact.php">Contact AiroTour</a></li>
		</ol></div>	

		
		
	<div class="contact-airo">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-6 col-md-offset-3">
  					<form class="form-horizontal" role="form" method="post" action="contact.php">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php echo $result; ?>	
						</div>
					</div>
				</form> 
			</div>
		</div>
	</div>   
	</div>
   
<!--start footer-->    
<div class="nav">
	<div class="footer">
    	<div class="container">
        	<ul class="pull-left">
  			<a href="http://www.airotour.com/"><img src="/pics/logo1.png"></a>
			</ul>
		
        	<ul class="pull-right">
        	<li><h3>Work with us</h3>
        	<p><a href="http://www.airotour.com/become-a-tour-guide">Become a Guide</a></p>
        	<p><a href="http://www.airotour.com/become-a-tour-guide">Careers</a></p>
        	<p><a href="http://airotour.checkfront.com">Register</a></p>
        	<p><a href="http://airotour.checkfront.com">Partner log in</a></p>
        	<p><a href="http://airotour.checkfront.com">Invite Friends</a></p>
          </li>
        </ul>

        	<ul class="pull-right">
        	<li><h3>Useful info</h3>
        	<p><a href="http://www.airotour.com/about">About us</a></p>
        	<p><a href="http://www.airotour.com/contact.php">Contact us</a></p>
        	<p><a href="http://www.airotour.com/terms-and-conditions">Terms and conditions</a></p>
			<p><a href="http://www.airotour.com/privacy">Privacy</a></p>
			<p><a href="http://www.airotour.com/disclaimer">Disclaimer</a></p>
        	<p><a href="http://www.airotour.com/sitemap.xml">Sitemap</a></p>
           </li>
        </ul>

        	<ul class="pull-right">
        	<li><h3>Manage</h3>
        	<p><a href="http://airotour.checkfront.com">My booking</a></p>
        	<p><a href="http://airotour.checkfront.com">Print my booking</a></p>
        	<p><a href="http://airotour.checkfront.com">Gift cards</a></p>
           </li>
        </ul>

     </div>
  </div>
</div>
<!--end footer-->    

<!--start social footer-->    
<div class="nav">
	<div class="footer-social">
    	<div class="container">

<a href="https://www.facebook.com/sharer/sharer.php?u=www.airotour.com"><img src="../pics/icons/Facebook.png" alt="airoTour on facebook"></a>
<a href="https://pinterest.com/pin/create/button/?url=www.airotour.com&media=Free%20walking%20tours%20around%20the%20world&description="><img src="../pics/icons/Pinterest.png" alt="airoTour on Pinterest"></a>
<a href="https://plus.google.com/share?url=www.airotour.com"><img src="../pics/icons/GooglePlus.png" alt="airoTour on googleplus"></a>
<a href="#"><img src="../pics/icons/Instagram.png" alt="airoTour on Instagram"></a>
<a href="http://www.commments.com/"><img src="../pics/icons/Dribbble.png" alt="airoTour on Dribbble"></a>
<a href="https://www.linkedin.com/shareArticle?mini=true&url=www.airotour.com&title=Find%20your%20free%20walking%20tour%20around%20the%20world&summary=Free%20walking%20tours%20around%20the%20world&source=www.airotour.com"><img src="../pics/icons/LinkedIn.png" alt="airoTour on LinkedIn"></a>
<a href="//www.reddit.com/submit" onclick="window.location = '//www.reddit.com/submit?url=' + encodeURIComponent(window.location); return false" alt="airoTour on Reddit"><img src="../pics/icons/Reddit.png" alt="airoTour on Reddit"></a>
<a href="https://twitter.com/home?status=Free%20walking%20tours%20around%20the%20world%20-%20www.airotour.com"><img src="../pics/icons/Twitter.png" alt="airoTour on twitter"></a>
      </div>
  </div>
</div>
<!--end social footer-->    

<!-- mobile nav footer -->
<div class="mobile-footer">
<div class="mobile-nav">
		
		<div class="faq">
<div class="container">
    <div class="page-header ">
            	<h1 class="text-center"><a href="/"><img src="/pics/logo1.png"></a> </h1>

    </div>
        <br>
        <br>
    <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                     <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#panelworking">Working with us</a></h4>
                </div>
				
                <div id="panelworking" class="panel-collapse collapse ">
                    <div class="panel-body"><div class="pull-left">
						<p><a href="/become-a-tour-guide">Become a Guide</a></p>
						<p><a href="/become-a-tour-guide">Careers</a></p>
						<p><a href="http://airotour.checkfront.com">Register</a></p>
						<p><a href="http://airotour.checkfront.com">Partner log in</a></p>
						<p><a href="/under-construction.html">Invite Friends</a></p>
					</div></div>
                </div>
            </div>
			
            <div class="panel panel-default">
                <div class="panel-heading">
                     <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#paneluseful">Useful info</a></h4>
                </div>
				
                <div id="paneluseful" class="panel-collapse collapse">
                    <div class="panel-body"><div class="pull-left">
					<p><a href="/about">About us</a></p>
					<p><a href="/contact.php">Contact us</a></p>
					<p><a href="/terms-and-conditions">Terms and conditions</a></p>
					<p><a href="/privacy">Privacy</a></p>
					<p><a href="/disclaimer">Disclaimer</a></p>
					<p><a href="/sitemap.xml">Sitemap</a></p>
					</div></div>
                </div>
            </div>
			
            <div class="panel panel-default">
                <div class="panel-heading">
                     <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#panelmanage">Manage</a></h4>
                </div>
				
                <div id="panelmanage" class="panel-collapse collapse">
                    <div class="panel-body"><div class="pull-left">
					     <p><a href="http://airotour.checkfront.com">My booking</a></p>
						<p><a href="http://airotour.checkfront.com">Print my booking</a></p>
						<p><a href="https://airotour.checkfront.com/reserve/?filter_category_id=8">Gift cards</a></p></div>

					
					</div>
                </div>
            </div>
			
            
			
            
        </div>
    </div>

</div>

		
</div></div>


<!--start_script-->
<script src="js/jquery-1.11.3.min.js"></script>
<script type='text/javascript' src="js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
<!--end script-->

<!--start_google_analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71410446-1', 'auto');
  ga('send', 'pageview');

</script>
<!--end_google_analytics-->

</html>
</body>