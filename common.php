<?php

//header function - used to change title of the webpage
function webHeader($page){
    echo '<!DOCTYPE html>';
    echo '<html lang = "en">';
    echo '<head>';
	echo '<meta charset="UTF-8">';
    echo '<title> Kleider | ' . $page . '</title>';
    echo '<link rel = "stylesheet" href = "style.css">';
    echo '</head>';
    echo '<body>';

	echo '<div class = "fix">';
	echo '<div class = "header">';
	echo '~ Kleider ~';
	echo '</div>';
	echo '<div class = "navigation">';
	echo '<nav>';
	echo '<ul>';
	
	$pageNames = array("Home", "Products", "About", "Contact", "Account", "Search", "Shopping Bag");
	$pageAddress = array("index.php", "products.php", "about.php", "contact.php", "account.php", "search.php", "bag.php",);
	
	for($x = 0; $x < count($pageNames); $x++){
		echo '<li ';
		if($pageNames[$x] == $page){
			echo 'class = "onpage"';
		}
		echo '><a href = "'. $pageAddress[$x].'">'. $pageNames[$x].'</a></li>';
	}
	
	echo '</ul>';
	echo '</nav>';	
	echo '</div>';
	echo '</div>';
}


function cmsHeader($page){
    echo '<!DOCTYPE html>';
    echo '<html lang = "en">';
    echo '<head>';
	echo '<meta charset="UTF-8">';
    echo '<title> Kleider | ' . $page . '</title>';
	echo '<link rel = "stylesheet" href = "cms.css">';
    echo '</head>';
    echo '<body>';
	echo '<div class = "header">';
	echo '~ Kleider ~';
	echo '</div>';
	echo '<div class = "sub-header">';
	echo 'CMS';
	echo '</div>';
	echo '<div class = "navigation">';
	echo '<nav>';
	echo '<ul>';
	
	$pageNames = array("Admin", "Add Products", "View Products", "Edit Products", "View Orders");
	$pageAddress = array("admin.php", "add.php", "view.php", "edit.php", "order.php");
	
	for($x = 0; $x < count($pageNames); $x++){
		echo '<li ';
		if($pageNames[$x] == $page){
			echo 'class = "onpage"';
		}
		echo '><a href = "'. $pageAddress[$x].'">'. $pageNames[$x].'</a></li>';
	}
	
	echo '</ul>';
	echo '</nav>';	
	echo '</div>';
}


function webFooter(){
	echo '<footer>';
	echo '<div class = "row" align = "center">';
	echo '<div class = "footdiv">';
	echo '<h1>info</h1>';
	echo '			<ul>';
	echo '				<li><a href = "about.php">About us</a></li>';
	echo '				<li><a href = "contact.php">Contact us</a></li>';
	echo '				<li><a href = "admin.php">Staff</a></li>';
	echo '			</ul>';
	echo '		</div>';
	echo '		<div class = "footdiv">';
	echo '			<p>';
	echo '			<em>CST2120 COURSEWORK 2 E-COMMERCE</em>';
	echo '			<br>';
	echo '			This website is used solely for the purpose of';
	echo '			study and project presentation';
	echo '			<br>';
	echo '			The company doesnt exist...yet ;)';
	echo '			<br>';
	echo '			All pictures and logos used in this website belong';
	echo '			to their respective owners';
	echo '			</p>';
	echo '		</div>';
	echo '		<div class = "footdiv">';
	echo '			<h1>team</h1>';
	echo '			<ul>';
	echo '				<li>Nihaal Tayob M00738443</li>';
	echo '				<li>Raharison Magalie Sandrina M00797274</li>';
	echo '				<li>David Akinsola M00694949</li>';
	echo '			</ul>';
	echo '		</div>';
	echo '	</div>';
	echo '</footer>';
	echo '</body>';
	echo '</html>';
}

function CMSFooter(){
	echo '<footer>';
	echo '<div class = "row" align = "center">';
	echo '<p>~Kleider~ © 2021 <br>No Rights Reserved</p>';
	echo '		<div class = "footdiv">';
	echo '			<p>';
	echo '			<em>CST2120 COURSEWORK 2 E-COMMERCE</em>';
	echo '			<br>';
	echo '			This website is used solely for the purpose of';
	echo '			study and project presentation';
	echo '			<br>';
	echo '			The company doesnt exist...yet ;)';
	echo '			<br>';
	echo '			All pictures and logos used in this website belong';
	echo '			to their respective owners';
	echo '			</p>';
	echo '		</div>';
	echo '		<div class = "footdiv">';
	echo '			<h1>team</h1>';
	echo '			<ul>';
	echo '				<li>Nihaal Tayob M00738443</li>';
	echo '				<li>Raharison Magalie Sandrina M00797274</li>';
	echo '				<li>David Akinsola M00694949</li>';
	echo '			</ul>';
	echo '		</div>';
	echo '	</div>';
	echo '</footer>';
	echo '</body>';
	echo '</html>';
}