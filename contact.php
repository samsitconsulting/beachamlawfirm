<?php
/*
From http://www.html-form-guide.com 
This is the simplest emailer one can have in PHP.
If this does not work, then the PHP email configuration is bad!
*/
$msg="";
if(isset($_POST['submit']))
{
    /* ****Important!****
    replace name@your-web-site.com below 
    with an email address that belongs to 
    the website where the script is uploaded.
    For example, if you are uploading this script to
    www.my-web-site.com, then an email like
    form@my-web-site.com is good.
    */
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$fmessage = $_POST['message'];

	$from_add = $email;//"smcclain2@itt-tech.edu"; 

	$to_add = "mcclain.sam@gmail.com"; //<-- put your yahoo/gmail email address here

	$subject = "Web Inquiry from " . $name;
	$message = "Name: " . $name . " \r\n Phone: " . $phone . "\r\n Email: " . $email . "\r\n \r\n Message: \r\n" . $fmessage . "\r\n";
	
	$headers = "From: $from_add \r\n";
	$headers .= "Reply-To: $from_add \r\n";
	$headers .= "Return-Path: $from_add\r\n";
	$headers .= "X-Mailer: PHP \r\n";
	
	
	if(mail($to_add,$subject,$message,$headers)) 
	{
		$msg = "Mail sent OK";
	} 
	else 
	{
 	   $msg = "Error sending email!";
	}
}
?>
<!doctype html>

<html>
	<head>
		<title>Arnold Beacham</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Lexington criminal lawyer,Lexington criminal attorney,Lexington criminal defense lawyer,Lexington criminal defense attorney,lawyer,attorney,criminal defense,criminal,criminal law,Lexington,criminal attorney,defense lawyer,crime,defense,offenses"/>
	<meta name="description" content="Let the Law Office of Arnold Beacham put years of experience to work for you. Call for a consultation."/>
	<meta property="og:url" content="http://www.arnoladbeacham.com/"/>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>


<!--	<link href="css/style1.css" rel="stylesheet" type="text/css" media="screen" />
-->    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.validate.js"></script>
    <script type="text/javascript">
		$(document).ready(function() {
			$("#ff").validate({
				submitHandler:function(form) {
					SubmittingForm();
				},
				rules: {
					name: "required",
					phone: "required",
					email: {				
						required: true,
						email: true
					},
					city: {
						required: true
					}
				},
				messages: {
					name: "Please enter your name",
					phone: "Please enter your phone",
					email: "Please enter valid email adress",
					city: "Please enter city"
				}
			});
		});

		jQuery.validator.addMethod(
			"selectNone",
			function(value, element) {
				if (element.value == "none")
				{
					return false;
				}
				else return true;
			},
			"Please select an option."
		);

	</script>
        <style>
		
.navbar-fixed {
    top: 0;
    z-index: 100;
  position: fixed; 
    width: 100%;
}

		</style>
        <script>
        $(document).ready(function() {
  
  $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
      console.log($(window).scrollTop())
    if ($(window).scrollTop() > 280) {
      $('#nav').addClass('navbar-fixed');
    }
    if ($(window).scrollTop() < 281) {
      $('#nav').removeClass('navbar-fixed');
    }
  });
});
</script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<div id="header">

				<!-- Logo -->
					<h1><a href="/" id="logo">The Law Office of <em>Arnold Beacham</em></a></h1>
					<h4>Call Today <span style="color:#212065">803-957-2522</span></h4>
			  <!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="/">Home</a></li>
<!--							<li>
								<a href="">Dropdown</a>
								<ul>
									<li><a href="#">Lorem dolor</a></li>
									<li><a href="#">Magna phasellus</a></li>
									<li><a href="#">Etiam sed tempus</a></li>
									<li>
										<a href="">Submenu</a>
										<ul>
											<li><a href="#">Lorem dolor</a></li>
											<li><a href="#">Phasellus magna</a></li>
											<li><a href="#">Magna phasellus</a></li>
											<li><a href="#">Etiam nisl</a></li>
											<li><a href="#">Veroeros feugiat</a></li>
										</ul>
									</li>
									<li><a href="#">Veroeros feugiat</a></li>
								</ul>
							</li>
                            --> 
							<!--<li><a href="#">Domestic Violence</a></li>-->
							<!--<li><a href="#">Right Sidebar</a></li>
							<li><a href="#">Two Sidebar</a></li>-->
							<!--<li><a href="#">DUI</a></li>-->
                            <li><a href="about.html">About Us</a></li>
                            <li class="current"><a href="contact.php">Contact Us</a></li>                            
						</ul>
					</nav>			</div>
		<!-- Main -->
			<section class="wrapper style1">
				<div class="container">
					<div id="content">
                    

						<!-- Content -->
		<section class="wrapper style1">
				<div class="container">
					<div class="row">
						<section class="6u 12u(narrower)">
							<div class="box post">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13234.102553264907!2d-81.2317209!3d33.97903!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xab8153260ccb3a6d!2sArnold+Beacham+Law+Offices!5e0!3m2!1sen!2sus!4v1468337386428" width="480" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                            </div>
					  </section>
						<section class="6u 12u(narrower)">
							<div class="box post">
                                 <!--<a id="foxyform_embed_link_797055" href="#"></a>-->
                                 <?php echo $msg ?>

                        <form role="form" id="contact-form" action='<?php echo htmlentities($_SERVER['PHP_SELF']); ?>' method='post'>

    						<div class="form-group">
    				    		<label for="name">Your name</label>
    				    		<input type="text" name="name" class="form-control" id="name" placeholder="First Name and Last Name"/>
    				  		</div>
    				  		<div class="form-group">
    				    		<label for="phone">Email address</label>
    				    		<input type="text" name="phone" class="form-control" id="phone" placeholder="Your phone number"/>
    				  		</div>                            
    				  		<div class="form-group">
    				    		<label for="email">Email address</label>
    				    		<input type="email" name="email" class="form-control" id="email" placeholder="Your personal email address"/>
    				  		</div>
    				  		<div class="form-group">
    				    		<label for="message">Your message</label>
    				    		<textarea name="message" class="form-control" id="message" rows="6"></textarea>
    				  		</div>
    				  		<div class="submit">
    				  			<input id="submit" type="submit" name="submit" class="btn btn-info btn-fill" value="Submit" />
    				  		</div>
    					</form>


							</div>
						</section>                        
				  </div>
				
				</div>
			</section>

							<article>
								<header>
                                 </header>
									<!--<h2>Contact Us</h2>
									<p>All content, all the time.</p>-->

								<!--<span class="image featured"><img src="images/banner.jpg" alt="" /></span>-->

								</article>

					</div>
				</div>
			</section>

		<!-- CTA -->
			<section id="cta" class="wrapper style3">
				<div class="container">
					<header>
						<h2>Let us help you with your case!</h2>
						<!--<a href="#" class="button">Insert Coin</a>-->
					</header>
				</div>
			</section>

		<!-- Footer -->
			<div id="footer">
				<div class="container">
					<div class="row">
						<section class="3u 6u(narrower) 12u$(mobilep)">
							<!--<h3>Links to Stuff</h3>
							<ul class="links">
								<li><a href="#">Mattis et quis rutrum</a></li>
								<li><a href="#">Suspendisse amet varius</a></li>
								<li><a href="#">Sed et dapibus quis</a></li>
								<li><a href="#">Rutrum accumsan dolor</a></li>
								<li><a href="#">Mattis rutrum accumsan</a></li>
								<li><a href="#">Suspendisse varius nibh</a></li>
								<li><a href="#">Sed et dapibus mattis</a></li>
							</ul>-->
						</section>
						<section class="3u 6u$(narrower) 12u$(mobilep)">
<!--							<h3>More Links to Stuff</h3>
							<ul class="links">
								<li><a href="#">Duis neque nisi dapibus</a></li>
								<li><a href="#">Sed et dapibus quis</a></li>
								<li><a href="#">Rutrum accumsan sed</a></li>
								<li><a href="#">Mattis et sed accumsan</a></li>
								<li><a href="#">Duis neque nisi sed</a></li>
								<li><a href="#">Sed et dapibus quis</a></li>
								<li><a href="#">Rutrum amet varius</a></li>
							</ul>-->
						</section>
						<section class="6u 12u(narrower)">
<!--							<h3>Get In Touch</h3>
							<form>
								<div class="row 50%">
									<div class="6u 12u(mobilep)">
										<input type="text" name="name" id="name" placeholder="Name" />
									</div>
									<div class="6u 12u(mobilep)">
										<input type="email" name="email" id="email" placeholder="Email" />
									</div>
								</div>
								<div class="row 50%">
									<div class="12u">
										<textarea name="message" id="message" placeholder="Message" rows="5"></textarea>
									</div>
								</div>
								<div class="row 50%">
									<div class="12u">
										<ul class="actions">
											<li><input type="submit" class="button alt" value="Send Message" /></li>
										</ul>
									</div>
								</div>
							</form>-->

						</section>
					</div>
				</div>

				<!-- Icons -->
					<!--<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>-->

				<!-- Copyright -->
					<div class="copyright">
						<ul class="menu">
							<li>&copy; 2016. All rights reserved</li><li>Design: <a href="http://www.samsitconsulting.com">Sams' IT Consulting LLC</a></li>
						</ul>
					</div>

			</div>
	</body>
</html>