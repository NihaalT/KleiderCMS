<?php 
    include('common.php'); 
	
    webHeader("Search");

?>
<!--
Unique code for the home page
-->
	<div class = "container">
		<div class = "row" align = "center">
			<div class = "col-2">
				<img src = "pictures/tshirtfold.jpg">
			</div>
			<div class = "col-2">
				<h1>"There is no such thing as <em>enough</em>"</h1>
				<form >
					<input type = "text" placeholder = "Search">
					<button type = "submit" class = "btn">Search</button>
				</form>
			</div>
		</div>
	</div>
<?php
	webFooter();
//output footer