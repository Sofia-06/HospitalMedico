<?php
/* Smarty version 3.1.39, created on 2021-09-18 03:55:14
  from 'C:\xamppp\htdocs\HospitalMedico\HospitalMedico\Doctor\CrearHistorial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614547020327e4_73088956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf276f52f4dda0334f4e874c2bef4d195fd56e40' => 
    array (
      0 => 'C:\\xamppp\\htdocs\\HospitalMedico\\HospitalMedico\\Doctor\\CrearHistorial.tpl',
      1 => 1631579840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_614547020327e4_73088956 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Crea el historial del paciente...</h1>
<form method="POST" action="?controller=Doc&method=CrearH" class="col s12">
<div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">chrome_reader_mode</i>
          <input id="dpi" type="tel" class="validate" name="dpi">
          <label for="dpi">DPI</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">accessibility</i>
            <input id="consulta" type="text" class="validate" name="consulta">
            <label for="consulta">Motivo de consulta:</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">add_alert</i>
            <input id="enf" type="text" class="validate" name="enf">
            <label for="enf">Enfermedad diagnosticada:</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">add_to_queue</i>
            <input id="test" type="text" class="validate" name="test">
            <label for="test">Examenes a realizar:</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">add_shopping_cart</i>
            <input id="medicina" type="text" class="validate" name="medicina">
            <label for="medicina">Medicamentos:</label>
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
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
