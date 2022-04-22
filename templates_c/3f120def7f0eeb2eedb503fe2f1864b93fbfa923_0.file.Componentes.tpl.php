<?php
/* Smarty version 4.0.4, created on 2022-04-10 22:00:27
  from 'C:\xampp\htdocs\ModeloLab1\Lab1 Ejemplo\View\Componentes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6253375b690fc6_62121270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f120def7f0eeb2eedb503fe2f1864b93fbfa923' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ModeloLab1\\Lab1 Ejemplo\\View\\Componentes.tpl',
      1 => 1647447214,
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
function content_6253375b690fc6_62121270 (Smarty_Internal_Template $_smarty_tpl) {
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
