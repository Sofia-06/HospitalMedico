<?php
/* Smarty version 3.1.39, created on 2021-09-20 04:27:19
  from 'C:\xampp2\htdocs\HospitalPortlandVF\HospitalMedico\templates\Secretaria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6147f1871ad5a4_04529906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59ae74a78bb3327f6ea1b0c71eb23c0772525e69' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\HospitalPortlandVF\\HospitalMedico\\templates\\Secretaria.tpl',
      1 => 1631899196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Secretaria/PacienteExistente.tpl' => 1,
    'file:Secretaria/PacienteNuevo.tpl' => 1,
    'file:Secretaria/Salas.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6147f1871ad5a4_04529906 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <nav>
        <div class="nav-wrapper #d1c4e9 deep-purple lighten-4">
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

        <div class="col s12">
        </div>
          <div class="col s12" align="center">  
            <?php if ((isset($_smarty_tpl->tpl_vars['rol']->value))) {?>
                <?php if ($_smarty_tpl->tpl_vars['rol']->value == 'pacex') {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:Secretaria/PacienteExistente.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'pacnue') {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:Secretaria/PacienteNuevo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'salas') {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:Secretaria/Salas.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php }?>
                <?php } else { ?>
                 <h1>Bienvenida Secretaria</h1>
                  <br/>
                  <br/>
                  <br/>
                <div class ="row">
                    <div class="input field col s12">
                    <a href="?controller=Secre&method=PacienteE" class="waves-effect waves-light btn-large"><i class="material-icons left">account_circle</i>Paciente ya existente</a>
                    </button>
                    </div>
                    <br/>
                <br/>
                <br/>
                <br/>
                </div> 
                <div class ="row">
                    <div class="input field col s12">
                    <a href="?controller=Secre&method=PacienteN" class="waves-effect waves-light btn-large"><i class="material-icons left">account_box</i>Paciente Nuevo</a>
                    </button>
                    </div>
                </div> 
                <br/>
                <div class ="row">
                    <div class="input field col s12">
                    <a href="?controller=Secre&method=Salas" class="waves-effect waves-light btn-large"><i class="material-icons left">account_box</i>Ver Salas</a>
                    </button>
                    </div>
                </div> 
         
            <?php }?>
        </div>
 </div>
                
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <footer class="page-footer #d1c4e9 deep-purple lighten-4">
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
