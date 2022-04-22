<?php
/* Smarty version 4.0.4, created on 2022-04-10 22:00:27
  from 'C:\xampp\htdocs\ModeloLab1\Lab1 Ejemplo\View\Cabecera\Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6253375b78b519_07122997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a846e222f07a510b7a277bcbe57800872fb99aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ModeloLab1\\Lab1 Ejemplo\\View\\Cabecera\\Header.tpl',
      1 => 1647444244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6253375b78b519_07122997 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Framework/Materialize/css/materialize.min.css"  media="screen,projection"/>
      <?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
      <?php } else { ?>
        <title>Inicio</title>
      <?php }?>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body><?php }
}
