<?php
include 'utils/database.php';
$errcheck;
$message;
$nameholder = "Full Name";
$mailholder = "Email ID";
if(isset($_POST['submitquery']))
{
	echo 'Success';
	if(isset($_POST['uname']) && isset($_POST['umail']))
	{
		$db = new mainDB();
		$db->connect();
		$errcheck = $db->contactus();
		if($errcheck == 0)
		{
			$message = "Thank you for submitting query. We'll be returning back to you shortly.";
			echo '<head><script> alert($message); </script></head>';
		}
		else if($errcheck == -1)
		{
			$message = "Sorry, some error has occurred at our end. We regret any inconvenience caused.";
			echo '<head><script> alert($message); </script></head>';
		}
	}
	else
	{
		if(!isset($_POST['uname']))
		{
			$nameholder = "Please Enter the name.";
		}
		else if(!isset($_POST['umail']))
		{
			$mailholder = "Please Enter the mail.";
		}
		else if(!isset($_POST['uname']) || !isset($_POST['umail']))
		{
			$nameholder = "Please Enter the name.";
			$mailholder = "Please Enter the mail.";
		}
	}
}
?>

<!DOCTYPE HTML>
<html lang="en" class="no-js">
	
<head>
		<title>Contact - PROSPECT</title>
		<!--Start meta info-->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta charset="utf-8">
		<meta name="author" content="">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<!--[if IE]><meta http-equiv="X-UA-Compitible" content="IE=edge,chrome=1"><![endif]-->
		<!--End meta info-->
		<!--Start stylesheet include-->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css" id="style">
		<link rel="stylesheet" type="text/css" href="css/styleswitcher.css">
		
		<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
		<!--End stylesheet include-->
		<!--Start scripts include-->
		<script type="text/javascript" src="js/modernizr.js"></script>
		<!--End scripts include-->
		
<style>
::-webkit-input-placeholder {
   color: #C2E8E7;
}

:-moz-placeholder { /* Firefox 18- */
   color: #C2E8E7;  
}

::-moz-placeholder {  /* Firefox 19+ */
   color: #C2E8E7;  
}

:-ms-input-placeholder {  
   color: #C2E8E7;  
}

</style>		
	</head>
	<body>
		<!--Start preloader-->
			<div id="preloader">
				<img src="images/loader-big.gif" alt="">
			</div>
		<!--End preloader-->
		<!--Start header-->
		<?php
			include 'utils-ui/navbar.php';
		?>
		<!--End header-->
		<!--Start main section-->
		<section class="main secondary_page contact" data-animate-up="header-static" data-animate-down="header-small">
			<!--Start title container-->
			<div class="title_container type_2 t_align_center">
				<div class="container">
					<ul class="path_list clearfix">
						<li>Home &nbsp; <span>&#8260;</span></li>
					</ul>
					<h1>Contact</h1>
				</div>
			</div>
			<!--End title container-->
			<div class="gmap_container">
				<div id="gmap"></div>
				<div class="cd_container">
					<div class="cd_shadow"></div>
					<div id="company_description" class="hex_elem_rounded_type_2">
						<span>
							<img src="images/contact_logo.png" alt="">
							<img src="images/contact_logo_02.png" alt="">
							<h5>2046 Blue Spruce Lane 20707</h5>
							<span>410-390-3923<br>info@prospect.net</span>
						</span>
						<span class="h_el_01"></span>
						<span class="h_el_02"></span>
					</div>
				</div>
			</div>
			<div class="flip_container">
				<!--Start contact hexagons-->
				<section class="contact_hexagons">
					<div class="container o_hide clearfix">
						<!--Start contact info hexagon-->
						<div class="hex_elem_rounded_type_2 contact_info f_left">
							<div>
								<div class="hex_elem_rounded_type_2 c_icon_m">
									<span class="h_el_01"></span>
									<span class="h_el_02"></span>
									<span class="ic"></span>
								</div>
								<h5>Main Branch</h5>
								<p>2046 Blue Spruce Lane 20707<br> Some City<br> Some Country 6000</p>
							</div>
							<span class="h_el_01"></span>
							<span class="h_el_02"></span>
						</div>
						<!--End contact info hexagon-->
						<!--Start button for open contact form-->
						<div class="hex_elem_rounded_type_2 open_contact_form f_left">
							<div class="sm_button">
								<h5>Send Message</h5>
							</div>
							<div class="hex_elem_rounded_type_2 icon">
								<img src="images/icons_type_03_mail.png" alt="">
								<span class="h_el_01"></span>
								<span class="h_el_02"></span>
							</div>
							<span class="h_el_01"></span>
							<span class="h_el_02"></span>
						</div>
						<!--End button for open contact form-->
						<!--Start contact info hexagon-->
						<div class="hex_elem_rounded_type_2 contact_info f_left">
							<div>
								<div class="hex_elem_rounded_type_2 c_icon_h">
									<span class="h_el_01"></span>
									<span class="h_el_02"></span>
									<span class="ic"></span>
								</div>
								<h5>Contact Details</h5>
								<ul>
									<li>Phone: +123 3213 432</li>
									<li>Fax: +4332 434235 5453</li>
									<li>Email: info@site.com</li>
								</ul>
							</div>
							<span class="h_el_01"></span>
							<span class="h_el_02"></span>
						</div>
						<!--End contact info hexagon-->
					</div>
				</section>
				<!--End contact hexagons-->
				<!--Start contact form section-->
				<section class="contact_form_section">
					<div class="container relative">
						<form id="contact_form" action="index.php" method="post">
							<img src="images/icons_type_03_mail.png" alt="">
							<input type="text" placeholder="<?php echo $nameholder ?>" name="uname" style="width:45%; background-color:#3EB5B1;border-bottom:1px solid #99D3CE;font-size:23px;color:#B7E3E2;" />
							<input type="text" placeholder="<?php echo $mailholder ?>" name="umail" style="width:45%; background-color:#3EB5B1;border-bottom:1px solid #99D3CE;font-size:23px;color:#B7E3E2;float:right;" />
							<textarea name="message">Ask a question</textarea>
							<button type="submit" name="submitquery">
								<span>Send <br> Message</span>
								<span class="hex_elem_rounded_type_2">
									<span class="h_el_01"></span>
									<span class="h_el_02"></span>
								</span>
							</button>
						</form>
						<button class="close_form">&#215;</button>
					</div>
				</section>
				<!--End contact form section-->
			</div>
		</section>
		<!--End main section-->
		<!--Start footer-->
		<footer class="footer parallax">
			<div class="footer_cornice">
				<div class="container">
					<div class="relative">
						<div class="skew_elem_01"></div>
						<div class="skew_elem_02"></div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row footer_inner">
					<div class="span3 offset2_5 t_align_right">
						<figure>
							<figcaption>
								<h5>Prospect Design</h5>
							</figcaption>
							<p><span class="white">Prospect</span> eleifend risus, quis sodalep quam. Mauris vestibulum consequat libero ac pellentesque. Nulla tortor massa, lacinia nec vehicula ut, faucibus rutrum tortor.Mauris vestibulum.</p>
						</figure>
						<hr class="divider_type_01">
						<figure class="latest_posts">
							<figcaption>
								<h5>Latest Posts</h5>
							</figcaption>
							<article>
								<img src="images/home_img_10.jpg" alt="">
								<a href="#">Maecenas suscipit varius tortor</a>
								<span class="date">Mar 3rd, 2014</span>
							</article>
							<hr>
							<article>
								<img src="images/home_img_11.jpg" alt="">
								<a href="#">Aenean eu consequat</a>
								<span class="date">Oct 14th, 2014</span>
							</article>
						</figure>
					</div>
					<div class="span1 t_align_center">
						<div class="footer_logo_container">
							<img src="images/footer_logo.png" alt="">
						</div>
						<ul class="social_icons_type_01">
							<li>
								<a href="#">
									<div class="default"><i class="icon-twitter"></i></div>
									<div class="active">
										<div class="clean_cornice"><span></span><span></span><span></span></div>
										<div class="clean_cornice_2"></div>
										<i class="icon-twitter"></i>
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="default"><i class="icon-facebook"></i></div>
									<div class="active">
										<div class="clean_cornice"><span></span><span></span><span></span></div>
										<div class="clean_cornice_2"></div>
										<i class="icon-facebook"></i>
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="default"><i class="icon-instagram"></i></div>
									<div class="active">
										<div class="clean_cornice"><span></span><span></span><span></span></div>
										<div class="clean_cornice_2"></div>
										<i class="icon-instagram"></i>
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="default"><i class="icon-google-plus"></i></div>
									<div class="active">
										<div class="clean_cornice"><span></span><span></span><span></span></div>
										<div class="clean_cornice_2"></div>
										<i class="icon-google-plus"></i>
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="default"><i class="icon-skype"></i></div>
									<div class="active">
										<div class="clean_cornice"><span></span><span></span><span></span></div>
										<div class="clean_cornice_2"></div>
										<i class="icon-skype"></i>
									</div>
								</a>
							</li>
						</ul>
					</div>
					<div class="span3">
						<figure>
							<figcaption>
								<h5>Contact Info</h5>
							</figcaption>
							<ul class="address_list">
								<li class="address">2046 Blue Spruce Lane 20707</li>
								<li class="phone">410-390-3923</li>
								<li class="mail"><a href="mailto:#">info@prospect.net</a></li>
								<li class="web"><a href="#">www.prospect.net</a></li>
							</ul>
						</figure>
						<hr class="divider_type_01">
						<figure>
							<figcaption>
								<h5>Latest Projects</h5>
							</figcaption>
							<ul class="latest_projects clearfix">
								<li><a href="#"><img src="images/home_img_12.jpg" alt=""></a></li>
								<li><a href="#"><img src="images/home_img_13.jpg" alt=""></a></li>
								<li><a href="#"><img src="images/home_img_14.jpg" alt=""></a></li>
								<li><a href="#"><img src="images/home_img_15.jpg" alt=""></a></li>
								<li><a href="#"><img src="images/home_img_16.jpg" alt=""></a></li>
								<li><a href="#"><img src="images/home_img_17.jpg" alt=""></a></li>
							</ul>
						</figure>
					</div>
				</div>
			</div>
			<div class="copyright_container t_align_center">
				<div class="container">
					Prospect &copy; Copyright 2014, All Rights Reserved
				</div>
			</div>
			<a class="scrolltop color_hexagon">
				<span></span>
				<span></span>
				<span></span>
			</a>
		</footer>
		<!--End footer-->
		<!--Start scripts include-->
		<script>window.jQuery || document.write('<script src="js/jquery-1.8.1.min.js">\x3C/script>')</script>
		<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script type="text/javascript" src="js/parallax.js"></script>
		<script type="text/javascript" src="js/retina.js"></script>
		<script type="text/javascript" src="js/smoothscroll.js"></script>
		<script type="text/javascript" src="js/jquery.easing-1.3.min.js"></script>
		
		<script type="text/javascript" src="js/styleswitcher.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
		<!--End scripts include-->
	</body>

</html>

<?php
unset($nameholder, $mailholder, $errcheck)
?>