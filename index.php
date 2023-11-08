<?php include_once 'admin/connection.php'; include_once 'header.php';

// For Slider
$sql_select_slider = "select * from `slider`";
$data_slider = mysqli_query($conn,$sql_select_slider);

// For Services
$sql_select_services = "select * from `services`";
$data_services = mysqli_query($conn,$sql_select_services);

// For Blog
$sql_select_blog = "select * from `blog`";
$data_blog = mysqli_query($conn,$sql_select_blog);

// For What Others Saying
$sql_select_thought = "select * from `about`";
$data_thought = mysqli_query($conn,$sql_select_thought);

// Latest Photos
$sql_select_image = "select * from `photos`";
$data_image = mysqli_query($conn,$sql_select_image);

$count=0; 

?>

				<div class="slider">
					<div class="fullwidthbanner-container">
						<div class="fullwidthbanner">
							<ul>
						<?php while ($row_slider = mysqli_fetch_assoc($data_slider)) {  ?>
								<li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
									<img src="admin/image/<?php echo $row_slider['Image']; ?>" data-fullwidthcentering="on" alt="slide">
									<div class="tp-caption first-line lft tp-resizeme start" data-x="center" data-hoffset="0" data-y="250" data-speed="1000" data-start="200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><?php echo $row_slider['Title']; ?></div>
									<div class="tp-caption second-line lfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="340" data-speed="1000" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><?php echo $row_slider['Details']; ?></div>
									<div class="tp-caption slider-btn sfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="510" data-speed="1000" data-start="2200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><a href="#" class="btn btn-slider">Discover More</a></div>
								</li>
						<?php } ?>
							</ul>
						</div>
					</div>
				</div>
				
				

				<section class="services green">
					<div class="container">
						<div class="section-heading">
							<h2>What We Offer</h2>
							<div class="section-dec"></div>
						</div>
						<a href="services.php" title="View All Services">
						<?php while ($row_services = mysqli_fetch_assoc($data_services)) { ?>
							<div class="service-item col-md-4">
								<span><i class="fa fa-support"></i></span>
								<div class="tittle"><h3><?php echo $row_services['Title']; ?></h3></div>
								<p><?php echo $row_services['Details']; ?></p>
							</div>
						<?php $count++; if($count==3){$count=0; break;} } ?>
						</a>
					</div>

					<div class="container">
						<div class="view_more_service">
							<a href="services.php" title="View All Services"><span>VIEW MORE SERVICES</span></a>
						</div>
					</div>
				</section>
				
				
				<section class="call-to-action-1">
					<div class="container">
						<h4>Over 3000 people already downloaded YOM</h4>
						<p class="col-md-10 col-md-offset-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quod voluptate consequuntur ad quasi, dolores obcaecati ex aliquid, dolor provident accusamus omnis dolorum ipsam. Voluptatem ipsum expedita, corporis facilis laborum asperiores nostrum! Amet porro numquam ratione temporibus quia dolorem sint lorem voluptates quasi mollitia.</p>
						<div class="buttons">
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="border-btn"><a href="contact.php">Learn More</a></div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="btn-black"><a href="contact.php">Buy This Theme</a></div>
							</div>
						</div>
					</div>	
				</section>
				

				<section class="call-to-action-2">
					<div class="container">
					<div class="left-text hidden-xs">
						<h4>To know about this theme read this</h4>
						<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ut explicabo magni sapiente.</em><br><br>Inventore at quia, vel in repellendus, cumque dolorem autem ad quidem mollitia porro blanditiis atque rerum debitis eveniet nostrum aliquam. Sint aperiam expedita sapiente amet officia quis perspiciatis adipisci, iure dolorem esse exercitationem!</p>
					</div>
						<div class="right-image hidden-xs"></div>
					</div>
				</section>

				<section class="portfolio">
					<div class="container">
						<div class="section-heading-white">
							<h2>Recent Photos</h2>
							<div class="section-dec"></div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div id="owl-portfolio" class="owl-carousel owl-theme">

								<?php while ($row = mysqli_fetch_assoc($data_image)) { ?>	
									<div class="item">
								  		<figure>
				        					<img alt="portfolio" src="admin/image/<?php echo $row['Image']; ?>">
				        					<figcaption>
				            					<h3><?php echo $row['Title']; ?></h3>
				            					<p><?php echo $row['Details']; ?></p>
				        					</figcaption>
				    					</figure>								    
				    				</div>
				    			<?php } ?>
								  
								</div>
							</div>
						</div>
						<div class="owl-navigation">
						  <a class="btn prev fa fa-angle-left"></a>
						  <a class="btn next fa fa-angle-right"></a>
						  <a href="work-3columns.php" class="go-to">Go to portfolio</a>
						</div>
					</div>
				</section>

				<section class="testimonials">
					<div class="container">
						<div class="section-heading">
							<h2 style="color:white;">What Others saying</h2>
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

				<section class="blog-posts">
					<div class="container">
						<div class="section-heading">
							<h2>Latest Posts</h2>
							<div class="section-dec"></div>
						</div>

					<?php while ($row = mysqli_fetch_assoc($data_blog)) { ?>
						<div class="blog-item">
							<div class="col-md-4">
								<a href="blog-single.php?r_id=<?php echo $row['ID']; ?>"><img src="admin/image/<?php echo $row['Image']; ?>" alt=""></a>
								<h3><a href="blog-single.php?r_id=<?php echo $row['ID']; ?>"><?php echo $row['Title']; ?></a></h3>
								
								<p><?php echo $row['Short_Details']; ?></p>
								<div class="read-more">
									<a href="blog-single.php?r_id=<?php echo $row['ID']; ?>">Read more</a>
								</div>
							</div>
						</div>
					<?php } ?>
					</div>

					
				</section>
<?php include_once 'footer.php'; ?>

<?php include_once 'scripts.php'; ?>