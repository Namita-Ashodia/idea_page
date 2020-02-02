<?php
    $conn=new mysqli("localhost","root","","lts");
    mysqli_select_db($conn,"lts");

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="keywords" content="Digital marketing agency, Digital marketing company, Digital marketing services">
		<meta name="author" content="creativegigs">
		<meta name="description" content="rogan creative multipurpose is a beautiful website template designed for SEO & Digital Agency websites.">
		<meta name='og:image' content='images/home/ogg.png'>
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#fff">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#fff">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#fff">
		<title>Rogan - Business and Agency html Template</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">

		<!-- Fix Internet Explorer ______________________________________-->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->	
	</head>

	<body>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<!-- Preloader -->
			<section>
				<div id="preloader">
					<div id="ctn-preloader" class="ctn-preloader">
						<div class="animation-preloader">
							<div class="icon"><img src="images/1.svg" alt=""></div>
							<div class="txt-loading">
								<span data-text-preloader="3" class="letters-loading">
									3
								</span>
								<span data-text-preloader="6" class="letters-loading">
									6
								</span>
								<span data-text-preloader="5" class="letters-loading">
									5
								</span>
								<span data-text-preloader="D" class="letters-loading">
									D
								</span>
								<span data-text-preloader="A" class="letters-loading">
									A
								</span>
								<span data-text-preloader="Y" class="letters-loading">
									Y
								</span>
								<span data-text-preloader="S" class="letters-loading">
									S
								</span>
							</div>
						</div>	
					</div>
				</div>
			</section>


			<!-- 
			=============================================
				Theme Main Menu
			============================================== 
			-->
			<?php 
			include "header.php"
			?>> <!-- /.theme-main-menu -->



			
			<!-- 
			=============================================
				Text Inner Banner One
			============================================== 
			-->
			<div class="text-inner-banner-one pos-r">
				<div class="shape-wrapper">
					<svg class="img-shape shape-one">
					<path fill-rule="evenodd"  fill="rgb(255, 223, 204)"
					 d="M6.000,12.000 C9.314,12.000 12.000,9.314 12.000,6.000 C12.000,2.686 9.314,-0.000 6.000,-0.000 C2.686,-0.000 -0.000,2.686 -0.000,6.000 C-0.000,9.314 2.686,12.000 6.000,12.000 Z"/>
					</svg>
					<svg class="img-shape shape-two">
					<path fill-rule="evenodd"  fill="rgb(182, 255, 234)"
					 d="M6.000,12.000 C9.314,12.000 12.000,9.314 12.000,6.000 C12.000,2.686 9.314,-0.000 6.000,-0.000 C2.686,-0.000 -0.000,2.686 -0.000,6.000 C-0.000,9.314 2.686,12.000 6.000,12.000 Z"/>
					</svg>
					<svg class="img-shape shape-three">
					<path fill-rule="evenodd"  fill="rgb(181, 198, 255)"
					 d="M12.000,24.000 C18.627,24.000 24.000,18.627 24.000,12.000 C24.000,5.372 18.627,-0.000 12.000,-0.000 C5.372,-0.000 -0.000,5.372 -0.000,12.000 C-0.000,18.627 5.372,24.000 12.000,24.000 Z"/>
					</svg>
					<svg class="img-shape shape-four">
					<path fill-rule="evenodd"  fill="rgb(255, 156, 161)"
					 d="M7.500,15.000 C11.642,15.000 15.000,11.642 15.000,7.500 C15.000,3.358 11.642,-0.000 7.500,-0.000 C3.358,-0.000 -0.000,3.358 -0.000,7.500 C-0.000,11.642 3.358,15.000 7.500,15.000 Z"/>
					</svg>
					<svg class="img-shape shape-five">
					<path fill-rule="evenodd"  fill="rgb(178, 236, 255)"
					 d="M12.500,25.000 C19.403,25.000 25.000,19.403 25.000,12.500 C25.000,5.596 19.403,-0.000 12.500,-0.000 C5.596,-0.000 -0.000,5.596 -0.000,12.500 C-0.000,19.403 5.596,25.000 12.500,25.000 Z"/>
					</svg>
				</div> <!-- /.shape-wrapper -->
				<div class="container">
					<p>FAQ</p>
					<div class="theme-title-one">
						<h2 class="main-title">//Share your ideas// <br> <i>or ask for help. </i></h2>
					</div> <!-- /.theme-title-one -->
<!--
					<form action="#" class="faq-search-form">
						<span>Browse help topics or use the search bar</span>
						<div class="input-group">
							<input type="text" placeholder="Search">
							<button><i class="fa fa-search" aria-hidden="true"></i></button>
						</div>
					</form>
-->
			</div>
			</div> <!-- /.text-inner-banner-one -->


			


			<!-- 
			=============================================
				Faq Page
			============================================== 
			-->		
			<div class="help-articles">
				<div class="container">
					<div class="row">
					<?php
   
   $view="select * from addidea";
   $exe_view=mysqli_query($conn, $view);

   while($result=mysqli_fetch_array($exe_view))
   {

   ?>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="single-help-box">
								<a href="#">
								<h5><?php echo $result['name'];?></h5>
								<p><?php echo $result['idea'];?></p>
								</a>
							</div> <!-- /.single-help-box -->
						</div> <!-- /.col- -->
						
						
						
			<?php
                        }
                        ?>
					
					
					
				</div> <!-- /.container -->
			</div> <!-- /.help-articles -->

			<center>
					<div class="text-center mt-40"><a href="#" class="theme-btn line-button-one button-rose">Load More</a></div>
					</center>
					<br><br><br>
   <form action="inc/addidea.php" class="submit-faq theme-form-style-five md-mt-100" method="POST">
					<div class="container">
						<h3 class="faq-page-title text-center">//idea//, Submit Your Idea.</h3>
						<br><br>
						<div class="row">
							<div class="col-lg-4 col-md-6"><input type="text" name="name" placeholder="Your Name"></div>
							<div class="col-lg-4 col-md-6"><input type="text" name="mail" placeholder="Your Mail"></div>
							<div class="col-lg-4"><input type="text" name="subject" placeholder="Subject"></div>
							<div class="col-12"><textarea name="idea" placeholder="Your idea"></textarea></div>
							<div class="col-12"><button class="theme-button-three" type="submit">Submit idea</button></div>
						</div>
					</div>
				</form>


			<!--
			=====================================================
				Footer
			=====================================================
			-->
			 <!-- /.theme-footer-one -->
			<?php 
			include "footer.php"
			?>
	        

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>
			


		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="vendor/jquery.2.2.3.min.js"></script>
		<!-- Popper js -->
		<script src="vendor/popper.js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	    <!-- menu  -->
		<script src="vendor/mega-menu/assets/js/custom.js"></script>
		<!-- AOS js -->
		<script src="vendor/aos-next/dist/aos.js"></script>
		<!-- WOW js -->
		<script src="vendor/WOW-master/dist/wow.min.js"></script>
		<!-- owl.carousel -->
		<script src="vendor/owl-carousel/owl.carousel.min.js"></script>

		<!-- Theme js -->
		<script src="js/theme.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>