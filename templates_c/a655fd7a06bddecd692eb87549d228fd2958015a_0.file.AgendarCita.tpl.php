<?php
/* Smarty version 3.1.39, created on 2021-09-20 04:23:42
  from 'C:\xampp2\htdocs\HospitalPortlandVF\HospitalMedico\Cliente\AgendarCita.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6147f0aea85758_42748009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a655fd7a06bddecd692eb87549d228fd2958015a' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\HospitalPortlandVF\\HospitalMedico\\Cliente\\AgendarCita.tpl',
      1 => 1631840204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 2,
  ),
),false)) {
function content_6147f0aea85758_42748009 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
<h1>Agende su cita a continuación...</h1>
<br/>
    <!--<form >-->
    <form method="POST" action="?controller=Cliente&method=AgendCita" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="nombre" type="text" class="validate" name="nombre">
          <label for="nombre">Nombre</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="apellido" type="text" class="validate" name="apellido">
          <label for="apellido">Apellido</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="seguro">
          <label for="icon_prefix">¿Posee seguro?</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="celular" type="tel" class="validate" name="celular">
          <label for="celular">Teléfono</label>
        </div>
        <div class="input-field col s6">
        <i class="material-icons prefix">card_travel</i>
        <input id="espmed" type="text" class="validate" name="espmed">
        <label for="espmed">Especialidad médica</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">chrome_reader_mode</i>
          <input id="dpi" type="text" class="validate" name="dpi">
          <label for="dpi">DPI</label>
        </div>
        <div class="input-field col s6">
        <i class="material-icons prefix">evento</i>
            <input id="fecha" type="date" class="validate" required="" name="fecha"/>
            <label for="fecha">Fecha que desea</label>
        </div>
        <div class="input-field col s6">
        <i class="material-icons prefix">evento</i>
            <input id="Horario" type="time" class="timepicker" required="" name="hora"/>
            <label for="Horario">Horario que desea:</label>
        </div>
        </div>
        
        <div class="row">
            <div class="input-field col s6">
                <input class="btn waves-effect waves-light" type="submit"   name="action"/>
            </div>
        </div>
      </div>
    </form>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
