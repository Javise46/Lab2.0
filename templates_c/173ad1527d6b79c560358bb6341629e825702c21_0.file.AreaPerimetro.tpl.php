<?php
/* Smarty version 4.0.4, created on 2022-04-28 23:14:09
  from 'C:\xampp\htdocs\Lab2\View\AreaPerimetro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_626b03a165a302_22572926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '173ad1527d6b79c560358bb6341629e825702c21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Lab2\\View\\AreaPerimetro.tpl',
      1 => 1651180447,
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
function content_626b03a165a302_22572926 (Smarty_Internal_Template $_smarty_tpl) {
?>
        
<?php $_smarty_tpl->_subTemplateRender("file:Cabecera/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:Encabezados/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
        <title>Proyecto 5to.BACO</title>
   
    <div class="container">
        <h1 align="center">Area y Perimetro</h1>
    </div>
    <br><br>

    <form method="post" action="?Controller=areaperimetro&Method=areaPerimetro">
        <div class="row">
            
            <div class="input-field col s6">
                <input name="n1" id="n1" type="number" >
                <label class="active" for="n1">Base</label>
            </div>
            <div class="input-field col s6">
                <input name="n2" id="n2" type="number">
                <label class="active" for="n2">Altura</label>
            </div>
        </div>
        <div class="container" align="center"> 
            <br><br>
            <input name="operacion"  type="submit" value="Cuadrado" class="waves-effect waves-light btn">
            <input name="operacion"  type="submit" value="Rectangulo
            " class="waves-effect waves-light btn">
        </div>
        
        
    </form>
    <?php echo '<script'; ?>
>
        document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });
    <?php echo '</script'; ?>
>
     <!-- Compiled and minified JavaScript -->
     <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"><?php echo '</script'; ?>
>
            

        
  <?php $_smarty_tpl->_subTemplateRender("file:Encabezados/PiePagina.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender("file:Cabecera/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
