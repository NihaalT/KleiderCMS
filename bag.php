<?php 
    include('common.php'); 
	
    webHeader("Shopping Bag");

?>
<!--
Unique code for the home page
-->
	<div class = "row">
		<div class = "col-2" >
			<h3><a href="products.php"> &#8592; Back to products</a></h3>
		</div>
	</div>
	<!-- cart information -->
	<div class = "container cart">
		<table>
			<tr>
				<th>Product</th>
				<th>Quantity</th>
				<th>Subtotal</th>
			</tr>
			<tr>
				<td>
					<div class = "cartinfo">
						<img src = "pictures/model1.jpg">
						<div>
							<p>Tan colored Plain T-shirt</p>
							<small>$20.00</small>
							<br><br><br>
							<a href = "">Remove</a>
						</div>
					</div>
				</td>
				<td><input type = "number" value = "1"></td>
				<td>$20.00</td>
			</tr>
		</table>
	</div>
<?php
	webFooter();
//output footer