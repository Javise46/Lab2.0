<?php
/* Smarty version 4.0.4, created on 2022-05-09 04:10:31
  from 'C:\xampp\htdocs\Lab2\View\Cabecera\Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_627878175356a8_91163612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0aee3c3e00dd0946aa016f1cbd93564ed739b4b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Lab2\\View\\Cabecera\\Header.tpl',
      1 => 1652062175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627878175356a8_91163612 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
 <head>
   <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">     
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
   <title>
     <?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?>
       <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

     <?php } else { ?>
       Home
     <?php }?>
   </title>
  </head>
 <body><?php }
}
