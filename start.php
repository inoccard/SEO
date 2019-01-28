<?php

$urlBase = "http://localhost";
$url = "http://localhost/seo/";
$page = '';

//Define o título da página
if( isset($_GET['url']) ){
	$page = $_GET['url'];

	switch ($_GET['url']) {
		case 'home':
			$titulo = 'E-book 7 Erros que te impede de ser um bom programador';
			$description = 'Baixe agora o eBook, é grátis!!!';
			$img = "img/curso-seo-especializati-sitekit.png";
			break;	
		case 'sobre':
			$titulo = 'Sobre à Empresa EspecializaTi!';
			$description = 'Conheça Mais Sobre à Empresa EspecializaTi';
			$img = "img/curso-seo-especializati-sitekit.png";
			break;
		default:
			$titulo = 'Página 404 - Não encontrada | EspecializaTi';
			$description = 'Opppsss, página não encontrada!';
			$img = "img/curso-seo-especializati-sitekit.png";
			break;
	}
}else{
	$titulo = 'E-book 7 Erros que te impede de ser um bom programador';
	$description = 'Baixe agora o eBook, é grátis!!!';
	$img = "img/curso-seo-especializati-sitekit.png";
}