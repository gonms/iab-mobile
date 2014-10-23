<!DOCTYPE html>
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
</header>