<?php
    Class Cliente
    {
        public $cli;
        public $smarty;

        public function __construct()
        {
            $this->cli=new Cli();
            $this->smarty=new Smarty();
        }

        public function Ingreso()
        {
            $this->smarty->assign('title','Cliente');
            $this->smarty->display('Cliente.tpl');
        }

        public function AgendCita()
        {
            if(isset($_POST['nombre'])){
                $nom=$_POST['nombre'];
                $apel=$_POST['apellido'];
                $tel=$_POST['celular'];
                $seg=$_POST['seguro'];
                $idper=$_POST['dpi'];
                $espemedica=$_POST['espmed'];
                $fech=$_POST['fecha'];
                $hora=$_POST['hora'];

                $this->cli->AgendarCita($nom,$apel,$tel,$seg,$idper,$espemedica,$fech,$hora);
            }

            $this->smarty->assign('rol','agendCita');
            $this->smarty->assign('title','Agendar Cita');
            $this->smarty->display('Cliente.tpl');
        }

        public function AgendCovid()
        {
            if(isset($_POST['nom']))
            {
                $nomb=$_POST['nom'];
                $ape=$_POST['apelli'];
                $tele=$_POST['tel'];
                $fec=$_POST['Fecha'];

                $this->cli->ACovid($nomb,$ape,$tele,$fec);
            }
            

            $this->smarty->assign('rol','agendCovid');
            $this->smarty->assign('title','Agendar Prueba COVID-19');
            $this->smarty->display('Cliente.tpl');
        }

        public function Ubicaciones()
        {
            $this->smarty->assign('rol',"ubicaciones");
            $this->smarty->assign('title','Ubicaciones');
            $this->smarty->display('Cliente.tpl');
        }

    }
?>