{include 'header.tpl'}

<section>
	<h1 class="seccion-portada">Bienvenidos a <span>iab</span></h1>
	<div>
		<img src="http://www.iabspain.net/wp-content/uploads/2012/02/logo2-300x272-159x162.png" class="logo" />
		<p><strong>Asociación que representa al sector de la publicidad en medios digitales en España.</strong> 
			 					Esta organización engloba a los diferentes actores del panorama publicitario online:
								agencias de medios, agencias creativas, anunciantes, soportes, redes, empresas de 
								mobile marketing, de vídeo, de e-mail marketing, digital signage, buscadores, consultoras, 
								observadores, medios de comunicación y <a class="enlace" onclick="window.location.href='http://www.iabspain.net/interactive-advertising-bureau-iab-spain/';">Leer más...</a> </p>
	</div>
	
	{$calendario}
	<h2>Últimas Noticias</h2>
	<ul class="noticias-portada">
	{foreach $noticias as $item}
	<li>
		{if $item.imagen != ""}
		<img src="{$item.imagen}" />
		{/if}
		<h3><strong>{$item.titulo}</strong></h3>
		<p>{$item.entradilla}...</p>
		<a class="button" href="/iab-mobile{$item.enlace}">LEER MÁS</a>
	</li>
	{/foreach}
	</ul>
</section>

{include 'footer.tpl'}