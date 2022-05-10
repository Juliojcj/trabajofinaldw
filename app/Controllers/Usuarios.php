<?php 
namespace App\Controllers;

use App\Models\Usuario;
use CodeIgniter\Controller;

class Usuarios extends Controller{


    public function iniciarSesion(){
        $usuario = $this->request->getVar('txtUsuario');
        $contra = $this->request->getVar('txtContra');

        $resultado ="select * from usuarios where usuario='". $usuario . "' and contra ='". $contra ."'";
            $conexion =db_connect();

            $ejecutar = $conexion->query($resultado);

            $cantidad = $ejecutar->getNumRows();

                if ($cantidad > 0){
                    $usuario = $ejecutar->getRow(0);

                    if ($usuario->tipousuario_id == 1){
                        return view('menu/menu_admi');
                        //echo "ir al menu de administrador";

                    }elseif ($usuario->tipousuario_id == 2){
                        return view('menu/menu_encargado');
                        //echo "ir al menu bibliotecario";

                    }elseif ($usuario->tipousuario_id == 3){
                        return view('menu/menu_operador');
                        //echo "ir al menu de operador";

                    }else {
                        return view('usuarios/usuario');
                        echo "regresar al inicio de sesión";

                    }
                }else{
                    echo "Datos incorrectos";
                    return view('usuarios/usuario');

                }
        
            
    }

    public function cargarInternautas(){
        $usuario = new Usuario();
        
        $datos['usuarios'] = $usuario-> orderBy('dpi' , 'ASC')->findAll();
            return view('administradores/administrador', $datos);
    }
    
    public function eliminarUsuarios($codigo=null){
       
        $usuario = new Usuario();
        $usuario->delete($codigo);
       
        $datos['usuarios']=$usuario->orderBy('dpi','ASC')->findAll();
        
        return view('administradores/administrador', $datos);
        
    }
    
    public function verformularioUsuarios(){
        return view('administradores/nuevo');
    }
    public function guardarUsuario(){
        $usuario = new Usuario();

        $txtDpi =$this->request->getVar('txtDpi');
        $txtUsuario =$this->request->getVar('txtUsuario');
        $txtContraseña =$this->request->getVar('txtContra');
        $txtTipo =$this->request->getVar('txtTipousuario_id');

        $datos=[
            'dpi'=>$txtDpi,
            'usuario'=>$txtUsuario,
            'contra'=>$txtContraseña,
            'tipousuario_id'=>$txtTipo
        ];
        $usuario->insert($datos);

        $datos['usuarios']=$usuario->orderBy('dpi' , 'ASC')->findAll();
        return view('administradores/administrador', $datos);
    }

    public function frmModificarUsuarios($codigo=null){
        $usuario = new Usuario();
        $datos['usuario']=$usuario->where('dpi',$codigo)->first();
        return view('administradores/actualizar', $datos);
    }
    public function modificarUsuarios(){

        $usuario = new Usuario();

        $txtDpi =$this->request->getVar('txtDpi');
        $txtUsuario =$this->request->getVar('txtUsuario');
        $txtContraseña =$this->request->getVar('txtContra');
        $txtTipo =$this->request->getVar('txtTipousuario_id');

        $datos=[
            'usuario'=>$txtUsuario,
            'contra'=>$txtContraseña,
            'tipousuario_id'=>$txtTipo
        ];
        $usuario->update($txtDpi,$datos);

        
        $datos['usuarios']=$usuario->orderBy('dpi','ASC')->findAll();
        
        return view('administradores/administrador', $datos);
    }

   

}