<?php 

	$db= mysqli_connect("localhost", "root", "","men");
	$sql="SELECT * from  shirt";
	$result=mysqli_query($db, $sql);
	$image="";
	while ($row = mysqli_fetch_array($result)) {

		$image=$row['image'];
		$price=$row['price'];
		$name=$row['name'];

	
	}


 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
</head>
<body>
	<div>
		<div id="top">
			<h1>NEW ARRIVALS</h1>
			<ul>
				<li><a href="mainpage.php">Home</a></li>
				<li><a href=""></a></li>
			</ul>
		</div>
		<div class="prod-box">
			<img src="image/men2.jpg" alt="men">
			 	<div class="prod-trans">
					<div class="prod-feature">
						<p>Men Special Dress</p>
						<p style="color: #fff; font-weight: bold;">Price: $8</p>
						<input type="button" value="Add to Cart" >
					</div>
				</div>
		</div>
		<div class="prod-box">
			<img src="<?php echo $image;  ?>" alt="men-suit" height="280px";>
			 	<div class="prod-trans">
					<div class="prod-feature">
						<p>Men Special Dress</p>
						<p style="color: #fff; font-weight: bold;">Price: $8</p>
						<input type="button" value="Add to Cart" >
					</div>
				</div>
		</div>
		<div class="prod-box">
					<img src="image/women4.jpg" alt="men-suit">
					<div class="prod-trans">
						<div class="prod-feature">
							<p>Women Special Dress</p>
							<p style="color: #fff; font-weight: bold;">Price: $20</p>
							<input type="button" value="Add to Cart" >
						</div>
					</div>
				</div>

				<!--first product-->
				<div class="prod-box">
					<img src="image/women5.jpg" alt="men-suit">
					<div class="prod-trans">
						<div class="prod-feature">
							<p>Women Special Dress</p>
							<p style="color: #fff; font-weight: bold;">Price: $19</p>
							<input type="button" value="Add to Cart" >
						</div>
					</div>
				</div>

				<!--first product-->
				<div class="prod-box">
					<img src="image/women6.jpg" alt="men-suit">
					<div class="prod-trans">
						<div class="prod-feature">
							<p>Women Special Suit</p>
							<p style="color: #fff; font-weight: bold;">Price: $30</p>
							<input type="button" value="Add to Cart" >
						</div>
					</div>
				</div>


	</div>
</body>
</html>
