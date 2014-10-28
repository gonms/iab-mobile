<?php /* Smarty version Smarty-3.1.15, created on 2014-10-28 14:04:57
         compiled from "templates/registro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:727199923544f8df80b1160-90571920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8824268b564e2a9f13bdf35fd539ca6a1a3cccaa' => 
    array (
      0 => 'templates/registro.tpl',
      1 => 1414501493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '727199923544f8df80b1160-90571920',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_544f8df80d0083_03743923',
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544f8df80d0083_03743923')) {function content_544f8df80d0083_03743923($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section>
	<h1 class="seccion-noticias">Asociados</h1> 
	<h2 class="titulo">Envío de datos</h2> 	
	<p><?php echo $_smarty_tpl->tpl_vars['result']->value['texto'];?>
</p>
</section>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
