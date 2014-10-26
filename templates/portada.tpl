{include 'header.tpl'}

<section style="margin:2%">
	<h1 style="margin:4% 0;font-size:1.5em;color:#555555">Bienvenidos a <span style="color:#FEC627;">iab</span></h1>
	<div>
		<img src="http://www.iabspain.net/wp-content/uploads/2012/02/logo2-300x272-159x162.png" style="width:35%;float:left;margin-right:2%;"/>
		<p><strong>Asociación que representa al sector de la publicidad en medios digitales en España.</strong> 
			 					Esta organización engloba a los diferentes actores del panorama publicitario online:
								agencias de medios, agencias creativas, anunciantes, soportes, redes, empresas de 
								mobile marketing, de vídeo, de e-mail marketing, digital signage, buscadores, consultoras, 
								observadores, medios de comunicación y <a class="enlace" onclick="window.location.href='http://www.iabspain.net/interactive-advertising-bureau-iab-spain/';">Leer más...</a> </p>
	</div>
	
	{$calendario}
	<h2>Últimas noticias</h2>
	<ul>
	{foreach $noticias as $item}
	<li style="border-bottom:1px solid #fec627;padding-bottom:5px;">
		{if $item.imagen != ""}
		<img src="{$item.imagen}" style="float:left;width:35%;margin-right:2%;" />
		{/if}
		<h3><strong>{$item.titulo}</strong></h3>
		<p>{$item.entradilla}</p>
		<a class="button" style="display:block;width:20%;clear:both;" href="{$item.enlace}">LEER MÁS</a>
	</li>
	{/foreach}
	</ul>
</section>

{include 'footer.tpl'}