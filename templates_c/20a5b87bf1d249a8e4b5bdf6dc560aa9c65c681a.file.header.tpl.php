<?php /* Smarty version Smarty-3.1.15, created on 2014-10-23 17:01:27
         compiled from "templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12752544918476eed42-93588311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20a5b87bf1d249a8e4b5bdf6dc560aa9c65c681a' => 
    array (
      0 => 'templates\\header.tpl',
      1 => 1414074016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12752544918476eed42-93588311',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_544918476f2bc3_33849532',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544918476f2bc3_33849532')) {function content_544918476f2bc3_33849532($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
	<title>IAB Spain</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
</head>
<body>
<header>
	<table class="tbMenu" cellspacing="0" cellpadding="0">
	<tr>
		<td style="width:20%;padding-left:5px;"> <a href="/"><img src="img/logo.jpg" alt=""></a></td>
		<td style="text-align:center;padding-top:5px" colspan="3">
			<table class="tbMenuA" cellspacing="0" cellpadding="0">
			<tr>
				<td><a class="menuTitles" href="/category/noticias">NOTICIAS</a></td>
				<td><a class="menuTitles" href="/eventos">EVENTOS</a></td>
				<td><a class="menuTitles" href="/asociados">ASOCIATE</a></td>
				<td><a class="btnSearch"><img onclick="$('#buscador').slideToggle();" width="21" height="23" src="img/btnSearch.png" alt=""></a></td>
			</tr>
			</table>
		</td>
	</tr>
	</table>
	<div id="buscador" class="buscador limpia oculto">
		<form action="/search.php" id="BuscarForm" method="post">
			<input type="text" name="textBuscar" id="textBuscar">
			<input type="button" id="btnBuscar" value="Buscar" class="button">
		</form>
		<p style="padding-left:5px">* Busque cualquier palabra que pueda contener una noticia.</p>
	</div>
</header><?php }} ?>
