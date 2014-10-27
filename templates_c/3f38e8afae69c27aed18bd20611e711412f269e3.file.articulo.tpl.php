<?php /* Smarty version Smarty-3.1.15, created on 2014-10-27 12:47:36
         compiled from "templates/articulo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:810755500544e2491673c74-26238491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f38e8afae69c27aed18bd20611e711412f269e3' => 
    array (
      0 => 'templates/articulo.tpl',
      1 => 1414410435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '810755500544e2491673c74-26238491',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_544e24916d0de1_40118466',
  'variables' => 
  array (
    'noticias' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544e24916d0de1_40118466')) {function content_544e24916d0de1_40118466($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section>
	<h1 class="seccion-noticias">Noticias</h1>
	<h2 class="titulo"><?php echo $_smarty_tpl->tpl_vars['noticias']->value['titulo'];?>
</h2>
	<p class="fecha">Escrito el <?php echo $_smarty_tpl->tpl_vars['noticias']->value['fecha'];?>
</p>
	<div class="cuerpo">
		<?php echo $_smarty_tpl->tpl_vars['noticias']->value['cuerpo'];?>

	</div>
	<a class="button" href="#" onclick="javascript:window.history.back();">VOLVER</a>
</section>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
