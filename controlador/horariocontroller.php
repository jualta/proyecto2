<?php
require_once '../clases/modelhorario.php';
class horariocontroller{

    
    function mostrar(){
        $horario=new Horario();

        $dato=$horario->mostrar("horario", "1");
        require_once '../vistas/horario/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../vistas/horario/nuevo.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Horario();
                $alm->nomhor=$_POST['txtnomhor'];
               
                

     $this->model->insertar($alm);
     //-------------

          }

            //ELIMINAR
            function eliminar(){
                $codhor=$_REQUEST['codhor'];
                $condicion="codhor=$codhor";
                $horario=new Horario();
                $dato=$horario->eliminar("horario", $condicion);
                
            }

    }
