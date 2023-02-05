<?php 
    include('common.php'); 
	
    webHeader("Products");

?>
<!--
Unique code for the home page
-->
	<div class = "container">
		<div class = "row">
			<div class = "col-2" >
				<h3><a href="products.php"> &#8592; Back to products</a></h3>
			</div>
		</div>
		<div class = "row" align = "center">
			<div class = "col-2">
				<img src = "pictures/model1.jpg">
			</div>
			<div class = "col-2">
				<h1>Tan colored Plain T-shirt</h1>
				<h2>$20.00</h2>
				<h3>M</h3> <h3>L</h3> <h3>XL</h3>
				<p><a href="bag.php">Add to Basket</a></p>
			</div>
		</div>
	</div>
<?php
	webFooter();
//output footer