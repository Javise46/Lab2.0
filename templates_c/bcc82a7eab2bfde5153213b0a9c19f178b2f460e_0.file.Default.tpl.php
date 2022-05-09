<?php
/* Smarty version 4.0.4, created on 2022-05-09 05:23:22
  from 'C:\xampp\htdocs\Lab2\View\Default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6278892a081700_82283566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcc82a7eab2bfde5153213b0a9c19f178b2f460e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Lab2\\View\\Default.tpl',
      1 => 1652066596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/Header.tpl' => 1,
    'file:Encabezados/EncabezadoInicio.tpl' => 1,
    'file:Cabecera/Footer.tpl' => 1,
  ),
),false)) {
function content_6278892a081700_82283566 (Smarty_Internal_Template $_smarty_tpl) {
?>
        
<?php $_smarty_tpl->_subTemplateRender("file:Cabecera/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:Encabezados/EncabezadoInicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<br/><br/>
                 <div class="center">
                 <?php if ((isset($_smarty_tpl->tpl_vars['msn']->value))) {?>
                    <h3><?php echo $_smarty_tpl->tpl_vars['msn']->value;?>
</h1>
                    <?php } else { ?>
                        <h3></h3>
                 <?php }?>    
                 </div>               
                 <form method="post" action="?Controller=Usuario&Method=login" >
                      <div class = "center">
                            <div  class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input  type="text" name="nombre" placeholder="Ingrese su Usuario">   
                                                               
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">lock</i>
                                        <input type="password" name="pass" placeholder="Ingrese su Contraseña">                                   
                               </div>
                            </div>
                      </div>
                      <div class = "center">
                         <input class="waves-effect waves-light btn " type= "submit" value="Ingresar">
                      </div>                   
                 </form>
              </div>
              </div>
                </div>
                <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>
<?php $_smarty_tpl->_subTemplateRender("file:Cabecera/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
