<?php
require_once '../clases/modeldoctor.php';
class doctorcontroller{
   
    function mostrar(){
        $doctor=new Doctor();

        $dato=$doctor->mostrar("doctor", "1");
        require_once '../vistas/doctor/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../vistas/doctor/nuevo.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Doctor();
                $alm->dnidoc=$_POST['txtdni'];
                $alm->nomdoc=$_POST['txtnomd'];
                $alm->apedoc=$_POST['txtapedo'];
				$alm->codespe=$_POST['cboespe'];
				$alm->sexo=$_POST['cbosex'];
				$alm->telefo=$_POST['txttele'];
				$alm->fechanaci=$_POST['txtfech'];
				$alm->correo=$_POST['txtcorr'];
				$alm->naciona=$_POST['cbonaci'];
				$alm->estado=$_POST['cboesta'];
				
                

     $this->model->insertar($alm);
     //-------------

          }

            //ELIMINAR
            function eliminar(){
                $coddoc=$_REQUEST['coddoc'];
                $condicion="coddoc=$coddoc";
                $doctor=new Doctor();
                $dato=$doctor->eliminar("doctor", $condicion);
                
            }

    }
