<?php 
//WEB ESTRUCTURA MODULAR
$page="view/index.php";
if(isset($_GET['page']))
	if(file_exists("view/".$_GET['page'].".php"))
		$page="view/".$_GET['page'].".php";	
require 'view/partials/header.php';
require $page;
require 'view/partials/footer.php';
 ?>