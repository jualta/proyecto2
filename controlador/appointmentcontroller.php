<?php
require_once '../clases/modelappointment.php';
class appointmentcontroller{

    
    function mostrar(){
        $appointment=new Appointment();

        $dato=$appointment->mostrar("appointment", "1");
        require_once '../vistas/appointment/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../vistas/appointment/AgregarModal.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Appointment();
                $alm->dates=$_POST['dates'];
                $alm->hour=$_POST['hour'];
                $alm->codpaci=$_POST['codpaci'];
				$alm->coddoc=$_POST['coddoc'];
				$alm->codespe=$_POST['codespe'];
				$alm->estado=$_POST['estado'];
				
				
                

     $this->model->insertar($alm);
     //-------------
          }

            //ELIMINAR
            function eliminar(){
                $codcit=$_REQUEST['codcit'];
                $condicion="codcit=$codcit";
                $appointment=new Appointment();
                $dato=$appointment->eliminar("appointment", $condicion);
                
            }

    }
