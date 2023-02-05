<?php 
    include('common.php'); 
	
    CMSHeader("Admin");

?>
<!--
Unique code for the home page
-->
	<div class="label">Admin Login</div>
	<div class = "container">
	<form>
		<input type = "text" placeholder = "User">
		<input type = "password" placeholder = "Password">
		<button type = "submit" class = "btn">Login</button>
	</form>
	</div>
<?php
	CMSFooter();
//output footer