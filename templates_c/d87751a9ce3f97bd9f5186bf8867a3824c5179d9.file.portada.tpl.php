<?php /* Smarty version Smarty-3.1.15, created on 2014-10-23 17:39:45
         compiled from "templates\portada.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1576354491847573e34-75680457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd87751a9ce3f97bd9f5186bf8867a3824c5179d9' => 
    array (
      0 => 'templates\\portada.tpl',
      1 => 1414078783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1576354491847573e34-75680457',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_544918476c3db5_93582933',
  'variables' => 
  array (
    'noticias' => 0,
    'item' => 0,
    'calendario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544918476c3db5_93582933')) {function content_544918476c3db5_93582933($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['noticias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<h1><?php echo $_smarty_tpl->tpl_vars['item']->value['titulo'];?>
</h1>
<p><?php echo $_smarty_tpl->tpl_vars['item']->value['imagen'];?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['item']->value['entradilla'];?>
</p>
<?php } ?>

<?php echo $_smarty_tpl->tpl_vars['calendario']->value;?>

</body>
</html><?php }} ?>
