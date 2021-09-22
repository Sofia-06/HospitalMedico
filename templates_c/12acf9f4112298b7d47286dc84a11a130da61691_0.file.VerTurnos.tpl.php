<?php
/* Smarty version 3.1.39, created on 2021-09-20 04:29:54
  from 'C:\xampp2\htdocs\HospitalPortlandVF\HospitalMedico\Doctor\VerTurnos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6147f222076c38_07568986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12acf9f4112298b7d47286dc84a11a130da61691' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\HospitalPortlandVF\\HospitalMedico\\Doctor\\VerTurnos.tpl',
      1 => 1631901056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6147f222076c38_07568986 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
<div class="col 7"  align="center">
<h1>Ver turnos durante el mes de Septiembre</h1>

<img class="responsive-img" src="Recursos/horarios2.jpeg">
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
