<?php
/* Smarty version 4.0.4, created on 2022-04-25 23:16:13
  from 'C:\xampp\htdocs\Lab2\View\Video.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_62670f9d83aa51_36596481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '565883c16c0716149016bfbb8a3e22eedf4ef86e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Lab2\\View\\Video.tpl',
      1 => 1650921367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/Header.tpl' => 1,
    'file:Encabezados/Encabezado.tpl' => 1,
    'file:Cabecera/Footer.tpl' => 1,
  ),
),false)) {
function content_62670f9d83aa51_36596481 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:Cabecera/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:Encabezados/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <div class="video-container">
<iframe width="560" height="315" src="https://www.youtube.com/embed/OQxpKeVF4dM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
 <?php $_smarty_tpl->_subTemplateRender("file:Cabecera/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
