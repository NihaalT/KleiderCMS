<?php 
    include('common.php'); 
	
    webHeader("Account");

?>
<!--
Unique code for the home page
-->
	<div class = "account-page">
			<div class = "formdiv">
				<div class "formbtn">
					<span onclick = "login()">Login</span>
					<span onclick = "register()">Register</span>
					<hr id= "ind">
				</div>
				
				<form id = "loginform">
					<input type = "text" placeholder = "Username">
					<input type = "password" placeholder = "Password">
					<button type = "submit" class = "btn">Login</button>
					<a href = "" onclick = "register()">No account? Register</a>
				</form>
				
				<form id = "regform">
					<input type = "text" placeholder = "Username">
					<input type = "email" placeholder = "Email">
					<input type = "password" placeholder = "Password">
					<button type = "submit" class = "btn">Register</button>
				</form>
			</div>
	</div>
	
	<!-- javascript used to generate responsive account page for login and register -->
	
	<script>
	
	var loginform = document.getElementById("loginform");
	var regform = document.getElementById("regform");
	var ind = document.getElementById("ind");
	
	function register(){
		regform.style.transform = "translateX(0px)";
		loginform.style.transform = "translateX(0px)";
		ind.style.transform = "translateX(250px)";
	}
	function login(){
		regform.style.transform = "translateX(460px)";
		loginform.style.transform = "translateX(460px)";
		ind.style.transform = "translateX(150px)";
	}
	
	</script>
	

</body>

</html>