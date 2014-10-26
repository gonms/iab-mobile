{include 'header.tpl'}

<section>
	<h1 class="seccion-noticias">Noticias</h1>
	<ul class="noticias">
	{foreach $noticias as $item}
	<li>
		<h2>{$item.titulo}</h2>
		<p>Escrito el {$item.fecha}</p>
		{if $item.imagen != ""}
		<img src="{$item.imagen}" />
		{/if}
		<h3>{$item.entradilla}</h3>
		<a class="button" href="{$item.enlace}">LEER MÁS</a>
	</li>
	{/foreach}
	</ul>
</section>

{include 'footer.tpl'}