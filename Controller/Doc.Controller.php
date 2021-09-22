<?php
    Class Doc
    {
        public $smarty;
        public $doctor;

        public function __construct()
        {
            $this->smarty=new Smarty();
            $this->doctor=new Doctor();
        }

        public function IngresoDoc()
        {
            $this->smarty->assign('title','Doctor');
            $this->smarty->display('Login.tpl');
        }

        public function BuscHist()
        {
            $array=array();
            if(isset($_POST['DPI']))
            {
                $dpi=$_POST['DPI'];
                $resultado=$this->doctor->BuscarHist($dpi);
                while($consulta=mysqli_fetch_assoc($resultado))
                {
                    array_push($array, $consulta);
                }
            }
            $this->smarty->assign('paci', $array);
            $this->smarty->assign('rol',"bushist");
            $this->smarty->assign('title','Buscar Historial');
            $this->smarty->display('Doctor.tpl');
        }

        public function CrearH()
        {
            
            if(isset($_POST['dpi']))
            {
                $dpi=$_POST['dpi'];
                $mconsul=$_POST['consulta'];
                $ediag=$_POST['enf'];
                $exam=$_POST['test'];
                $med=$_POST['medicina'];

            $this->doctor->CrearHist($dpi,$mconsul,$ediag,$exam,$med);
            }
            
            $this->smarty->assign('rol','crearhist');
            $this->smarty->assign('title','Crear Historial');
            $this->smarty->display('Doctor.tpl');
        }

        public function VerP()
        {
            $pacientes=$this->doctor->VerPaciente();
            //var_dump($pacientes);
            $array=array();
            while($fila=mysqli_fetch_assoc($pacientes)){
                array_push($array, $fila);
            }
            //var_dump($array);
            $this->smarty->assign('pacientes', $array);
            $this->smarty->assign('rol',"verpacientes");
            $this->smarty->assign('title','Ver Pacientes');
            $this->smarty->display('Doctor.tpl');
        }

        public function VerT()
        {
            $this->smarty->assign('rol',"verturnos");
            $this->smarty->assign('title','Ver Turnos');
            $this->smarty->display('Doctor.tpl');
        }
        public function ActSalas()
        {
            $salas=$this->doctor->VerSala();
            $arr=array();
            while($row=mysqli_fetch_assoc($salas))
            {
                array_push($arr,$row);
            }
            if(isset($_POST['estado']))
            {
                $est=$_POST['estado'];
                $s=$_POST['sala'];
                $this->doctor->ActuSalas($est,$s);
            }
            
            $this->smarty->assign('actualizarsalas', $arr);
            $this->smarty->assign('rol',"actsalas");
            $this->smarty->assign('title','Actualizar salas');
            $this->smarty->display('Doctor.tpl');
        }
    }
?>