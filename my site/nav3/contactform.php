<html>
<head>
	<title>Contact</title>
	<link type="text/css" rel="stylesheet" href="contactform/contactform.css">
	<script src="contactform/contact.js" type="text/javascript"></script>
</head>

<body >
        <?php include 'nav.php' ?>;
        
		<h1> Contact With Us</h1><br>
		<h2>We do appreciate your feedback</h2><br>
		<h3>We will be glad to hear from you if:<br>
		- You have found a mistake in our phone specifications.<br>
		- You have info about a phone which we don't have in our database.<br>
		- You have found a broken link.<br>
		- You have a suggestion for improving our website or you want to request a feature.<br><br>
		Before sending us an email, please keep in mind:<br>
		- We do not sell mobile phones.<br>
		- We do not know the price of any mobile phone in your country.<br>
		- We don't answer any "unlocking" related questions.<br>
		- We don't answer any "Which mobile should I buy?" questions</h3><br><br>
<div class="contact1">
	
	<div class="container-contact1">'
			<div>
					<img src="logo.jpg" alt="ACM">
			</div>

	<form onsubmit = "return validation()">
		<div class="contact-title">
			<span class="">Contact Us</span>
		</div>
    	<div class="wrap-input1">
			<input class="input1" type="text" placeholder="Name" id="name" >
    	</div>
		<div class="wrap-input1">
			<input class="input1" type="text" placeholder="Email" id="email" >
		</div>
		<div class="wrap-input1">
			<input class="input1" type ='text'  placeholder="Subject" id="subject">
		</div>
		<div class="wrap-input1">
			<textarea class="input1" id="message" placeholder="Message" ></textarea>
		</div>
		<div align="center" class="wrap-input1">
			<input class="contact-button" type="submit" id="submit">
		</div>
		
		</form>
	</div>
</div>
</body>
<script src="contact.js" type="text/javascript"></script>
</html>