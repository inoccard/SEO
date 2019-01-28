<?php
require_once 'start.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width-device-width, initial-scale=1">

		<link rel="base" href="<?=$urlBase?>">
		<link rel="canonical" href="<?="{$urlBase}/{$page}"?>">

		<!--Titulo-->
		<title><?=$titulo?></title>

		<!--Meta Description-->
		<meta name="description" content="<?=$description?>">
		<meta name="robots" content="index, follow">

		<!-- Protocolos Microformatos-->
		<!-- A forma como aparecerá quando essa página for compartilhada no facebook-->
		<meta property="og:title" content="<?=$titulo?>" >
		<meta property="og:type" content="website" >
		<meta property="og:url" content="<?=$url?>" >
		<meta property="og:image" content="<?=$img?>" >
		<meta property="og:description" content="<?=$description?>">

		<!--Twitter-->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="@ICSD10">
		<meta name="twitter:creator" content="@ICSD10">
		<meta name="twitter:title" content="<?=$title?>">
		<meta name="twitter:description" content="<?=$description?>">
		<meta name="twitter:image" content="<?=$img?>">

		<!--Style-->
		<link rel="stylesheet" href="css/especializati.css">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<!--Font Awesome-->
		<link rel="stylesheet" href="css/font-awesome.css">

		<!--Favicon-->
		<link rel="icon" href="imgs/favicon.png">
	</head>
<body>

<div class="logo">
	<div class="container text-center">
		<a href="home">
			<img src="imgs/logo-especializati.png" alt="EspecializaTi" title="Especializati" class="logo-img">
		</a>
	</div>
</div>

<header class="topo-titulo">
	<div class="container text-center">
		<h1 class="titulo-ebook"><?=$titulo?></h1>
	</div>
</header>

<?php

if( !$_GET ){
	include_once 'pags/home.php';
}elseif( isset($_GET['url']) && file_exists("pags/{$_GET['url']}.php") ){
	include_once "pags/{$_GET['url']}.php";
}else{
	include_once 'pags/404.php';
}

?>

<footer class="footer padding-20">
	<div class="container text-center">
		<a href="sobre">
			<img src="imgs/logo-especializati-branca.png" alt="EspecializaTi" title="EspecializaTi" class="logo-img">
		</a>
	
		<div class="social">
			<a href="#"><i class="fa fa-facebook"></i></a>

			<a href="#"><i class="fa fa-twitter"></i></a>

			<a href="#"><i class="fa fa-google-plus"></i></a>

			<a href="#"><i class="fa fa-linkedin"></i></a>

			<a href="#"><i class="fa fa-youtube-play"></i></a>
		</div>
	</div>
</footer>


</body>
</html>