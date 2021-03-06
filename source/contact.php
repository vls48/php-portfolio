<?php include 'includes/header.php';?>
<body>

	<div class="wrapper">
			<div class="row wrap-flex">
				<div class="col-6 contact-input">
					<h1>Contact me</h1>
						<form>
							<p> 
								<input class="forms" id="uname" name="uname" type="text" placeholder=" Name" required>
							</p>

							<p>
								<input class="forms" id="email" name="email" type="text" placeholder=" Email" required>
							</p>

							<p>
								<input class="forms" id="subject" name="subject" type="text" placeholder=" Subject" required>
							</p>

							<p>
								<input id="message" name="message" type="text" placeholder=" Enter your message here" required>
							</p>

							<p>
								<input id="send" type="submit">
							</p>
						</form>
				</div>

				<div class="col4-con contact-info">
					<h1>Victoria Stewart</h1>

					<ul>
						<li>Phone</li>
						<li class="lato">717.437.7139</li>
						<li>Email</li>
						<li class="lato">vls48@drexel.edu</li>
					</ul>
				</div>

				<div class="social">
					<div class="socialmedia">
						<a href="https://victoriastewart48.tumblr.com" target="tumblr">
							<img src="images/contact/facebook.png" alt="tumblr logo">
						</a>

						<a href="https://www.linkedin.com/in/victoria-stewart-152399109" target="linkedin">
							<img src="images/contact/linkedin.png" alt="linkedin logo">
						</a>

						<a href="https://www.facebook.com/tori.stewart.9" target="facebook">
							<img src="images/contact/tumblr.png" alt="facebook logo">
						</a>
					</div>
				</div>
			</div>

			<?php include 'includes/nav.php';?>
		
	</div>
			<?php include 'includes/footer.php';?>