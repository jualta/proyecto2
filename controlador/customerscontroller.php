<?php
require_once '../clases/modelcustomers.php';
class customerscontroller{

    
    function mostrar(){
        $customers=new Customers();

        $dato=$customers->mostrar("customers", "1");
        require_once '../clases/customers/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../clases/customers/nuevo.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Customers();
                $alm->dnipa=$_POST['txtdnia'];
				$alm->nombrep=$_POST['txtnomb'];
				$alm->apellidop=$_POST['txtapell'];
				$alm->seguro=$_POST['cbosegu'];
				$alm->tele=$_POST['txttele'];
				$alm->sexo=$_POST['cbosex'];
				$alm->usuario=$_POST['txtusu'];
				$alm->password=$_POST['txtpass'];
				$alm->estado=$_POST['cboesta'];
				
                

     $this->model->insertar($alm);
     //-------------

          }

            //ELIMINAR
            function eliminar(){
                $codpaci=$_REQUEST['codpaci'];
                $condicion="codpaci=$codpaci";
                $customers=new Customers();
                $dato=$customers->eliminar("customers", $condicion);
                
            }

    }
