<?php 
    include('common.php'); 
	
    CMSHeader("Edit Products");

?>
<!--
Unique code for the home page
-->
	<table>
		<tr>
		  <th>ID</th>
		  <th>Image</th>
		  <th>Name</th>
		  <th>Description</th>
		  <th>Price</th>
		  <th>Quantity</th>
		  <th>Update</th>
		  <th>Delete</th>
		</tr>
		<tr>
		  <td>KLD2021</td>
		  <td><img src = "pictures/model1.jpg"></td>
		  <td>Tan colored Plain T-shirt</td>
		  <td> 
		  a Tan colored Plain T-shirt with
		  a hole for your head, shoulders, knees and toes
		  knees and toes.
		  </td>
		  <td>$20.00</td>
		  <td>200</td>
		  <td><button type = "submit">Update</button></td>
		  <td><button type = "submit">Delete</button></td>
		</tr>
	</table>
	
  <div class="label">
	Please enter the new details of the product
  </div>
  
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