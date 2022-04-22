<?php
/* Smarty version 4.0.4, created on 2022-04-10 22:22:18
  from 'C:\xampp\htdocs\ModeloLab1\Lab1 Ejemplo\View\DPInumber.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_62533c7a2d64a0_65505597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5c4645db06d8b2181467355c0b64dcd4531c4ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ModeloLab1\\Lab1 Ejemplo\\View\\DPInumber.tpl',
      1 => 1649622136,
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
function content_62533c7a2d64a0_65505597 (Smarty_Internal_Template $_smarty_tpl) {
?>        
<?php $_smarty_tpl->_subTemplateRender("file:Cabecera/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:Encabezados/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1 class="center">Coloque su numero de DPI</h1>

    <form method="post" action="?Controller=Datos&Method=Procesar">
        
        <div class="row">
            <div class="input-field col s6">
                <input  id="first_name2" Name="d" type="number" class="validate">
                <label class="active" for="first_name2">Ingrese su numero de DPI</label>
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
