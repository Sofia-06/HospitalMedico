<?php
/* Smarty version 3.1.39, created on 2021-09-20 04:28:15
  from 'C:\xampp2\htdocs\HospitalPortlandVF\HospitalMedico\templates\Doctor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6147f1bf038cd3_96566553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '121cdb2d50da468ed52c094898376e48a0f7484b' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\HospitalPortlandVF\\HospitalMedico\\templates\\Doctor.tpl',
      1 => 1631901272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Doctor/BuscarHistorial.tpl' => 1,
    'file:Doctor/CrearHistorial.tpl' => 1,
    'file:Doctor/VerPacientes.tpl' => 1,
    'file:Doctor/VerTurnos.tpl' => 1,
    'file:Doctor/ActualizarSal.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6147f1bf038cd3_96566553 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <nav>
        <div class="nav-wrapper #b3e5fc light-blue lighten-4">
          <a href="" class="brand-logo">Hospital Portland</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="">Salir</a></li>
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

        <div class="col s12"  align="center">
            
            <?php if ((isset($_smarty_tpl->tpl_vars['rol']->value))) {?>
                <?php if ($_smarty_tpl->tpl_vars['rol']->value == 'bushist') {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:Doctor/BuscarHistorial.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'crearhist') {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:Doctor/CrearHistorial.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'verpacientes') {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:Doctor/VerPacientes.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'verturnos') {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:Doctor/VerTurnos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'actsalas') {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:Doctor/ActualizarSal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php }?>
                <?php } else { ?>
                  <div class="col 7" align="center">
                  <h1>Bienvenido Doctor</h1>
                  <div class ="row" align="center">
            <div class="input field col s12">
            <a href="?controller=Doc&method=BuscHist" class="waves-effect waves-light btn-large"><i class="material-icons left">account_circle</i>Buscar historial clínico</a>
            </button>
            </div>
        <br/>
        <br/>
        </div> 
        <div class ="row" align="center">
            <div class="input field col s12">
            <a href="?controller=Doc&method=CrearH" class="waves-effect waves-light btn-large"><i class="material-icons left">account_box</i>Crear historial clínico</a>
            </button>
            </div>
        </div> 
        <div class ="row" align="center">
            <div class="input field col s12">
            <a href="?controller=Doc&method=VerP" class="waves-effect waves-light btn-large"><i class="material-icons left">account_circle</i>Ver Pacientes</a>
            </button>
            </div>
        <br/>
        <br/>
        </div> 
        <div class ="row" align="center">
            <div class="input field col s12">
            <a href="?controller=Doc&method=VerT" class="waves-effect waves-light btn-large"><i class="material-icons left">account_box</i>Ver Turnos</a>
            </button>
            </div>
        </div>
        <div class ="row" align="center">
            <div class="input field col s12">
            <a href="?controller=Doc&method=ActSalas" class="waves-effect waves-light btn-large"><i class="material-icons left">account_box</i>Actualizar salas</a>
            </button>
            </div>
        </div>
                  </div>
            <?php }?>
        </div>
        
 </div>
 </div>
 
 
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>

 <footer class="page-footer #b3e5fc light-blue lighten-3">
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
