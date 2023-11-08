<?php include_once 'header.php'; include_once 'admin/connection.php';

if(isset($_GET['r_id']))
{
	$read_more_id = $_GET['r_id'];
}
else
{
	$sql_select_blog = "select * from `Blog`";
	$data_blog = mysqli_query($conn,$sql_select_blog);

	$row = mysqli_fetch_assoc($data_blog);

	$read_more_id = $row['ID'];
}

$sql_select_read = "select * from `blog` where `ID`='$read_more_id'";
$data_read = mysqli_query($conn,$sql_select_read);

// Comment Submit Section
if (isset($_POST['submit_comment']))
{
	$name = $_POST['name'];
	$userid = $read_more_id;
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$sql_insert = "insert into `blog_comment` (`UserID`,`Name`,`Email`,`Subject`,`Message`) values ('$userid','$name','$email','$subject','$message')";
	mysqli_query($conn,$sql_insert);
}


// Comment Delete Section
if (isset($_GET['d_id']))
{
	$d_id = $_GET['d_id'];

	$sql_delete = "delete from `blog_comment` where `ID`='$d_id'";
	mysqli_query($conn,$sql_delete);
}

$sql_select_comment = "select * from `blog_comment` where `UserID`='$read_more_id'";
$data_comment = mysqli_query($conn,$sql_select_comment);

?>


				<section class="page-heading wow fadeIn" data-wow-duration="1.5s" style="background-image: url(files/images/01-heading.jpg)">
					<div class="container">
						<div class="page-name">
							<h1>Single Post</h1>
							<span>Lovely layout of heading</span>
						</div>
					</div>
				</section>
				
				<section class="blog-single">
					<div class="container">
						<div class="row">
							<div class="col-md-8">


							<?php

							while ($row = mysqli_fetch_assoc($data_read)) { ?>
								<div class="blog-single-item">
									<img src="admin/image/<?php echo $row['Image']; ?>" alt="">
									<div class="blog-single-content">	
										<h3><a href="#"><?php echo $row['Title']; ?></a></h3>
										
										<p><?php echo $row['Short_Details']; ?></p>
										<p><?php echo $row['Full_Details']; ?></p>
										<div class="share-post">
											<span>Share on: <a href="#">facebook</a>, <a href="#">twitter</a>, <a href="#">linkedin</a>, <a href="#">instagram</a></span>
										</div>
									</div>

								<?php 
								$sql_pre = "select * from `blog` where `ID`<$read_more_id order by `ID` desc";
								$data_pre = mysqli_query($conn,$sql_pre);
								if ($row = mysqli_fetch_assoc($data_pre)) { ?>
									<div class="prev-btn col-md-6 col-sm-6 col-xs-6">
										<a href="blog-single.php?r_id=<?php echo $row['ID']; ?>"><i class="fa fa-angle-left"></i>Previous</a>
									</div>
								<?php } ?> 

								<?php 
								$sql_pre = "select * from `blog` where `ID`>$read_more_id order by `ID` asc";
								$data_pre = mysqli_query($conn,$sql_pre);
								if ($row = mysqli_fetch_assoc($data_pre)) { ?>
									<div class="next-btn col-md-6 col-sm-6 col-xs-6">
										<a href="blog-single.php?r_id=<?php echo $row['ID']; ?>">Next<i class="fa fa-angle-right"></i></a>
									</div>
								<?php } ?>


							<?php } ?>

							</div>

								<div class="blog-comments">
									<h2> All Comments of this blog</h2>
									<ul class="coments-content">

									<?php while ($row_c = mysqli_fetch_assoc($data_comment)) { ?>
										<li class="first-comment-item">
											<img src="files/images/01_comment.jpg" alt="">
											<span class="author-title"><a href="#"><?php echo $row_c['Name']; ?></a></span>
											<span class="comment-date"><a href="blog-single.php?r_id=<?php echo $read_more_id; ?>&d_id=<?php echo $row_c['ID']; ?>">Delete</a></span>
											<p><?php echo $row_c['Message']; ?></p>
										</li>
									<?php } ?>

									</ul>
								</div>
								<div class="submit-comment col-sm-12">
									<h2>Leave A Comment</h2>
									<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
										<div class=" col-md-4 col-sm-4 col-xs-6">
											<input type="text" class="blog-search-field" name="name" placeholder="Your name..." value="" required>
										</div>
										<div class="col-md-4 col-sm-4 col-xs-6">
											<input type="email" class="blog-search-field" name="email" placeholder="Your email..." value="" required>
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<input type="text" class="subject" name="subject" placeholder="Subject..." value="" required>
										</div>
										<div class="col-md-12 col-sm-12">
											<textarea id="message" class="input" name="message" placeholder="Comment..." maxlength="200" required></textarea>
										</div>
										<div class="submit-coment col-md-12">
											<div class="btn-black">
												<input class="btn-black a" class="submit-coment col-md-12" type="submit" name="submit_comment" value="Submit now">
												<!-- <a href="blog-single.php" name="submit_comment">Submit now</a> -->
											</div>
										</div>
									</form>		
								</div>
							</div>
							<div class="col-md-4">
								<div class="widget-item">
									<h2>About Us</h2>
									<div class="dec-line">	
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique earum quod iste, natus quaerat facere a rem dolor sit amet, et placeat nemo.</p>
									<div class="social-icons">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li><a href="#"><i class="fa fa-rss"></i></a></li>
										</ul>
									</div>
								</div>
								<!-- <div class="widget-item">
									<h2>Recent Posts</h2>
									<div class="dec-line"></div>
									<ul class="recent-item">
										<li class="recent-post-item">
											<a href="#">
												<img src="files/images/01-recentpost.jpg" alt="">
												<span class="post-title">Jhony Sebastian</span>
											</a>
											<span class="post-info">10 June 2015</span>
										</li>
										<li class="recent-post-item">
											<a href="#">
												<img src="files/images/02-recentpost.jpg" alt="">
												<span class="post-title">Ramshad Padinjarayil</span>
											</a>
											<span class="post-info">9 June 2015</span>
										</li>
										<li class="recent-post-item">
											<a href="#">
												<img src="files/images/03-recentpost.jpg" alt="">
												<span class="post-title">Akil Raj</span>
											</a>
											<span class="post-info">7 June 2015</span>
										</li>
									</ul>
								</div>
								<div class="widget-item">
									<h2>From Flickr</h2>
									<div class="dec-line"></div>
									<div class="flickr-feed">
							        	<ul class="flickr-images">
							        	</ul>
							        </div>
								</div> -->
							</div>
						</div>
					</div>	
				</section>

<?php include_once 'footer.php'; ?>

<?php include_once 'scripts.php'; ?>