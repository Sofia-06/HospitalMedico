<?php
    class User
    {
        public $usuario;
        public $smarty;

       public function __construct()
       {
           $this->usuario=new Usuario();
           $this->smarty=new Smarty();
       }

       public function BuscarUsuario()
       {
           $user=$_POST['nombre'];
           $pass=$_POST['pass'];

           $u=$this->usuario->BuscarUsuario($user, $pass);

           if($u-> num_rows==1)
           {
                $arr=array();

                while($fila= mysqli_fetch_assoc($u))
                {
                    array_push($arr, $fila);
                }
                if($arr[0]['Rol_idRol']==1)
                {
                    $this->smarty->assign('title','Secretaria');
                    $this->smarty->display('Secretaria.tpl');
                }
                else if($arr[0]['Rol_idRol']==2)
                {
                    $this->smarty->assign('title','Doctor');
                    $this->smarty->display('Doctor.tpl');
                }
                else 
                {
                    echo "sin rol";
                }
            }
           else if($u->num_rows>1)
           {
               $this->smarty->assign('title', 'Home');
               $this->smarty->display('Home.tpl');
           }
           else
           {
                $this->smarty->assign('title', 'Home');
                $this->smarty->display('Home.tpl');
           }
        }
       
    }
    //usado 
?>