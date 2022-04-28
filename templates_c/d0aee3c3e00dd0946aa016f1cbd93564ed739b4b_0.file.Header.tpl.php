<?php
/* Smarty version 4.0.4, created on 2022-04-28 22:42:17
  from 'C:\xampp\htdocs\Lab2\View\Cabecera\Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_626afc29368493_17892941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0aee3c3e00dd0946aa016f1cbd93564ed739b4b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Lab2\\View\\Cabecera\\Header.tpl',
      1 => 1651178451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_626afc29368493_17892941 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Framework/Materialize/css/materialize.min.css"  media="screen,projection"/>
     
       <?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?>
       <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

      <?php } else { ?>
       Bienvenido
      <?php }?>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body><?php }
}
