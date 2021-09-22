<?php
Class Doctor
{
    public $con;
    public function __construct()
    {
        $this->con=new Conexion();
    }

    public function VerSala()
    {
          $query="SELECT * FROM `salas`;";
          $resultado=$this->con->query($query);
          $this->con->close();
          return $resultado;
    }


    public function ActuSalas($est,$s)
    {
      $conexion=new Conexion();
        $query="UPDATE `salas` SET `Estado` = '$est' WHERE `idSalas` = '$s';";
        $resultado=$conexion->query($query);
        $conexion->close();
        return $resultado;
    }

    public function CrearHist($dpi,$mconsul,$ediag,$exam,$med)
    {
      $query="INSERT INTO `crearh`(`dpi`, `mconsulta`, `diagnostico`, `examenes`, `medicina`) VALUES ('$dpi','$mconsul','$ediag','$exam','$med');";
      $resultado=$this->con->query($query);
      $this->con->close();
      return $resultado;
    }
    public function VerPaciente()
    {
      $query="SELECT * FROM `clientes`;";
      $resultado=$this->con->query($query);
      $this->con->close();
      return $resultado;
    }
    public function BuscarHist($DPI)
    {
      $query="SELECT * FROM `crearh` WHERE `DPI`='$DPI';";
      $resultado=$this->con->query($query);
      $this->con->close();
      return $resultado;
    }
}
?>