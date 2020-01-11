<?php 

if (isset ($_GET['page'])) {
	$page = $_GET['page'];
}
else{
	$page = 'home';
}

ob_start();

if ($page === 'home'){
	require 'accueil.php';
}
elseif ($page === 'formation') {
	require 'page/formation.php';
}
elseif ($page === 'VeilleInfo') {
	require 'page/VeilleInformatique.php';
}


$content = ob_get_clean();

$css = 'stylesheet.css';

require 'template/Template.php';





 ?>