<?php /* Smarty version Smarty-3.1.15, created on 2014-10-26 19:04:34
         compiled from "templates/listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1109192989544d37b2e33e85-99308515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f69495528a178386cb5a3841c60e74ca533a77f0' => 
    array (
      0 => 'templates/listado.tpl',
      1 => 1414081124,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1109192989544d37b2e33e85-99308515',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'seccion' => 0,
    'tagPubli' => 0,
    'articulos' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_544d37b30339d4_08109745',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544d37b30339d4_08109745')) {function content_544d37b30339d4_08109745($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="UTF-8"<?php echo '?>';?>

<html>
	<body>
		<div class="meta">
			<div class="options" title="Revista Vanidad | Todas las tendencias actuales de moda, belleza y estilo de vida" lang="es" />
			<div class="moduleLog" section="Home" title="Home" />
            <div class="pageHead">
                <script type="text/javascript" src="https://platform.twitter.com/widgets.js"></script>
                <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
            </div>
		</div>
        
		<div class="moduleInclude" src="/include/footer.xml" />
        
        <div class="header">
            <?php if ($_smarty_tpl->tpl_vars['seccion']->value=="portada") {?>
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
			<?php }?>

            
            <div class="moduleVerbatim">
                <div id="fb-root"></div>
                <script>
                    (function(d, s, id)
                    {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                    (document, 'script', 'facebook-jssdk'));
                </script>
            </div>
            <?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tag'=>$_smarty_tpl->tpl_vars['tagPubli']->value), 0);?>

        </div>
        
        <div style="content" class="content">
        	<a name="top"></a>
            <ul id="listado_articulos">
        		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articulos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        		<li>
        			<div style="post-meta">
        				<span style="date"><?php echo $_smarty_tpl->tpl_vars['item']->value['fecha'];?>
</span>
        				<div style="clear"></div>
        			</div>
        			<div style="linea01"></div>
        			<h2 style="title">
        				<a output-style="color:black;" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['enlace'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['titulo'];?>
</a>
    				</h2>
    				<div style="articulo">
    					<?php if ($_smarty_tpl->tpl_vars['item']->value['recorte']!='') {?><img width="100%" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['recorte'];?>
"><?php }?>
    					<div style="entradilla"><?php echo $_smarty_tpl->tpl_vars['item']->value['entradilla'];?>
</div>
    				</div>
    				<div style="post-more">
        				<span style="more"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['enlace'];?>
">read more</a></span>
        				<div style="clear"></div>
        			</div>
        			<div style="linea01"></div>
        			<div style="end-article"></div>
        		</li>
        		<?php } ?>
        	</ul>
            <div class="moduleVerbatim">
                <script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
            </div>
        </div>
    </body>
</html>            <?php }} ?>
