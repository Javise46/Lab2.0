<?php
/* Smarty version 4.0.4, created on 2022-05-09 05:17:18
  from 'C:\xampp\htdocs\Lab2\View\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_627887be021c57_26697138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '520e0832b52753586329d3825077f021f0177372' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Lab2\\View\\Home.tpl',
      1 => 1652066232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/Header.tpl' => 1,
    'file:Cabecera/Footer.tpl' => 1,
  ),
),false)) {
function content_627887be021c57_26697138 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabecera/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="card-panel teal lighten-2 "><h1 class="center-align">Bienvenido</h1> </div>
<br/><br/>
<div class="center-align">
<a href="?Controller=Direcciones&Method=login" class="waves-effect waves-light btn">
<i class="material-icons right">assignment_ind</i>Iniciar Sesion</a>

</div>
<br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>
<?php $_smarty_tpl->_subTemplateRender("file:Cabecera/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
