<?php /* Smarty version Smarty-3.1.15, created on 2014-10-27 12:17:30
         compiled from "templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1369202333544a02c2624893-09886887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be439f82a4dbec61746f62a0df07c19a7eecd966' => 
    array (
      0 => 'templates/header.tpl',
      1 => 1414408334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1369202333544a02c2624893-09886887',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_544a02c2627fc8_70795006',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544a02c2627fc8_70795006')) {function content_544a02c2627fc8_70795006($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
	<title>IAB Spain</title>
	<link rel="stylesheet" type="text/css" href="/iab-mobile/css/estilos.css"/>
</head>
<body>
<header>
	
	<ul class="nav" style="display:inline;">
		<li><a href="/iab-mobile/"><img src="/iab-mobile/img/logo.jpg" alt=""></a></li>
		<li class="borde"><a href="/iab-mobile/category/noticias">NOTICIAS</a></li>
		<li class="borde"><a href="/iab-mobile/eventos">EVENTOS</a></li>
		<li class="borde"><a href="/iab-mobile/asociados">ASOCIATE</a></li>
		<li><img onclick="$('#buscador').slideToggle();" width="21" height="23" src="/iab-mobile/img/btnSearch.png" alt=""></li>
	</ul>
	
	<div id="buscador" class="buscador limpia oculto">
		<form action="/search.php" id="BuscarForm" method="post">
			<input type="text" name="textBuscar" id="textBuscar">
			<input type="button" id="btnBuscar" value="Buscar" class="button">
		</form>
		<p style="padding-left:5px">* Busque cualquier palabra que pueda contener una noticia.</p>
	</div>
</header><?php }} ?>
