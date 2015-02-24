{include 'header.tpl'}

<section>
	<h1 class="seccion-noticias">Noticias</h1>
	<h2 class="titulo">{$noticias.titulo}</h2>
	<p class="fecha">Escrito el {$noticias.fecha}</p>
	<div class="cuerpo">
		{$noticias.cuerpo}
	</div>
	<a class="button" href="#" onclick="javascript:window.history.back();">VOLVER</a>
</section>

{include 'footer.tpl'}