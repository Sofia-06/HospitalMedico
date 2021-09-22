<?php
/* Smarty version 3.1.39, created on 2021-09-20 04:23:24
  from 'C:\xampp2\htdocs\HospitalPortlandVF\HospitalMedico\templates\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6147f09c704409_82692189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9f27d2a0970789844695a1a6cd37ca4f34f4389' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\HospitalPortlandVF\\HospitalMedico\\templates\\Home.tpl',
      1 => 1630802840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6147f09c704409_82692189 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<nav>
        <div class="nav-wrapper #ffeb3b yellow">
          <a href="" class="brand-logo">Hospital Portland</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
          </ul>
        </div>
      </nav>

      <br/>
      <br/>
      <br/>
    <div align="center">
    <h1>¡Bienvenido a Hospital Portland!</h1>
    <h3> Elige que rol eres...</h3>
    </div>

    <div class="card-panel #eeff41 lime accent-1"></div>
<div class="center-align">
    <div class="container">

        <div background= "red ligten-3"></div>
    
        <div class ="row">
            <div class="input field col s12">
            <a href="?controller=Cliente&method=Ingreso" class="waves-effect waves-light btn-large"><i class="material-icons left">people_outline</i>Cliente</a>
            </button>
            </div>
        </div> 
        <div class ="row">
            <div class="input field col s12">
            <a a href="?controller=Secre&method=IngresoSecre" class="waves-effect waves-light btn-large"><i class="material-icons left">contact_mail</i>Secretaria</a>
        </button>
            </div>
        </div> 
        <div class ="row">
            <div class="input field col s12">
            <a a href="?controller=Doc&method=IngresoDoc" class="waves-effect waves-light btn-large"><i class="material-icons left">add_box</i>Doctor</a>
        </button>
            </div>
        </div> 
    </div>
</div>

<footer class="page-footer #ffeb3b yellow">
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
