<?php
	session_start();
	require_once "../config/dbConnect.php";
	
	
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8"/>
	<title>connect</title>
	<meta name= "viewport" content =
	"width=device-width, initial-scale=1.0" /> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../css/dashboardLayoutStructure.css" />
	<!--BoxIcons CDN Link-->
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet' >
	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	
</head>
<body>

	
	<section id="menu">
	
		<div class="logo">
			<img src="../images/logo.jpg" alt="">
			<h2>connect<h2>
		</div>
		
		<div class="items">
		<li><i class='bx bxs-dashboard' ></i><a href="client.php">Dashboard</a></li>
		<li><i class='bx bx-dollar-circle'></i><a href="viewProduct.php">Available products</a></li>
		<li><i class='bx bx-edit-alt' ></i><a href="viewMyPurchase.php">View my purchase</a></li>
		<li><i class='bx bx-duplicate'></i><a href="rateTrader.php">Rate Trader</a></li>
		
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		
		
		
		
		<li><i class='bx bx-line-chart'></i><a href="../processes/user_processes.php?logout">Log out</a></li>
		
		</div>

	</section>
	
	<section id="interface">
		<div class="navigation">
			<div class="n1">
				<div>
					<i id="menu-btn"class='bx bx-menu sidebarBtn'></i>
				</div>
				<div class="search">
					<i class='bx bx-search-alt-2' ></i>
					<input type="text" placeholder="search">
		
				</div>
			</div>
			<div class="profile">
				<i class='bx bx-bell'></i>
				<img width="50px" height="50px" src="../images/profile.jpg"/>
			</div>
		</div>
		<h3 class="i-name">
		Client | Dashboard
		</h3>
		
		<dir class="board">
			<table width="100%">
				<thead>
					<tr>
						<td>Name</td>
						<td>price</td>
						<td>Status</td>
						<td> likes</td>
						<td>demand</td>
						
					</tr>
				
				</thead>
				<tbody>
				 <?php 
					$cn=0;
					$res_tbl_product = $dbConn->query("SELECT * FROM `tbl_product` ");
						while($row_tbl_product = $res_tbl_product->fetch_assoc()){ $cn++;
				?>
					<tr>
						<td class="people">
							<img width="50px" height="50px" src="../images/product/<?php print $row_tbl_product["product_image"];?>"/>
							<div class="people-de">
								<h5><?php print $row_tbl_product["product_name"];?></td></h5>
								
							</div>
						</td>
						<td class="people-des">
							<h5>Ksh <?php print $row_tbl_product["product_sellingprice"];?></h5>
						</td>
						<td class="active"><p>Available</p></td>
						
						<td class="edit"><a href="buyProduct.php?EditProduct=<?php print $row_tbl_product["product_id"];?>">Buy</a></td>
					</tr>
				 <?php } ?>
					<tr>
						<td class="people">
						
							<div class="people-de">
								<h5></h5>
								<p></p>
							</div>
						</td>
						<td class="people-des">
							<h5></h5>
							<p></p>
						</td>
						<td ><p></p></td>
						
						<td class="role">
							<p></p>
						</td>
						
						<td class="edit"><a href="viewProduct.php">See all</a></td>
					</tr>
				
				
				</tbody>
			
			</table>
		</dir>
		
		
	</section>
	
	<script>
	$('#menu-btn').click(function(){
		$('#menu').toggleClass("active");
		
	})
	
	</script>
	
	

</body>
</html>

    
