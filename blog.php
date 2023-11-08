<?php include_once 'header.php'; include_once 'admin/connection.php';

$sql_select_blog = "select * from `blog`";
$data_blog = mysqli_query($conn,$sql_select_blog);

$data_count = mysqli_num_rows($data_blog);

$limit = 3;
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


$sql_select_data = "select * from `blog` where `ID` limit $start,$limit";
$data_select = mysqli_query($conn,$sql_select_data);

$previous = $page_no - 1;
$next = $page_no + 1;


?>



				<section class="page-heading wow fadeIn" data-wow-duration="1.5s" style="background-image: url(files/images/01-heading.jpg)">
					<div class="container">
						<div class="page-name">
							<h1>Our Blog</h1>
							<span>Lovely layout of heading</span>
						</div>
					</div>
				</section>
				
				<section class="on-blog-grid">
					<div class="container">
						<div class="row">

					<?php while ($row = mysqli_fetch_assoc($data_select)) { ?>
							<div class="col-md-4">
								<div class="blog-item">
									<a href="blog-single.php?r_id=<?php echo $row['ID']; ?>"><img src="admin/image/<?php echo $row['Image']; ?>" alt=""></a>
									<h3><a href="blog-single.php?r_id=<?php echo $row['ID']; ?>"><?php echo $row['Title']; ?></a></h3>

									<p><?php echo $row['Short_Details']; ?></p>
									<div class="read-more">
										<a href="blog-single.php?r_id=<?php echo $row['ID']; ?>">Read more</a>
									</div>
								</div>
							</div>
					<?php } ?>
							<!-- <div class="col-md-12">
								<div class="blog-page-nav text-center">
									<ul>
										<li><a href="#" class="current">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
									</ul>
								</div>
							</div> -->
						</div>
					</div>

						<div class="col-md-12">
							<div class="portfolio-page-nav text-center">
								<ul>
								<?php if ($page_no > 1) { ?>
									<li><a href="blog.php?page_id=<?php echo $previous ?>"><i class="fa fa-angle-double-left"></i></a></li>
								<?php } ?>
									

								<?php for ($i=1; $i<=$pages_count; $i++) { ?>
									<li><a href="blog.php?page_id=<?php echo $i; ?>" class="current
										<?php 
										if(isset($_GET['page_id']))
										{
											if($_GET['page_id']==$i)
											{
												echo "active";
											}
											else
											{
												echo "";
											}
										}
										else
										{
											if($i==1)
											{
												echo "active";
											}
										} ?> "><?php echo $i ?></a></li>
								<?php } ?>
									
						
								<?php if ($page_no < $pages_count) { ?>
									<li><a href="blog.php?page_id=<?php echo $next ?>"><i class="fa fa-angle-double-right"></i></a></li>
								<?php } ?>								
								</ul>
							</div>
						</div>	
				</section>

<?php include_once 'footer.php'; ?>

<?php include_once 'scripts.php'; ?>