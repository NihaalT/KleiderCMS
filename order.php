<?php 
    include('common.php'); 
	
    CMSHeader("View Orders");

?>
<!--
Unique code for the home page
-->
	<div class = "container">
		<form>
			<input type="text" placeholder="Search by customer, product or order ID">
			<button type = "submit" class = "btn">Search</button>
		</form>
	</div>
	
	<table>
		<tr>
		  <th>OrderID</th>
		  <th>CustomerID</th>
		  <th>ProductID</th>
		  <th>Quantity</th>
		  <th>Price</th>
		  <th>Total</th>
		  <th>Date of Order</th>
		  <th>Delivered</th>
		</tr>
		<tr>
		  <td>OKLD123</td>
		  <td>C56789</td>
		  <td>KLD2021</td>
		  <td>2</td>
		  <td>$20.00</td>
		  <td>$40.00</td>
		  <td>02/02/2021</td>
		  <td>N</td>
		</tr>
	  </table>
<?php
	CMSFooter();
//output footer