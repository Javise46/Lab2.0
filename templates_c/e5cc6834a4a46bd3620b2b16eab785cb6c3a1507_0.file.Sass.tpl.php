<?php
/* Smarty version 4.0.4, created on 2022-05-09 05:08:59
  from 'C:\xampp\htdocs\Lab2\View\Sass.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_627885cb863021_50390514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5cc6834a4a46bd3620b2b16eab785cb6c3a1507' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Lab2\\View\\Sass.tpl',
      1 => 1652062320,
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
function content_627885cb863021_50390514 (Smarty_Internal_Template $_smarty_tpl) {
?>
        
<?php $_smarty_tpl->_subTemplateRender("file:Cabecera/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:Encabezados/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1 class="center"Cuenta registada</h1>

    <?php if ((isset($_smarty_tpl->tpl_vars['dato']->value))) {?>
      <h2 class="center">Info recibida: <?php echo $_smarty_tpl->tpl_vars['dato']->value;?>
</h2>


      <br>

      <table>
        <tr>
          <td>info</td>
        </tr>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['info']->value, 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
          </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

      </table>

      <br><br>

        <table>
        <tr>
          <td>nombre</td>
          <td>apellido</td>
        </tr>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuario']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['us']->value;?>
</td>
            
          </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

      </table>


    <?php }?>

 
<?php $_smarty_tpl->_subTemplateRender("file:Cabecera/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
