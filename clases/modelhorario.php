<?php
include_once "conexion.php";
class Horario{

  public $codhor;
  public $nomhor;
  public $coddoc;
  public $estado;
  public $fere;
  
  
  public function mostrar($tabla,$condicion){
      $consulta="SELECT horario.codhor, horario.nomhor, doctor.coddoc, doctor.dnidoc, doctor.nomdoc, doctor.apedoc, doctor.correo, horario.fere FROM horario INNER JOIN doctor ON  horario.coddoc = doctor.coddoc";

      $resultado=$this->db->query($consulta);
      while ($tabla=$resultado->fetchAll(PDO::FETCH_ASSOC)) {
          $this->horario[]=$tabla;
      }
      return $this->horario;
    }
    public function  insertar(Horario $data){
    try {
      $query="INSERT INTO horario (nomhor,coddoc,estado)VALUES(?,?,?)";

      $this->db->prepare($query)->execute(array($data->nomhor,$data->coddoc,$data->estado));

    }catch (Exception $e) {

      die($e->getMessage());
    }
    }
  
  public function actualizar($tabla,$data,$condicion){
      $consulta="UPDATE $tabla SET $data WHERE $condicion";
      $resultado=$this->db->query($consulta);
      if($resultado){
          return true;
      }else{
          return false;
      }
  }
  public function eliminar($tabla,$condicion){
      $consulta="DELETE FROM $tabla WHERE $condicion";
      $resultado=$this->db->query($consulta);
      if($resultado){
          return true;
      }else{
          return false;
      }
  }
}

 ?>
