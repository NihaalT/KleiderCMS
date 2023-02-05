<?php 
    include('common.php'); 
	
    CMSHeader("View Products");

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
		  <td>Rs500</td>
		  <td>$20.00</td>
		  <td><button type = "submit">Update</button></td>
		  <td><button type = "submit">Delete</button></td>
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
		  <td>Rs500</td>
		  <td>200</td>
		  <td><button type = "submit">Update</button></td>
		  <td><button type = "submit">Delete</button></td>
		</tr>
		
	  </table>

<?php
	CMSFooter();
//output footer