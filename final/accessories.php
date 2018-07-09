<?php 

	$db= mysqli_connect("localhost", "root", "","accessories");
	$sql="SELECT * from  accessories";
	$result=mysqli_query($db, $sql);
	$image="";
	while ($row = mysqli_fetch_array($result)) {

		$image=$row['images'];
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
			<h1>ACCESSORIES</h1>
			<ul>
				<li><a href="mainpage.php">Home</a></li>
				<li><a href=""></a></li>
			</ul>
		</div>
		<div class="prod-box">
			<img src="image/access.jpg" alt="accessories">
			 	<div class="prod-trans">
					<div class="prod-feature">
						<p>Accessories</p>
						<p style="color: #fff; font-weight: bold;">Price: $8</p>
						<input type="button" value="Add to Cart" >
					</div>
				</div>
		</div>
		<div class="prod-box">
			<img src="<?php echo $image;  ?>" alt="men-suit" height="280px";>
			 	<div class="prod-trans">
					<div class="prod-feature">
						<p>Accessories</p>
						<p style="color: #fff; font-weight: bold;">Price: $8</p>
						<input type="button" value="Add to Cart" >
					</div>
				</div>
		</div>
		<div class="prod-box">
			<img src="<?php echo $image;  ?>" alt="men-suit" height="280px";>
			 	<div class="prod-trans">
					<div class="prod-feature">
						<p>Accessories</p>
						<p style="color: #fff; font-weight: bold;">Price: $8</p>
						<input type="button" value="Add to Cart" >
					</div>
				</div>
		</div>
		<div class="prod-box">
			<img src="image/access5.jpg" alt="men-suit">
				<div class="prod-trans">
					<div class="prod-feature">
						<p>Accessories</p>
						<p style="color: #fff; font-weight: bold;">Price: $9</p>
						<input type="button" value="Add to Cart" >
					</div>
				</div>
		</div>
		<div class="prod-box">
			<img src="image/access6.jpg" alt="men-suit">
				<div class="prod-trans">
					<div class="prod-feature">
						<p>Accessories</p>
						<p style="color: #fff; font-weight: bold;">Price: $5</p>
						<input type="button" value="Add to Cart" >
					</div>
				</div>
		</div>
		<div class="prod-box">
			<img src=image/access.jpg" alt="accessories">
				<div class="prod-trans">
					<div class="prod-feature">
						<p>Accessories</p>
						<p style="color: #fff; font-weight: bold;">Price: $8</p>
						<input type="button" value="Add to Cart" >
					</div>
				</div>
		</div>
		<div class="prod-box">
			<img src="image/access3.jpg" alt="accessories">
				<div class="prod-trans">
					<div class="prod-feature">
						<p>Accessories</p>
						<p style="color: #fff; font-weight: bold;">Price: $12</p>
						<input type="button" value="Add to Cart" >
					</div>
				</div>
		</div>
		<div class="prod-box">
			<img src="image/access9.jpg" alt="men-suit">
				<div class="prod-trans">
					<div class="prod-feature">
						<p>Accessories</p>
						<p style="color: #fff; font-weight: bold;">Price: $10</p>
						<input type="button" value="Add to Cart" >
					</div>
				</div>
		</div>


	</div>
</body>
</html>
