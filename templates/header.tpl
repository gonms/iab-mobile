
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
</header>