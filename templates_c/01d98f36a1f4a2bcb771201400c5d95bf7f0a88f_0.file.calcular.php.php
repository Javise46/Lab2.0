<?php
/* Smarty version 4.0.4, created on 2022-04-28 21:20:14
  from 'C:\xampp\htdocs\Lab2\View\calcular.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_626ae8ee5eab39_57753040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01d98f36a1f4a2bcb771201400c5d95bf7f0a88f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Lab2\\View\\calcular.php',
      1 => 1651173611,
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
function content_626ae8ee5eab39_57753040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabecera/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:Encabezados/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<?php'; ?>

  $total = 0;
    $num1=$_POST['n1'];
    $num2=$_POST['n2'];
    $operacion=$_POST['operacion'];
        if($operacion == 'Rectangulo' || $operacion == 'Cuadrado' ){
            $total= ($num1 + $num2)*2;
            $total2 = ($num1 * $num2);
        }
       echo ("El perimetro es" $total);
       
        
        
    <?php echo '?>'; ?>

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

<?php $_smarty_tpl->_subTemplateRender("file:Encabezados/PiePagina.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender("file:Cabecera/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
