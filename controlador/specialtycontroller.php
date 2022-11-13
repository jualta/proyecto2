<?php
require_once '../clases/modelspecialty.php';
class specialtycontroller{

   
    function mostrar(){
        $specialty=new Specialty();

        $dato=$specialty->mostrar("specialty", "1");
        require_once '../vistas/specialty/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../vistas/specialty/nuevo.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Specialty();
                $alm->nombrees=$_POST['txtnomes'];
               
                

     $this->model->insertar($alm);
     //-------------


          }

            //ELIMINAR
            function eliminar(){
                $codespe=$_REQUEST['codespe'];
                $condicion="codespe=$codespe";
                $specialty=new Specialty();
                $dato=$specialty->eliminar("specialty", $condicion);            
            }

    }
