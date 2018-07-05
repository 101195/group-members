<!DOCTYPE html>
<html>
<head>
	<title>Shopping Line</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<style type="text/css">
		.mySlides {display:none;}
	</style>
</head>
<body>
	<div>
		<div id="top">
			<div id="logo">
					<span id="ist">AFRI</span><span id="iist">Clothline</span>
			</div>
			<ul>
				<li><a href="mainpage.php">Home</a></li>
				<li><a href="men1.php">Men</a></li>
				<li><a href="women1.php">Women</a></li>
				<li><a href="kids1.php">Kids</a></li>
				<li class="right"><i class="fa fa-shopping-cart" style="font-size:36px"></i> <a href="#">Cart</a></li>
				<li class="right"> <a href="index.php">Logout</a></li>
			</ul>
			

			<div id="box"><p id="number">0</p></div>
			
		</div>	

	</div>
	<div id="main">
		<div class="w3-content w3-section" style="max-width:100%" >
 			 <img class="mySlides" src="image/slide3.jpg" style="width:100%; height: 500px;">
  			 <img class="mySlides" src="image/slide1.jpg" style="width:100%; height:500px;">
  			 <img class="mySlides" src="image/slide2.jpg" style="width:100%; height:500px;">
  			 <img class="mySlides" src="image/slide4.jpg" style="width:100%; height:500px;">
  			 <img class="mySlides" src="image/slide5.jpg" style="width:100%; height:500px;">
		</div>
		<div id="container">
			<div id="heading-block">
				<h2>Cartegory</h2>
			</div>
			<!--first cartegory-->
			<a href="men1.php">
				<div class="catbox">
					<img src="image/men4.jpg" alt="Men-Fashion">
					<span>Men Fashion</span>
				</div>
			</a>
			<!--second cartegory-->
			<a href="women1.php">
				<div class="catbox">
					<img src="image/women11.jpg" alt="Women-Fashion">
					<span>Women Fashion</span>
				</div>
			</a>
			<!--third cartegory-->
			<a href="kids1.php">
				<div class="catbox">
					<img src="image/kids1.jpg" alt="Kids-Fashion">
					<span>Kids Fashion</span>
				</div>
			</a>

			<!--fourth cartegory-->
			<a href="accessories.php">
				<div class="catbox">
					<img src="image/access.jpg" alt="Accessories-Fashion">
					<span>Accessories</span>
				</div>
			</a>

			<!--heading of cartegories-->
			<div id="heading-block">
				<h2>Products</h2>
			</div>
			<div class="prod-container">
				<!--first product-->
				<div class="prod-box">
					<img src="image/men8.jpg" alt="men-suit">
					<div class="prod-trans">
						<div class="prod-feature">
							<p>Men Special Suit</p>
							<p style="color: #fff; font-weight: bold;">Price: $50</p>
							<input type="button" value="Add to Cart" >
						</div>
					</div>
				</div>
			</div>
			<!--first product-->
				<div class="prod-box">
					<img src="image/men3.jpg" alt="men-suit">
					<div class="prod-trans">
						<div class="prod-feature">
							<p>Men Special Suit</p>
							<p style="color: #fff; font-weight: bold;">Price: $49.9</p>
							<input type="button" value="Add to Cart"  >
						</div>
					</div>
				</div>
				<!--first product-->
				<div class="prod-box">
					<img src="image/men2.jpg" alt="men-suit">
					<div class="prod-trans">
						<div class="prod-feature">
							<p>Men Special Shirt</p>
							<p style="color: #fff; font-weight: bold;">Price: $5</p>
							<input type="button" value="Add to Cart" >
						</div>
					</div>
				</div>
				<!--first product-->
				<div class="prod-box">
					<img src="image/men5.jpg" alt="men-suit">
					<div class="prod-trans">
						<div class="prod-feature">
							<p>Men Special Suit</p>
							<p style="color: #fff; font-weight: bold;">Price: $70</p>
							<input type="button" value="Add to Cart" >
						</div>
					</div>
				</div>

				<!--first product-->
				<div class="prod-box">
					<img src="image/men6.jpg" alt="men-suit">
					<div class="prod-trans">
						<div class="prod-feature">
							<p>Men Special Blazer</p>
							<p style="color: #fff; font-weight: bold;">Price: $30</p>
							<input type="button" value="Add to Cart" >
						</div>
					</div>
				</div>

				<!--first product-->
				<div class="prod-box">
					<img src="image/women2.jpg" alt="men-suit">
					<div class="prod-trans">
						<div class="prod-feature">
							<p>Women Special Suit</p>
							<p style="color: #fff; font-weight: bold;">Price: $60</p>
							<input type="button" value="Add to Cart" >
						</div>
					</div>
				</div>

				<!--first product-->
				<div class="prod-box">
					<img src="image/women3.jpg" alt="men-suit">
					<div class="prod-trans">
						<div class="prod-feature">
							<p>Women Special Blazer </p>
							<p style="color: #fff; font-weight: bold;">Price: $40</p>
							<input type="button" value="Add to Cart" >
						</div>
					</div>
				</div>

				<!--first product-->
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
				<!--first product-->
				<div class="prod-box">
					<img src="image/kids2.jpg" alt="men-suit">
					<div class="prod-trans">
						<div class="prod-feature">
							<p>Kids Special Dress</p>
							<p style="color: #fff; font-weight: bold;">Price: $10</p>
							<input type="button" value="Add to Cart" >
						</div>
					</div>
				</div>
				<!--first product-->
				<div class="prod-box">
					<img src="image/kids3.jpg" alt="men-suit">
					<div class="prod-trans">
						<div class="prod-feature">
							<p>Kids Special Dress</p>
							<p style="color: #fff; font-weight: bold;">Price: $8</p>
							<input type="button" value="Add to Cart" >
						</div>
					</div>
				</div>
				<!--first product-->
				<div class="prod-box">
					<img src="image/kids4.jpg" alt="men-suit">
					<div class="prod-trans">
						<div class="prod-feature">
							<p>Kids Special Suit</p>
							<p style="color: #fff; font-weight: bold;">Price: $20</p>
							<input type="button" value="Add to Cart" >
						</div>
					</div>
				</div>
				<!--first product-->
				<div class="prod-box">
					<img src="image/kids5.jpg" alt="men-suit">
					<div class="prod-trans">
						<div class="prod-feature">
							<p>Kids Special Suit</p>
							<p style="color: #fff; font-weight: bold;">Price: $25</p>
							<input type="button" value="Add to Cart" >
						</div>
					</div>
				</div>

				<!--first product-->
				<div class="prod-box">
					<img src="image/kids6.jpg" alt="men-suit">
					<div class="prod-trans">
						<div class="prod-feature">
							<p>Kids Special Dress</p>
							<p style="color: #fff; font-weight: bold;">Price: $7</p>
							<input type="button" value="Add to Cart" >
						</div>
					</div>
				</div>

				<!--first product-->
				<div class="prod-box">
					<img src="image/men9.jpg" alt="men-suit">
					<div class="prod-trans">
						<div class="prod-feature">
							<p>Men Special Shirt</p>
							<p style="color: #fff; font-weight: bold;">Price: $10</p>
							<input type="button" value="Add to Cart" >
						</div>
					</div>
				</div>

				<!--first product-->
				<div class="prod-box">
					<img src="image/men7.jpg" alt="men-suit">
					<div class="prod-trans">
						<div class="prod-feature">
							<p>Men Special Shirt</p>
							<p style="color: #fff; font-weight: bold;">Price: $60</p>
							<input type="button" value="Add to Cart" >
						</div>
					</div>
				</div>

				<!--first product-->
				<div class="prod-box">
					<img src="image/access6.jpg" alt="men-suit">
					<div class="prod-trans">
						<div class="prod-feature">
							<p>Bag</p>
							<p style="color: #fff; font-weight: bold;">Price: $27</p>
							<input type="button" value="Add to Cart" >
						</div>
					</div>
				</div>

				<!--first product-->
				<div class="prod-box">
					<img src="image/access5.jpg" alt="men-suit">
					<div class="prod-trans">
						<div class="prod-feature">
							<p>Neckless</p>
							<p style="color: #fff; font-weight: bold;">Price: $10</p>
							<input type="button" value="Add to Cart" >
						</div>
					</div>
				</div>
				<!--first product-->
				<div class="prod-box">
					<img src="image/access9.jpg" alt="men-suit">
					<div class="prod-trans">
						<div class="prod-feature">	
							<p>Neckless</p>
							<p style="color: #fff; font-weight: bold;">Price: $8</p>
							<input type="button" value="Add to Cart" >
						</div>
					</div>
				</div>
		</div>
		<div id="footer">
			<div class="container">
				<div class="footer_sub">
					<p>Fashion is part of the daily air and it changes all the time, with all the events.<br> You can even see the approaching of a revolution in clothes. <br>You can see and feel everything in clothes.</p>
				</div>
				<div class="footer_sub2">
					<center>
						<h2>Important Links</h2>
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">New Arrivals</a></li>
							<li><a href="#">Deals</a></li>
							<li><a href="#">Cloths</a></li>
							<li><a href="accessories.php">Accessories</a></li>
							<li><a href="#">Products</a></li>
							<li><a href="#">orders</a></li>
						</ul>
					</center>
				</div>
				<div class="footer_sub2">
					<center>
						<h2>Social Links</h2>
						<ul>
							<!-- Add font awesome icons -->
                            <li><a href="#" class="fa fa-facebook"></a>facebook</li>
                            <li><a href="#" class="fa fa-twitter"></a>twitter</li>
                            <li><a href="#" class="fa fa-google"></a>google</li>
                            <li><a href="#" class="fa fa-linkedin"></a>linkedin</li>
                            <li><a href="#" class="fa fa-youtube"></a>youtube</li>
                            <li><a href="#" class="fa fa-instagram"></a>instagram</li>
                            <li><a href="#" class="fa fa-pinterest"></a>pinterest</li>
						</ul>
					</center>
				</div>
				<div class="footer_sub3">
					<center>
						<h2>Suscribe US</h2>
						<input type="text" name="subs" placeholder="Write your e-mail" class="subs">
						<input type="submit" name="submit_btn" value="Subscribe" class="sub_btn"> 
						<p class="sub_p">Enter your e-meil to get notifications from us</p>
					</center>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$("button").on("click", function(){
			$(this).closest("li")
			.find("img")
			.clone()
			.addClass("zoom")
			.appendTo("body");
			setTimeout(function(){
				$(".zoom").remove();

			}, 1000);
		});
	</script>
	<script>
		var myIndex = 0;
		carousel();

		function carousel() {
    	var i;
    	var x = document.getElementsByClassName("mySlides");
    	for (i = 0; i < x.length; i++) {
       		x[i].style.display = "none";  
    	}
    	myIndex++;
    	if (myIndex > x.length) {myIndex = 1}    
    	x[myIndex-1].style.display = "block";  
    	setTimeout(carousel, 5000); // Change image every 5 seconds
		}
	</script>

</body>
</html>