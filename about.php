<?php include_once 'header.php'; include_once 'admin/connection.php';

$sql_select_thought = "select * from `about`";
$data_thought = mysqli_query($conn,$sql_select_thought);

$sql_select_client = "select * from `client`";
$data_client = mysqli_query($conn,$sql_select_client);

?>

				<section class="page-heading wow fadeIn" data-wow-duration="1.5s" style="background-image: url(files/images/01-heading.jpg)">
					<div class="container">
						<div class="page-name">
							<h1>About Us</h1>
							<span>Lovely layout of heading</span>
						</div>
					</div>
				</section>

				<section class="call-to-action-1">
					<div class="container">
						<h4>Why people are Using Yom Template</h4>
						<p class="col-md-10 col-md-offset-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quod voluptate consequuntur ad quasi, dolores obcaecati ex aliquid, dolor provident accusamus omnis dolorum ipsam. Voluptatem ipsum expedita, corporis facilis laborum asperiores nostrum! Amet porro numquam ratione temporibus quia dolorem sint lorem voluptates quasi mollitia.</p>
						<div class="buttons">
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="border-btn"><a href="#">Learn More</a></div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="btn-black"><a href="contact.php">Buy This Theme</a></div>
							</div>
						</div>
					</div>	
				</section>

				<section class="testimonials">
					<div class="container">
						<div class="section-heading">
							<h2>What They Say</h2>
							<div class="section-dec"></div>
						</div>
						

						
						<div class="row">
							<div class="col-md-12">
								<div id="owl-demo" class="owl-carousel owl-theme">
						<?php while ($row = mysqli_fetch_assoc($data_thought)) { ?>
									<div class="item">
								  		<div class="testimonials-post">
								  			<span class="fa fa-quote-left"></span>
								  			<p> <?php echo $row['Thought']; ?></p>
								  			<h6><?php echo $row['Name']; ?> <em> <?php echo $row['City']; ?></em></h6>
								  		</div>
								    </div>
						<?php } ?>
								</div>
							</div>
						</div>	
					</div>
				</section>
				
				<section class="clients">
					<div class="container">
						<div class="section-heading">
							<h2>Our Clients</h2>
							<div class="section-dec"></div>
						</div>

					<?php while ($row = mysqli_fetch_assoc($data_client)) { ?>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<div class="client-item">
								<img src="admin/image/<?php echo $row['Image']; ?>" alt="client_logo">
							</div>
						</div>
					<?php } ?>

					</div>
				</section>

<?php include_once 'footer.php'; ?>

<?php include_once 'scripts.php'; ?>