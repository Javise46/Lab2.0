<?php
/* Smarty version 4.0.4, created on 2022-04-22 21:10:35
  from 'C:\xampp\htdocs\Lab1\View\Registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6262fdaba026b8_44512721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dcb895bbbedac25982530df046a01e4b8d4d5e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Lab1\\View\\Registro.tpl',
      1 => 1650654634,
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
function content_6262fdaba026b8_44512721 (Smarty_Internal_Template $_smarty_tpl) {
?>        
<?php $_smarty_tpl->_subTemplateRender("file:Cabecera/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:Encabezados/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1 class="center">Registro de cuenta de gmail</h1>

    <form method="post" action="?Controller=Datos&Method=Procesar">
        
        <div class="input-field col s12">
            <div class="input-field col s12">
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

<div >
   <?php $_smarty_tpl->_subTemplateRender("file:Encabezados/PiePagina.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Cabecera/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<?php }
}
