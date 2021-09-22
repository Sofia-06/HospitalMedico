<?php
/* Smarty version 3.1.39, created on 2021-09-20 04:26:09
  from 'C:\xampp2\htdocs\HospitalPortlandVF\HospitalMedico\Cliente\AgendarCovid.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6147f141e53963_23637320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ef487df840af47c5402bb9588c7bae46d7aa53f' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\HospitalPortlandVF\\HospitalMedico\\Cliente\\AgendarCovid.tpl',
      1 => 1632095260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6147f141e53963_23637320 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
<h1>Agenda tu prueba de COVID-19</h1>
    <form  method="POST" action="?controller=Cliente&method=AgendCovid" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="nom" type="text" class="validate" name="nom">
          <label for="nom">Nombre</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="apelli" type="text" class="validate" name="apelli">
          <label for="apelli">Apellido</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="tel" type="tel" class="validate" name="tel">
          <label for="tel">Teléfono</label>
        </div>
        <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">evento</i>
            <input id="Fecha" type="date" class="validate" required="" name="Fecha"/>
            <label for="Fecha">Fecha que desea</label>
        </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input class="btn waves-effect waves-light" type="submit"   name="action"/>
            </div>
        </div>
        <div class="video-container">
          <iframe width="560" height="315" src="Recursos/videocorona.mp4" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
        </div>
      </div>
    </form>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
