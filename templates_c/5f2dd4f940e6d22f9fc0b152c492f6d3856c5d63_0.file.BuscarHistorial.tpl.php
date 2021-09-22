<?php
/* Smarty version 3.1.39, created on 2021-09-20 04:28:17
  from 'C:\xampp2\htdocs\HospitalPortlandVF\HospitalMedico\Doctor\BuscarHistorial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6147f1c12c7ed7_92040378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f2dd4f940e6d22f9fc0b152c492f6d3856c5d63' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\HospitalPortlandVF\\HospitalMedico\\Doctor\\BuscarHistorial.tpl',
      1 => 1632094414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6147f1c12c7ed7_92040378 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Buscar historial clinico</h1>
<h4>Introduzca el DPI del paciente...</h4>
<div class="input-field col s6">
          <i class="material-icons prefix">chrome_reader_mode</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">DPI</label>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <input class="btn waves-effect waves-light" type="submit"  name="action"/>
            </div>
        </div>
            <br/>
            <table>
        <thead>
          <tr>
              <th>DPI</th>
              <th>Diagnóstico</th>
              <th>Medicamentos</th>
          </tr>
        </thead>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paci']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['dpi'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['diagnostico'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['medicina'];?>
</td>
            
          </tr>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        
      </table>
            
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
