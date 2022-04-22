<?php
/* Smarty version 4.0.4, created on 2022-04-10 22:35:48
  from 'C:\xampp\htdocs\ModeloLab1\Lab1 Ejemplo\View\Registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_62533fa44d74f4_30873676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f94f24c455042432026b5dff1be8093041a945d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ModeloLab1\\Lab1 Ejemplo\\View\\Registro.tpl',
      1 => 1649622944,
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
function content_62533fa44d74f4_30873676 (Smarty_Internal_Template $_smarty_tpl) {
?>        
<?php $_smarty_tpl->_subTemplateRender("file:Cabecera/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:Encabezados/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1 class="center">Registro de cuenta de gmail</h1>

    <form method="post" action="?Controller=Datos&Method=Procesar">
        
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
             <input id="icon_prefix" type="text" class="validate">
               <label for="icon_prefix">Ingrese su cuenta de gmail</label>

               <div class="input-field col s12">
             <input id="password" type="password" class="validate">
              <label for="password">Ingrese su contraseña</label>

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
