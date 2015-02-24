{include 'header.tpl'}



<section>

	<h1 class="seccion-portada">Bienvenidos a <span>iab</span></h1>

	<div>
		<img src="http://www.iabspain.net/wp-content/uploads/2012/02/logo2-300x272-159x162.png" class="logo" />

		<p class="intro">IAB es la principal asociación de marketing, publicidad y comunicación digital en el mundo, presente en 45 países desde hace más de 15 años. Con más de 200 empresas asociadas en España, trabajamos en 18 comisiones haciendo Investigación, Formación, Eventos y Acciones Especiales. <a href="asociados">Únete a nosotros</a></p>
		<iframe src="http://www.dailymotion.com/embed/video/xxmmjl" frameborder="0" width="100%" height="240"></iframe>
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

		<!--<p>{$item.entradilla}...</p>-->

		<a class="button" href="{$item.enlace}">LEER MÁS</a>

		<div class="limpia"></div>

	</li>

	{/foreach}

	</ul>
	<a class="button" href="category/noticias" style="width:100%;">TODAS LAS NOTICIAS</a>

	

	<h2>TWITTER: IAB_SPAIN</h2>

	<ul class="tweets">

	{foreach $tweets as $tweet}

	<li>

		{$tweet.texto}

	</li>

	{/foreach}

	</ul>

	

	<a href="https://twitter.com/IAB_Spain" class="twitter-follow-button" data-show-count="false" data-lang="es" data-size="large">Seguir a @IAB_Spain</a>

<script>!function(d,s,id){ldelim}var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){ldelim}js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);{rdelim}{rdelim}(document, 'script', 'twitter-wjs');</script>

</section>



{include 'footer.tpl'}

