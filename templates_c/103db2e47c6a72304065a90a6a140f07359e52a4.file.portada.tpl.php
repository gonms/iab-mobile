<?php /* Smarty version Smarty-3.1.15, created on 2014-10-28 17:20:47
         compiled from "templates/portada.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1913759332544a02c25feca8-37163335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '103db2e47c6a72304065a90a6a140f07359e52a4' => 
    array (
      0 => 'templates/portada.tpl',
      1 => 1414513240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1913759332544a02c25feca8-37163335',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_544a02c2620318_83840805',
  'variables' => 
  array (
    'calendario' => 0,
    'noticias' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544a02c2620318_83840805')) {function content_544a02c2620318_83840805($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
	
	<?php echo $_smarty_tpl->tpl_vars['calendario']->value;?>

	<h2>Últimas Noticias</h2>
	<ul class="noticias-portada">
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['noticias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
	<li>
		<?php if ($_smarty_tpl->tpl_vars['item']->value['imagen']!='') {?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagen'];?>
" />
		<?php }?>
		<h3><strong><?php echo $_smarty_tpl->tpl_vars['item']->value['titulo'];?>
</strong></h3>
		<p><?php echo $_smarty_tpl->tpl_vars['item']->value['entradilla'];?>
...</p>
		<a class="button" href="/iab-mobile<?php echo $_smarty_tpl->tpl_vars['item']->value['enlace'];?>
">LEER MÁS</a>
		<div class="limpia"></div>
	</li>
	<?php } ?>
	</ul>
</section>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
