<?php
/* Smarty version 3.1.39, created on 2021-09-22 05:34:54
  from 'C:\xamppp\htdocs\HospitalMedico\HospitalMedico\Doctor\BuscarHistorial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614aa45ec977d8_61777348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a48c3c7ebc35b7d0b6237d19e0928f8efa02f11' => 
    array (
      0 => 'C:\\xamppp\\htdocs\\HospitalMedico\\HospitalMedico\\Doctor\\BuscarHistorial.tpl',
      1 => 1632281693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_614aa45ec977d8_61777348 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container" align="center">
<div class="col 7" align="center">
<h1>Ingresa el DPI del Paciente....</h1>
<form  method="POST" action="?controller=Doc&method=BuscHist">
  <div class="input-field col s6">
          <i class="material-icons prefix">chrome_reader_mode</i>
          <input id="icon_telephone" type="tel" class="validate" name="DPI">
          <label for="icon_telephone">DPI</label>
          
        </div>
        
        <div class="row">
            <div class="input-field col s6">
                <input class="btn waves-effect waves-light" type="submit"  name="action"/>
            </div>
            <br/>
        </div>
  </div>
</form>
<table class="striped">
    <thead>
      <tr>
        <th>DPI</th>
        <th>Diagnóstico</th>
        <th>Medicamentos</th>
        <th>Exámenes</th>
      </tr>
    </thead>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paci']->value, 'h');
$_smarty_tpl->tpl_vars['h']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['h']->value) {
$_smarty_tpl->tpl_vars['h']->do_else = false;
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['h']->value['dpi'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['h']->value['diagnostico'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['h']->value['medicina'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['h']->value['examenes'];?>
</td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  
</body>


</table>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
