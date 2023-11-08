<?php include_once 'header.php'; include_once 'admin/connection.php';

$sql_select_image = "select * from `photos`";
$data_image = mysqli_query($conn,$sql_select_image);

$data_count = mysqli_num_rows($data_image);

$limit = 6;
$pages_count = ceil($data_count / $limit);

if (isset($_GET['page_id']))
{
	$page_no = $_GET['page_id'];
}
else
{
	$page_no = 1;
}

$start = ($page_no-1)*$limit;


$sql_select_data = "select * from `photos` where `ID` limit $start,$limit";
$data_select = mysqli_query($conn,$sql_select_data);

$previous = $page_no - 1;
$next = $page_no + 1;

?>

				<section class="page-heading wow fadeIn" data-wow-duration="1.5s" style="background-image: url(files/images/01-heading.jpg)">
					<div class="container">
						<div class="page-name">
							<h1>Latest Photos</h1>
							<span>Lovely layout of heading</span>
						</div>
					</div>
				</section>

				<section class="portfolio on-portfolio">
					<div class="container">
						<div class="col-sm-12 text-center">
							<div id="projects-filter">
								<a href="#" data-filter="*" class="active">Show All</a>
								<a href="#" data-filter=".furniture">Furniture on this page</a>
								<a href="#" data-filter=".wallpaper">Wallpaper on this page</a>
								<a href="#" data-filter=".nature">Nature on this page</a>
								<a href="#" data-filter=".branding">Branding on this page</a>
							</div>
						</div>
						<div class="row">
							<div class="row" id="portfolio-grid">

							<?php while ($row = mysqli_fetch_assoc($data_select)) { ?>			
								<div class="item col-md-4 col-sm-6 col-xs-12 <?php echo $row['Type']; ?>">
							  		<figure>
			        					<img alt="1-image" src="admin/image/<?php echo $row['Image']; ?>">
			        					<figcaption>
			            					<h3><?php echo $row['Title']; ?></h3>
			            					<p><?php echo $row['Details']; ?></p>
			        					</figcaption>
			    					</figure>	
							    </div>
							<?php } ?>

							</div>
						</div>
						<div class="col-md-12">
							<div class="portfolio-page-nav text-center">
								<ul>
								<?php if ($page_no > 1) { ?>
									<li><a href="work-3columns.php?page_id=<?php echo $previous ?>"><i class="fa fa-angle-double-left"></i></a></li>
								<?php } ?>
									

								<?php for ($i=1; $i<=$pages_count; $i++) { ?>
									<li><a href="work-3columns.php?page_id=<?php echo $i; ?>" class="current"><?php echo $i ?></a></li>
								<?php } ?>
									
						
								<?php if ($page_no < $pages_count) { ?>
									<li><a href="work-3columns.php?page_id=<?php echo $next ?>"><i class="fa fa-angle-double-right"></i></a></li>
								<?php } ?>								
								</ul>
							</div>
						</div>
					</div>
				</section>
 
<?php include_once 'footer.php'; ?>

<?php include_once 'scripts.php'; ?>