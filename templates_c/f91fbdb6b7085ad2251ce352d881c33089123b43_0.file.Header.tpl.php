<?php
/* Smarty version 3.1.39, created on 2021-08-13 02:26:33
  from 'C:\xampp2\htdocs\HospitalMedico\Cabeceras\Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6115bc393eecb1_09469264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f91fbdb6b7085ad2251ce352d881c33089123b43' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\HospitalMedico\\Cabeceras\\Header.tpl',
      1 => 1628814388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6115bc393eecb1_09469264 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
  <html>
      <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="Framework/materialize/css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>
      <?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

        <?php } else { ?>
            Home
        <?php }?>
      </title>
      </head>
      <body>
  
<?php }
}
