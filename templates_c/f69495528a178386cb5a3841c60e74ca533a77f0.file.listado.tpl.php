<?php /* Smarty version Smarty-3.1.15, created on 2014-10-26 20:16:36
         compiled from "templates/listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1109192989544d37b2e33e85-99308515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f69495528a178386cb5a3841c60e74ca533a77f0' => 
    array (
      0 => 'templates/listado.tpl',
      1 => 1414350768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1109192989544d37b2e33e85-99308515',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_544d37b30339d4_08109745',
  'variables' => 
  array (
    'noticias' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544d37b30339d4_08109745')) {function content_544d37b30339d4_08109745($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section style="margin:2%">
	<h1 class="seccion-noticias">Noticias</h1>
	<ul class="noticias">
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['noticias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
	<li>
		<h2><?php echo $_smarty_tpl->tpl_vars['item']->value['titulo'];?>
</h2>
		<p>Escrito el <?php echo $_smarty_tpl->tpl_vars['item']->value['fecha'];?>
</p>
		<?php if ($_smarty_tpl->tpl_vars['item']->value['imagen']!='') {?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagen'];?>
" />
		<?php }?>
		<h3><?php echo $_smarty_tpl->tpl_vars['item']->value['entradilla'];?>
</h3>
		<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['enlace'];?>
">LEER MÁS</a>
	</li>
	<?php } ?>
	</ul>
</section>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
