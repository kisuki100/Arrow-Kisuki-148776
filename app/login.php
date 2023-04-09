<?php
   
	session_start();
	require_once "config/dbConnect.php";
	
 ?>


<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Megacorp a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="stylesheet" href="log/css/style.css" type="text/css" media="all" />
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link href="css/home.css" rel='stylesheet' type='text/css' />
	<link href="css/mail.css" rel="stylesheet" type='text/css' media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Mono:300,300i,400,400i,500,500i,700" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet' >
	<link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
	
</head>

<body>

			<div class="inner_sec_info_wthree_agile">
			<div class="mail_form">
				<!-- <h3 class="tittle mail"><span>Request form </span></h3> -->
				<div class="inner_sec_info_wthree_agile">
					
					
					<div class="main-content-agile">
      <div class="sub-main-w3">
        <h2 style="color:black;">Login Here
          <i class="fa fa-hand-o-down" aria-hidden="true"></i>
        </h2>
        <?php if (isset($_GET["wrong_cred"])){print '<span class="error text-danger">Email/Password wrong</span>'; } ?>	
      <form method="post"action = "processes/user_processes.php" method = "POST" autocomplete="on" >



        <div class="pom-agile">
              <span class="fa fa-user-o" aria-hidden="true"></span>
             <input type="text" placeholder="email" name="email" class="form-control input-sm" required />
          </div>

          <div class="pom-agile">
            <span class="fa fa-key" aria-hidden="true"></span>
             <input type="password" placeholder="password" name="password" class="form-control input-sm" required />
          </div>

          <div class="sub-w3l">
            <div class="sub-agile">
              <input type="checkbox" id="brand1" value="">
              <label for="brand1">
                <span></span>Remember me</label>
            </div>
            <a href="#">Forgot Password?</a>
            <div class="clear"></div>
          </div>
                
          <button  type="submit" class="btn btn-md btn-dark" name="login">Login</button>
      </form>

  </div>
    </div>
					
					
				</div>
			</div>
			
				<div class="col-md-8 map">

    


			<div class="clearfix"> </div>

            </div>
    </br>
    </br>
    </br>
    </br>
				
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="copyrighttop">
				<ul>
					<li>
						<h4>Follow us on:</h4>
					</li>
					<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a class="facebook" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a class="facebook" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li><a class="facebook" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="copyrightbottom">
				<p><b>Copyright &copy; <?php echo date("Y"); ?> | TUMA ONLINE TRADING SYSTEM - All rights reserved</b></p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

    <!-- HELLO JAVA-SCRIPT !! -->

    <script type="text/javascript" src="javaScript/jquery-2.2.3.min.js"></script>
    <!-- //js -->
	<!--search-bar-->
	<script src="javaScript/main.js"></script>
    <!--//search-bar-->
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>

    <!-- stats -->
	<script src="javaScript/jquery.waypoints.min.js"></script>
	<script src="javaScript/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->


	<script src="javaScript/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
    <!-- script for responsive tabs -->
	<script src="javaScript/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>

    <!--// script for responsive tabs -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="javaScript/move-top.js"></script>
	<script type="text/javascript" src="javaScript/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<script type="text/javascript" src="javaScript/bootstrap-3.1.1.min.js"></script>
	<!-- js -->
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/jquery.vide.min.js"></script>
  <!-- //js -->

    </body>
</html>
