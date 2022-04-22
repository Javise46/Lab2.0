<?php
/* Smarty version 4.0.4, created on 2022-03-16 17:13:40
  from 'C:\xampp\htdocs\Proyecto3\View\Componentes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_62320cb40c1183_82410436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6311d8b7c5c6b530d71de1a0fa1be7bfb64ef64b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto3\\View\\Componentes.tpl',
      1 => 1647447213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/Header.tpl' => 1,
    'file:Encabezados/Encabezado.tpl' => 1,
    'file:Encabezados/PiePagina.tpl' => 1,
    'file:Cabecera/Footer.tpl' => 1,
  ),
),false)) {
function content_62320cb40c1183_82410436 (Smarty_Internal_Template $_smarty_tpl) {
?>        
<?php $_smarty_tpl->_subTemplateRender("file:Cabecera/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:Encabezados/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1 class="center">Componentes</h1>

    <form method="post" action="?Controller=Datos&Method=Procesar">
        
        <div class="row">
            <div class="input-field col s6">
                <input  id="first_name2" Name="d" type="text" class="validate">
                <label class="active" for="first_name2">First Name</label>
            </div>

            <div class="input-field col s1">
                <input   type="submit" value="Enviar">
                
            </div>
        </div>
    </form>


   <?php $_smarty_tpl->_subTemplateRender("file:Encabezados/PiePagina.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Cabecera/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
