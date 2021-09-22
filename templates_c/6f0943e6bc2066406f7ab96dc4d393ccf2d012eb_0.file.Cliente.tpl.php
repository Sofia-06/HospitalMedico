<?php
/* Smarty version 3.1.39, created on 2021-09-20 04:23:40
  from 'C:\xampp2\htdocs\HospitalPortlandVF\HospitalMedico\templates\Cliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6147f0acf26de0_84463618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f0943e6bc2066406f7ab96dc4d393ccf2d012eb' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\HospitalPortlandVF\\HospitalMedico\\templates\\Cliente.tpl',
      1 => 1630803068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cliente/AgendarCita.tpl' => 1,
    'file:Cliente/AgendarCovid.tpl' => 1,
    'file:Cliente/Ubicaciones.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6147f0acf26de0_84463618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <nav>
        <div class="nav-wrapper #69f0ae green accent-2">
          <a href="" class="brand-logo">Hospital Portland</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
          </ul>
        </div>
      </nav>

      <br/>
      <br/>
      <br/>

 <div class="row" align="center">

        <div class="col 1">
        </div>

        
             
            <div class="container">
          <div class="col 7">
            <?php if ((isset($_smarty_tpl->tpl_vars['rol']->value))) {?>
                <?php if ($_smarty_tpl->tpl_vars['rol']->value == 'agendCita') {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:Cliente/AgendarCita.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'agendCovid') {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:Cliente/AgendarCovid.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'ubicaciones') {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:Cliente/Ubicaciones.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php }?>
            <?php } else { ?>
              <div class="col 7" align="center">
              <h1>¡Bienvenido a Hospital Portland!</h1>
              <h3>Elige lo que deseas hacer a continuación...</h3>
              <br/>
              <br/><div background= "red ligten-3"></div>
    
        <div class ="row">
            <div class="input field col s12">
            <a href="?controller=Cliente&method=AgendCita" class="waves-effect waves-light btn-large"><i class="material-icons left">event_note</i>Agendar cita médica</a>
            </button>
            </div>
        </div> 
        <div class ="row">
            <div class="input field col s12">
            <a href="?controller=Cliente&method=AgendCovid" class="waves-effect waves-light btn-large"><i class="material-icons left">dns</i>Agendar prueba COVID-19</a>
        </button>
            </div>
        </div> 
        <div class ="row">
            <div class="input field col s12">
            <a href="?controller=Cliente&method=Ubicaciones" class="waves-effect waves-light btn-large"><i class="material-icons left">location_on</i>Ubicaciones</a>
        </button>
            </div>
        </div> 
            <?php }?>
        </div>
        
    </div>
        </div>
        <div class="center-align">
    
</div>
 </div>
 <br/>
 <br/>
 <br/>
 <br/>
 <footer class="page-footer #69f0ae green accent-2">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">¿Sabias que...?</h5>
                <p class="grey-text text-lighten-4">El Hospital Portland es un hospital privado localizado en la zona 7 de ciudad de Guatemala, abierto las 24 horas. Contamos con un excelente servicio, además de nuestro excelente equipo de trabajo. El hospital Portland es uno de los más sobresalientes en nuestro país 
                gracias a nuestro amplio lugar de trabajo, contamos con distintas amenidades para la comodidad del paciente, al igual que un call center por cualquier emergencia del paciente disponible 24/7.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Redes sociales</h5>
                <ul>
                <li><a class="grey-text text-lighten-3">Para más información puedes contactarnos por medio de...</a></li>
                <li><a class="grey-text text-lighten-3">Teléfono: +502 3993 3972</a></li>
                <li><a class="grey-text text-lighten-3">Facebook: Hospital  Portland</a></li>
                <li><a class="grey-text text-lighten-3">Instagram: HospitalPortland.gt</a></li>
                <li><a class="grey-text text-lighten-3">Gmail:Porthospital@gmail.com</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2021 Copyright Text
            </div>
          </div>
        </footer>

<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
