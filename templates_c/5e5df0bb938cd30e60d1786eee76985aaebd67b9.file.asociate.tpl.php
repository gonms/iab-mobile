<?php /* Smarty version Smarty-3.1.15, created on 2014-10-28 13:35:04
         compiled from "templates/asociate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:573510359544e348faa4688-33994308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e5df0bb938cd30e60d1786eee76985aaebd67b9' => 
    array (
      0 => 'templates/asociate.tpl',
      1 => 1414499420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '573510359544e348faa4688-33994308',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_544e348fac9221_27781553',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544e348fac9221_27781553')) {function content_544e348fac9221_27781553($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section>
	<h1 class="seccion-noticias">Asociados</h1> 
	<h2 class="titulo">Beneficios</h2> 
	
	<h3 class="seccion">Principales Servicios para los Socios</span>
	
	<h4>Investigación</h4>
	<ul class="asociados"> 
		<li>Estudio de inversión IAB-PWC</li> 
		<li>Otros estudios : Mobile Marketing, Redes Sociales, eficacia de formatos, eyetracking...</li>
	</ul>
		
	<h4>Formación</h4>
	<ul class="asociados">
		<li>Desayunos temáticos</li>
		<li>IAB University</li>
		<li>Master de Publicidad Interactiva IAB-UCM</li>
		<li>Curso superior en Medios Sociales IAB-wholeSOCIAL</li>
		<li>Curso superior en Medios Sociales IAB-wholeSOCIAL INTENSE (Barcelona)</li>
		<li>Curso superior en Mobile Business</li> 
		<li>Curso Domina WordPress</li> 
	</ul> 
		
	<h4>Marketing</h4> 
	<ul class="asociados">
		<li>Comisiones de trabajo</li> 
		<li>Guías y estándares</li> 
	</ul>
		
	<h4>Eventos</h4>
	<ul class="asociados">
		<li>Festival de Publicidad y Comunicación Digital Inspirational</li>
		<li>Congreso de Regulación Digital</li> 
		<li>Jornada de Vídeo Online</li>
		<li>Jornada de Mobile Marketing</li> 
		<li>Triangular Agencias-Anunciantes-Usuarios</li> 
		<li>Festival EL SOL</li>
		<li>Festival Interact Barcelona</li>
	</ul>
		
	<h4>Servicios jurídicos</h4>
	<ul class="asociados"> 
		<li>Consultas jurídicas</li>
		<li>Política activa de lobby</li>
	</ul>
	
	<h3 class="seccion">¿Por qué ser Socio? </h3>
	<ul class="asociados">
		<li>Por el networking</li>
		<li>Para recibir de primera mano, toda la información y las últimas tendencias de los principales actores del sector digital nacional e internacional.</li>
		<li>Para ser protagonista de las decisiones que dibujan el futuro del sector, defendiendo sus intereses y los propios de la empresa.</li>
		<li>Para dirigir las actividades de la Asociación a través de Working Groups, desde los cuales se lanzan al mercado documentos o recomendaciones útiles en la práctica diaria de la actividad.</li>
		<li>Para demostrar la eficacia del medio en beneficio del sector y las empresas asociadas.</li>
		<li>Para acceder de manera exclusiva a la Sección Restringida para socios, y conseguir todos los documentos y herramientas prácticas desarrolladas por IAB Spain.</li>
		<li>Para beneficiarse de todos los servicios y proyectos marcados por IAB Spain.</li>
		<li>Porque es el momento de los medios digitales y las empresas que apuestan por ellos.</li>
	</ul>
	
	<br />
	<a id="aAsociate" class="button" title="ASÓCIATE">ASÓCIATE</a>
	
	<div id="dAsociate" class="asociate oculto"> 
		<form action="/iab-mobile/asociados/registro" id="fForm" method="post">
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
				<a id="bEnviar" class="button" title="CERRAR">ENVIAR</a>
				<a id="bAsoClose" class="button" title="CERRAR">CERRAR</a>
			</div>
		</form>
	</div>
	<br />&nbsp;<br />
	<a class="button" href="#" onclick="javascript:window.history.back();">VOLVER</a>
</section>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
