<?php include_once 'header.php'; include_once 'admin/connection.php';

if (isset($_POST['submit_contact']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$sql_insert = "insert into `contact` (`Name`,`Email`,`Subject`,`Message`) values ('$name','$email','$subject','$message')";
	mysqli_query($conn,$sql_insert);
	
}



?>

				<section class="page-heading wow fadeIn" data-wow-duration="1.5s" style="background-image: url(files/images/01-heading.jpg)">
					<div class="container">
						<div class="page-name">
							<h1>Contact Us</h1>
							<span>Lovely layout of heading</span>
						</div>
					</div>
				</section>	

				<section class="page-heading wow fadeIn">
				</section>

				<section class="contact-us">
					<div class="container">
						<div class="section-heading">
							<h2>Send Us A Message</h2>
							<div class="section-dec"></div>
						</div>
						<div class="send-message col-sm-12">
							<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
								<div class=" col-md-4 col-sm-4 col-xs-6">
									<input type="text" class="blog-search-field" name="name" placeholder="Your name..." value="" maxlength="15" required>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-6">
									<input type="text" class="blog-search-field" name="email" placeholder="Your email..." value="" maxlength="20" required>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<input type="text" class="subject" name="subject" placeholder="Subject..." value="" maxlength="30" required>
								</div>
								<div class="col-md-12 col-sm-12">
									<textarea id="message" class="input" name="message" placeholder="Message..." maxlength="300" required></textarea>
								</div>
								<div class="submit-coment col-md-12">
									<div class="btn-black">
										<input type="submit" name="submit_contact" value="SEND NOW">
										<!-- <a href="#">Send now</a> -->
									</div>
								</div>
							</form>		
						</div>
					</div>
				</section>

				<section class="contact-map-wrapper">
					<div class="container">
						<div class="section-heading">
							<h2>Find Us On Map</h2>
							<div class="section-dec"></div>
						</div>
						<div class="row">
							<iframe style="margin-left: 250px; border: none; " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.4066239716158!2d72.88551247500507!3d21.21571838133149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f7084d49f51%3A0x2cdbfdfbb93f2c07!2sCreative%20Design%20and%20Multimedia%20Institute!5e0!3m2!1sen!2sin!4v1692442735476!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							<div class="col-sm-12">
							</div>
						</div>
					</div>
				</section>

<?php include_once 'footer.php'; ?>

<?php include_once 'scripts.php'; ?>