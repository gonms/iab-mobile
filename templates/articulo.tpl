<?xml version="1.0" encoding="UTF-8"?>
<html>
	<body>
		<div class="meta">
			<div class="options" title="{$articulos.titulo}" lang="es" />
			<div class="moduleLog" section="Home" title="Home" />
            <div class="pageHead">
                <script type="text/javascript" src="https://platform.twitter.com/widgets.js"></script>
                <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
            </div>
		</div>
        
		<div class="moduleInclude" src="/include/footer.xml" />
        
        <div class="header">
            {if $seccion == "portada"}
			<div class="moduleVerbatim">
			    <script type="text/javascript">
					sas_pageid='55174/413269';
					sas_formatid=24078;
					sas_target='';
					sasmobile(sas_pageid,sas_formatid,sas_target);
				</script>
				<noscript>
					<a href="http://www3.smartadserver.com/call2/pubjumpmi/55174/413269/24078/M/[timestamp]/?" target="_blank">
					<img src="http://www3.smartadserver.com/call2/pubmi/55174/413269/24078/M/[timestamp]/?" border="0" alt="" />
					</a>
				</noscript>
			</div>
			{/if}

            {* politica de cookies 
            <div id="dCookies">
                Vanidad utiliza cookies propias y de terceros para mejorar tu experiencia de navegaci&oacute;n y realizar tareas de an&aacute;lisis. Al continuar con tu navegaci&oacute;n entendemos que das tu consentimiento a nuestra <a href='http://www.vanidad.es/politica-de-privacidad' skip='true'>pol&iacute;tica de cookies.</a>
                <p><input type="button" value="Continuar" name="btnCookies" id="btnCookies" /></p>
            </div>*}
            <div class="moduleVerbatim">
                <div id="fb-root"></div>
                <script>
                    (function(d, s, id)
                    {ldelim}
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
                        fjs.parentNode.insertBefore(js, fjs);
                    {rdelim}
                    (document, 'script', 'facebook-jssdk'));
                </script>
            </div>
            {include 'header.tpl' tag=$tagPubli}
        </div>
        
        <div style="content" class="content">
			<h2 style="title">
				{$articulos.titulo}
			</h2>
            <div class="moduleVerbatim">
                <div class="fb-like" data-href="{$articulos.url}" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                <a href="https://twitter.com/share" data-url="{$articulos.url}" data-counturl="{$articulos.url}" data-text="{$articulos.titulo}" class="twitter-share-button" data-count="horizontal" data-via=""></a>
                <div class="g-plusone" data-size="medium" data-href="{$articulos.url}"></div>
                <a href="http://www.pinterest.com/pin/create/button/?url={$articulos.url|escape:'url'}&media={$articulos.imagen|escape:'url'}&description={$articulos.titulo|escape:'url'}" class="pin-it-button" count-layout="horizontal"><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" /></a>
            </div>
			<div style="post-more">
				<span style="more"><a href="javascript:history.go(-1);">return</a></span>
				<div style="clear"></div>
			</div>
			<div style="linea02"></div>
			<div style="entrada">{$articulos.entradilla}</div>
			{$articulos.cuerpo}
			<div style="post-more">
				<span style="more"><a href="javascript:history.go(-1);">return</a></span>
				<div style="clear"></div>
			</div>
            <div class="moduleVerbatim">
                <script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
            </div>
        </div>
    </body>
</html>            