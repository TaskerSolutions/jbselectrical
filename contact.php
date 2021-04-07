<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>

	<!-- Tell IE to use the most current layout engine-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/> 

	<!-- Responsive site doesn't get zoomed out by mobile phone's browser.-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 

	 <!-- for SEO -->
	<meta name="description" content="JB's Electrical are professional and reliable electricians,
	servicing the Rotorua and surrounding areas. You can trust JB's for premium results."/>
	<!-- avoid stuffing  eg. (website websites)-->
	<meta name="keywords" content="electrician electrical JBs Rotorua sparky trades houses residential
	commercial trenching underground inspector bay of plenty"/>
	<meta name="author" content="Tasker Solutions"/>

	<!-- Facebook sharing crieria. Description helps click through rate and conversions -->
	<meta property="og:image" content="media/card.jpg" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://taskersolutions.co.nz/jbselectrical/jb2/index.html" />
	<meta property="og:description" content="JB's Electrical are professional and reliable electricians,
	servicing the Rotorua and surrounding areas. You can trust JB's for premium results." />
	
	<title>JB's Electrical</title>
	
	<!-- load google fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com"/>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans:wght@300&
	family=Roboto:wght@300;400;500;700&family=DM+Serif+Text&family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet"/>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/jpg" href="media/logo/icon.jpg"/>	
	

	<!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>

	<!-- Load Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

	<!--  -->
	<link rel="stylesheet" href="css/come-in.css"/>
	<link rel="stylesheet" href="css/nav-icon.css"/>
	<link rel="stylesheet" href="css/mobile-nav-overlay.css"/>
	<link rel="stylesheet" href="css/parallax.css"/>
	
	<!-- custom styles -->
	<link rel="stylesheet" href="css/custom-btn.css"/>
	<link rel="stylesheet" href="css/carousel.css"/>
	<link rel="stylesheet" href="css/header.css"/>
	<link rel="stylesheet" href="css/content.css"/>
	<link rel="stylesheet" href="css/footer.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<!-- custom breakpoints -->
	<link rel="stylesheet" href="css/mediaqueries.css"/>

	<style>
		.form-group { margin-bottom: 25px; }
		.contact-item {	margin-bottom: 50px; }
		label { font-size: 1.1em }
	</style>

	<!-- bootstrap scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
	
	<!-- Load htmlshiv and Respond.js for old IE versions so we can use HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->	
</head>

<body>


<?php 
$name = $email = $phone = $message = "" ;
$formValid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (empty($_POST['name'])) {
		$formValid = false;
	} else {
		$name = test_input($_POST['name']);
	}
	if (empty($_POST['email'])) {
		$formValid = false;
	} else {
		$email = test_input($_POST['email']);
	}
	if (!empty($_POST['phone'])) {
		$phone = test_input($_POST['phone']);
	}
	if (empty($_POST['message'])) {
		$formValid = false;
	} else {
		$message = test_input($_POST['message']);
	}

	$to = "harry.taskersolutions@gmail.com";

	$myMessage = 
		"Name: " . $name . "\n\n" .
		"Email: " . $email . "\n\n" . 
		"Phone: " . $phone . "\n\n" . 
		"Message: " . $message;

	$customerMessage =
		"Thank you for getting in touch. \n\n" .
		"We will get back to you as soon as possible.\n\n" .
		"Your name: " . $name . "\n\n" .
		"Your email: " . $email . "\n\n" .
		"Your phone: " . $phone . "\n\n" .
		"Your message: " . $message ;

	$headers = "From: " . $email ;
	$headers2 = "From: " . $to ;

	if ($formValid) {
		mail($to , "Message from website" , $myMessage , $headers);
		mail($email , "Thank you for your message" , $customerMessage , $headers2); // sends a copy of the message to the sender
		echo "<script>$('#confirmation-modal').modal();</script>" ;
	} else {
		echo '<script>alert("\n Your message failed to send. \n\n Please try again.");</script>';
	}

}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<!-- Confirmation modal - opens when user submits form -->
<div class="modal fade" id="confirmation-modal" style="color: black;">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
	<!-- Modal Header -->
	<div class="modal-header">
		<h4 class="modal-title mx-auto">Thank you for your message!</h4>
	</div>
	<!-- Modal body -->
	<div class="modal-body">
		A confirmation email has been send to <?php echo $email ; ?>
		<br><br>
		We will be in touch shortly to discuss your enquiry.
	</div>
	<!-- Modal footer -->
	<div class="modal-footer">
		<button class="btn btn-primary mx-auto">close</button>
	</div>
</div>
</div>
</div>


<!-- header/nav bar --> 
<div class="nav-overlay"></div>
<nav class="navbar navbar-expand-md" id="myNav">
<div class="container">
	<!-- brand -->
	<a class="navbar-brand" href="index.html">
		<img src="media/logo/logo-grey.png" alt="Logo" class="brand-image">
		<div class="flex-container-start brand-text">
			<div>JB's</div>
			<div style="font-size: 0.5em; text-transform: uppercase;">Electrical<br>Contractors</div>
		</div>
	</a>
	<!-- Toggler/collapsibe Button -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" id="navbar-toggler">
		<div class="animated-icon"><span></span><span></span><span></span></div>
	</button>
	<!-- Navbar links -->
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav mx-auto">
			<li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
			<li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
			<li class="nav-item"><a class="nav-link" href="#top">Contact</a></li>
		</ul>
	</div>
</div>
</nav>

<div id="title-carousel" class="carousel slide carousel-fade"
data-ride="carousel" data-interval="5000" style="max-height: 260px;">
	<!-- The slideshow -->
	<div class="carousel-inner">
	  	<div class="carousel-item active">
			<img src="media/background/background-3.jpg" alt="">
	 	</div>
	</div>

	<!-- brand overlay -->
	<div class="carousel-overlay">
		<img src="media/logo/logo-grey.png" alt="Logo" class="carousel-overlay-image">
		<div class="carousel-overlay-text">
			<div>JB's</div>
			<div style="font-size: 0.5em; text-transform: uppercase;">Electrical<br>Contractors</div>
		</div>
	</div>
</div>


<!-- main content -->
<div class="container">
<!-- page title -->
<h1 style="margin-top: 80px; margin-bottom: 80px;">Contact us</h1>	

<!-- bootstrap contact form -->
<div class="slide" style="margin-bottom: 80px;">
<form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="contact-form"
class="needs-validation" novalidate style="max-width: 600px; margin: auto;">
	<div class="form-group">
		<label for="name">Your name</label>
		<input type="name" class="form-control" name="name" id="name" required>
		<div class="invalid-feedback">Please fill out this field.</div>
	</div>
	<div class="form-group">
		<label for="email">Your email address</label>
		<input type="email" class="form-control" name="email" id="email" required>
		<div class="invalid-feedback">Please fill out this field.</div>
	</div>
	<div class="form-group">
		<label for="phone">Your phone number</label>
		<input type="phone" class="form-control" name="phone" id="phone" required>
		<div class="invalid-feedback">Please fill out this field.</div>
	</div>
	<div class="form-group">
		<label for="message">Your message</label>
		<textarea class="form-control" rows="6" name="message" id="message" required></textarea>
		<div class="invalid-feedback">Please fill out this field.</div>
	</div>
	<button class="btn custom-btn" type="submit" name="submit" id="submit">Send message</button>
</form>
</div>

</div>

<!-- content div -->
<div class="content-div" style="font-size: 1.2em; padding-bottom: 80px;">
<div class="container">

	<div class="contact-item">
		<span style="font-weight: bold;">Phone</span>
		<br>
		<a href="tel:+64274740205" class="link-padding">
			027 474 0205</a>
	</div>
	
	<div class="contact-item">
		<span style="font-weight: bold;">Email</span>
		<br>
		<a href="mailto:jbelectrical@xtra.co.nz" class="link-padding">
			jbelectrical@xtra.co.nz</a>
	</div>

	<div class="contact-item">
		<span style="font-weight: bold;">Fax</span>
		<br>
		07 345 6908
	</div>

	<div class="contact-item">
		<span style="font-weight: bold;">Opening Hours</span>
		<br>
		8am - 5pm Weekdays<br>
		Excluding public holidays & christmas break
	</div>

	<div class="contact-item">
		<span style="font-weight: bold;">Location</span>
		<br>
		53 Vaughan Road, Ngapuna, Rotorua 3010<br>
		Our office is usually unatended. Please call us to get in touch.
	</div>

	<iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d3137.8176149834076!2d176.2750314!3d-38.1444337!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x6d6e9c4cd4c1c27f%3A0x473f6d5b010b9718!2sJ%20B&#39;s%20Electrical%2053%20Vaughan%20Road%2C%20Ngapuna%2C%20Rotorua%203010!3m2!1d-38.1444337!2d176.2772201!5e0!3m2!1sen!2snz!4v1617757416746!5m2!1sen!2snz"
	style="border:0; width: 100%; height: 300px; max-width: 500px;" allowfullscreen="" loading="lazy"></iframe>

</div>
</div>
	




<footer>
	<div class="container">
	<div class="row">
		<div class="copyright col-sm-6">Copyright &copy; 2020 | JB's Electrical Rotorua</div>
		<div class="credit col-sm-6">Website by&nbsp;
			<a href="http://taskersolutions.co.nz/" target="_blank">Tasker Solutions</a>
		</div>
	</div>
	</div>
	</footer>
	

	
	<!-- local scripts -->
	<script src="script/parallax.js"></script>
	<script src="script/slide-modules.js"></script>
	<script src="script/nav-bar.js"></script>
	<script src="script/form-validation.js"></script>

</body>
</html>