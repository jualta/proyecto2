<?php
require_once '../clases/modelusuarios.php';
class usuarioscontroller{


    function mostrar(){
        $usuarios=new Usuarios();

        $dato=$usuarios->mostrar("usuarios", "1");
        require_once '../vistas/usuarios/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../vistas/usuarios/nuevo.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Usuarios();
                $alm->nombre=$_POST['txtnombre'];
               
                

     $this->model->insertar($alm);
     //-------------

          }

            //ELIMINAR
            function eliminar(){
                $id=$_REQUEST['id'];
                $condicion="id=$id";
                $usuarios=new Usuarios();
                $dato=$usuarios->eliminar("usuarios", $condicion);
                
            }

    }
