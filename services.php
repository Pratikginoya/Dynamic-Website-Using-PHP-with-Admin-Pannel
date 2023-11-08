<?php include_once 'header.php'; include_once 'admin/connection.php';

$sql_select_services = "select * from `services`";
$data_services = mysqli_query($conn,$sql_select_services);

?>

				<section class="page-heading wow fadeIn" data-wow-duration="1.5s" style="background-image: url(files/images/01-heading.jpg)">
					<div class="container">
						<div class="page-name">
							<h1>Our Services</h1>
							<span>Lovely layout of heading</span>
						</div>
					</div>
				</section>

				<section class="services on-services green">
					<div class="container">
					<div class="row">
						<div class="section-heading">
							<h2>What We Offer</h2>
							<div class="section-dec"></div>
						</div>

					<?php while ($row = mysqli_fetch_assoc($data_services)) { ?>
						<div class="service-item col-md-4">
							<span><i class="fa fa-support"></i></span>
							<div class="tittle"><h3><?php echo $row['Title']; ?></h3></div>
							<p><?php echo $row['Details']; ?></p>
						</div>
					<?php } ?>

					</div>
					</div>
				</section>

				<section class="call-to-action-2">
					<div class="container">
					<div class="left-text hidden-xs">
						<h4>Know Us Better, Read This</h4>
						<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ut explicabo magni sapiente.</em><br><br>Inventore at quia, vel in repellendus, cumque dolorem autem ad quidem mollitia porro blanditiis atque rerum debitis eveniet nostrum aliquam. Sint aperiam expedita sapiente amet officia quis perspiciatis adipisci, iure dolorem esse exercitationem!</p>
					</div>
						<div class="right-image hidden-xs"></div>
					</div>
				</section>

<?php include_once 'footer.php'; ?>

<?php include_once 'scripts.php'; ?>