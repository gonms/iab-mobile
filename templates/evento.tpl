{include 'header.tpl'}

<section>
	<h1 class="seccion-noticias">Evento</h1>
	{if $eventos.msg != ""}
		<h2>{$eventos.msg}</h2>
	{/if}
	<div class="evento">
		{$eventos.descripcion}
	</div>
	<form action="?" id="fForm" method="post">
		<label for="nombre">Nombre</label>
	   	<input type="text" name="nombre" id="nombre" size="27" />
	   	
	   	<label for="apellidos">Apellidos</label>
	    <input type="text" name="apellidos" id="apellidos" size="30" />
	    
	    <label for="nomEmpresa">Nombre de la Empresa</label>
	    <input type="text" name="nomEmpresa" id="nomEmpresa" size="27" />
	    
	    <label for="email">Correo Electrónico</label>
	    <input type="email" name="email" id="email" size="27" />
	    
	    <label for="telefono">Teléfono</label>
	    <input type="tel" name="telefono" id="telefono" size="11" />
		
		<p class="texto-gris">* Todos los campos obligatorios.</p>
	
		<p class="txtClausula">
			<input type="checkbox" name="acepto" id="acepto"> Acepto las <a id="aClausula cNaranjaBase">condiciones</a>
			<div id="dClausula" class="oculto"> 
				<p class="clausulaTxtCuerpo">
					Sus datos pasarán a formar parte de un fichero del que es responsable INTERACTIVE ADVERTISING BUREAU (IAB-Spain), con la finalidad de remitir información acerca de la Asociación, sus servicios y futuros eventos. Los usuarios cuyos datos sean objeto de tratamiento podrán ejercer gratuitamente los derechos de acceso, rectificación, cancelación y oposición de sus datos en los términos especificados en la Ley Orgánica 15/1999 de Protección de Datos de Carácter Personal, conforme al procedimiento legalmente establecido.
				</p>
			</div>
		</p>
		<p id="txtClausula" class="txtError oculto">Las condiciones deben ser aceptadas</p>
		<div class="center pad5">
			<a id="bEnviar" class="button" title="CERRAR">ENVIAR RESERVA</a>
		</div>
		<input type="hidden" name="evento" value="{$eventos.evento}" />
	</form>
</section>

{include 'footer.tpl'}