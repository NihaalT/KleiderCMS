<?php 
    include('common.php'); 
	
    CMSHeader("Add Products");

?>
<!--
Unique code for the home page
-->
	<div class="container">
	<form>
		<label>ID</label>
        <input type="text" placeholder="Enter Product ID">
		
		<label>Name</label>
        <input type="text" placeholder="Enter Product Name">
		
		<label>Description</label>
        <input type="text" placeholder="Enter Product Description">
		
		<label>Keywords</label>
        <input type="text" placeholder="Enter Product Keywords">
		
		<label>Quantity</label>
        <input type="number" placeholder="Enter Product Quantity">
		
		<label>Price</label>
        <input type="number" placeholder="Enter Product Price">
		
		<label>Image <small>format: jpg, jpeg, png</small> </label>
        <input type="file" placeholder="Enter Product Image">
		
		<button type = "submit" class = "btn">Add Product</button>
	</form>
    
  </div>
<?php
	CMSFooter();
//output footer