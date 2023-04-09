
<?php
 include "templates/signupheaderTemplates.php";
 session_start();
 require_once "config/dbConnect.php";
?>



<!DOCTYPE html>
<html>

<head>
	<title>Sign up</title>
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
	<link href="css/formStructure.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Mono:300,300i,400,400i,500,500i,700" rel="stylesheet">
	<link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">

	
</head>

<body>
	
					
			<br/>		
			<div class="home-content">
		<div class="bootstrap">
		<div class="container">
		
      <form class="needs-validation" method="post" action="processes/user_processes.php" enctype ="multipart/form-data" >
          <div class="row">
		  
		  <div class="col-md-6 mb-3">
                <label for="surname">Surname:<span style = "color: #dd0000;">*</span></label>
                <input type="text" class="form-control" id="surname" name="surname" placeholder="Enter your surname " value="" required />
                <div class="invalid-feedback">
                  
                </div>
              </div> 
              <div class="col-md-6 mb-3">
                <label for="firstname">First name:<span style = "color: #dd0000;">*</span></label>
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter your firstname" value="" required />
                <div class="invalid-feedback">
                
                </div>
              </div>
              
			  <div class="col-md-6 mb-3">
                <label for="othername">Other name:</label>
                <input type="text" class="form-control" id="othername" name="othername" placeholder="Enter your othername" value=""  />
                <div class="invalid-feedback">
                
                </div>
              </div>
			  
			  <div class="col-md-6 mb-3">
				<label for="profile_pic">Profile Picture:<span style = "color: #dd0000;">*</span></label>
                <input type="file" class="form-control" id="profile_pic" name="profile_pic" placeholder="" value="" required>
                <div class="invalid-feedback">
              </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="gender">Gender:<span style = "color: #dd0000;">*</span></label>
				<select class="form-control" id="gender" name = "gender" required>
			<option for="gender" value = "">--Select your gender--</option>
			<option value = "Male">M</option>
			<option value = "Female">F</option>
			</select>
			 <div class="invalid-feedback">
                  
                  
                </div>
              </div>
			  
              <div class="col-md-6 mb-3">
                <label for="dob">Date of birth:<span style = "color: #dd0000;">*</span></label>
                <input type="date" class="form-control" id="dob" name="dob" placeholder="" value="" required />
                <div class="invalid-feedback">
                  
                </div>
              </div> 
			  </div>
			 
                <div class="mb-3">
              <label for="email">Email address:<span style = "color: #dd0000;">*</span></label>
              <input type="email" class="form-control" id="email" name="email"placeholder="Enter your email" required />
              <div class="invalid-feedback">
            
              </div>
            </div> 
          

			<div class="row">
              <div class="col-md-6 mb-3">
                <label for="password">Password:<span style = "color: #dd0000;">*</span></label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" value="" required />
                <div class="invalid-feedback">
                
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="confirmpassword">Confirm password:<span style = "color: #dd0000;">*</span></label>
                <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm password " value="" required />
                <div class="invalid-feedback">
                  
                </div>
              </div> 
              </div> 
			  
			
			<div class="mb-3">
             <label for="role">Role:<span style = "color: #dd0000;">*</span></label>
              <select class="form-control" id="transport_type" name = "role" >
			  <option for="role" value = "">--Role--</option>
			  <?php 
	$cn=0;
	$res_tbl_roles = $dbConn->query("SELECT * FROM `tbl_roles` where role_id != 1 && role_id != 2  ");
	while($row_tbl_roles = $res_tbl_roles->fetch_assoc()){ $cn++;?>
				<option value = "<?php print $row_tbl_roles["role_id"];?>"><?php print $row_tbl_roles["role_name"];?></option>
				  <?php } ?>
				
				</select>
              <div class="invalid-feedback">
                  
                </div>
              </div>
           
           <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name = "signup">Sign Up</button>
			
			
			
          </form>
		   
			</div>		
			</div>		
			</div>		
					<br/><br/>
				
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
				<p><b>Copyright &copy; <?php echo date("Y"); ?> | </b></p>
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
