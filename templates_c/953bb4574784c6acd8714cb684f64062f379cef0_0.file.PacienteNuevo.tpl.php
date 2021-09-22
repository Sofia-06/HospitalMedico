<?php
/* Smarty version 3.1.39, created on 2021-09-20 04:28:00
  from 'C:\xampp2\htdocs\HospitalPortlandVF\HospitalMedico\Secretaria\PacienteNuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6147f1b0458b48_78503280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '953bb4574784c6acd8714cb684f64062f379cef0' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\HospitalPortlandVF\\HospitalMedico\\Secretaria\\PacienteNuevo.tpl',
      1 => 1631843110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 2,
  ),
),false)) {
function content_6147f1b0458b48_78503280 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
<h1>Ingrese los datos del paciente</h1>
    <form  method="POST" action="?controller=Secre&method=PacienteN" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="nom">
          <label for="icon_prefix">Nombre</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="apel">
          <label for="icon_prefix">Apellido</label>
        </div>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="segurom">
          <label for="icon_prefix">¿Posee seguro?</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate" name="cel">
          <label for="icon_telephone">Teléfono</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">card_travel</i>
          <input id="icon_prefix" type="text" class="validate" name="medico">
          <label for="icon_prefix">Especialidad médica que necesita:</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">chrome_reader_mode</i>
          <input id="icon_telephone" type="tel" class="validate" name="idpersonal">
          <label for="icon_telephone">DPI</label>
        </div>
        <div class="input-field col s6">
        <i class="material-icons prefix">evento</i>
            <input id="Fecha" type="date" class="validate" required="" name="Fechan"/>
            <label for="Fecha">Fecha que desea</label>
        </div>
        <div class="input-field col s6">
        <i class="material-icons prefix">evento</i>
            <input id="Horario" type="time" class="timepicker" required="" name="Horario"/>
            <label for="Horario">Horario que desea:</label>
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
