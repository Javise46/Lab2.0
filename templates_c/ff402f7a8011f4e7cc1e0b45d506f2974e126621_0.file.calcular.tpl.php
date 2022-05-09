<?php
/* Smarty version 4.0.4, created on 2022-05-09 06:14:10
  from 'C:\xampp\htdocs\Lab2\View\calcular.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_62789512b70627_84875357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff402f7a8011f4e7cc1e0b45d506f2974e126621' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Lab2\\View\\calcular.tpl',
      1 => 1652062295,
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
function content_62789512b70627_84875357 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabecera/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:Encabezados/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 
       <p>Perimetro <?php echo $_smarty_tpl->tpl_vars['respuesta']->value;?>
 cm</p>
       <p>Area <?php echo $_smarty_tpl->tpl_vars['respuesta1']->value;?>
 cm^2 </p>
       

        
   
<br>
<br>
        <div class="container" align="center">
            <a href="?Controller=Direcciones&Method=IrAreaPe"><input name ="Area y Perimetro"  type="submit" value="Area y Perimetro" class="waves-effect waves-light btn"></a>
        </div>
        <!-- Compiled and minified JavaScript -->
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"><?php echo '</script'; ?>
>
    <br>
    <br>




<?php $_smarty_tpl->_subTemplateRender("file:Cabecera/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
