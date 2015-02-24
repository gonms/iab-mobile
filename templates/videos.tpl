{include 'header.tpl'}

<section>
	<h1 class="seccion-noticias">Canal TV</h1>
	<div>
		<img src="img/web-tv-home1.jpg" class="webtv" />
		<p class="webtv-texto">Un espacio dedicado al video, donde podrás ver entrevistas, encuentros, presentaciones y otros materiales de la Asociación.</p>
	</div>
	<div class="limpia"></div>
	<a name="video"></a>
	<div id="video"></div>
	<ul class="videos">
	{foreach $videos as $video}
	<li>
		<img src="{$video.imagen}" />
		<a href="#" class="aVideo" id="{$video.id}">{$video.titulo}</a>
		<p>Vistas: {$video.vistas}</p>
	</li>
	{/foreach}
	</ul>
</section>

{include 'footer.tpl'}
