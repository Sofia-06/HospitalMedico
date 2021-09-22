<?php
  Class Secretaria
  {
    public $con;
    public function __construct()
    {
        $this->con=new Conexion();
    }

    public function PacienteNuevo($n,$a,$t,$s,$id,$esp,$f,$h)
    {
      $query="INSERT INTO `clientes`(`Nombre`, `Apellido`, `Telefono`, `Seguro`, `DPI`, `EspecialidadMedica`, `Fecha`, `Horario`) VALUES ('$n','$a','$t','$s','$id','$esp','$f','$h');";
      $consulta=$this->con->query($query);
      $this->con->close();
      return $consulta;
    }
    
    public function PacienteExis($DPI)
    {
      $query="SELECT * FROM `clientes` WHERE `DPI`='$DPI';";
      $resultado=$this->con->query($query);
      $this->con->close();
      return $resultado;
    }

    public function VerSalas()
    {
      $query="SELECT * FROM `salas`;";
      $resultado=$this->con->query($query);
      $this->con->close();
      return $resultado;
    }
    public function VerTurnos($DPI)
    {

      $query="SELECT * FROM `clientes` WHERE `DPI`='$DPI';";
      $resultado=$this->con->query($query);
      $this->con->close();
      return $resultado;
    }
  }
?>