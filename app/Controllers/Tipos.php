<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Tipo;
class Tipos extends Controller{
    public function cargarTipos(){
        $tipos = new Tipo();
        
        $datos['tipos'] = $tipos-> orderBy('tipousuario_id' , 'ASC')->findAll();
            return view('administradores/tiposusuarios', $datos);
    }

    public function verTipos(){
        return view('administradores/nuevotipo');
    }
    public function guardarTipos(){
        $tipos = new Tipo();

        $txtTipo =$this->request->getVar('txtTipousuario_id');
        $txtNombre =$this->request->getVar('txtNombre');

        $datos=[
            'tipousuario_id'=>$txtTipo,
            'nombre'=>$txtNombre
        ];
        $tipos->insert($datos);

        $datos['tipos']=$tipos->orderBy('tipousuario_id' , 'ASC')->findAll();
        return view('administradores/tiposusuarios', $datos);
    }

    public function frmModificarTipos($codigo=null){
        $tipos = new Tipo();

        $datos['tipo']=$tipos->where('tipousuario_id',$codigo)->first();
        return view('administradores/actualizartipo', $datos);
    }
    public function modificarTipos(){

        $tipos = new Tipo();

        $txtTipo =$this->request->getVar('txtTipousuario_id');
        $txtNombre =$this->request->getVar('txtNombre');

        $datos=[
            'tipousuario_id'=>$txtTipo,
            'nombre'=>$txtNombre
        ];
        $tipos->update($txtTipo,$datos);

        
        $datos['tipos']=$tipos->orderBy('tipousuario_id','ASC')->findAll();
        
        return view('administradores/tiposusuarios', $datos);
    }

    public function eliminarTipos($codigo=null){
       
        $tipos = new Tipo();
        $tipos->delete($codigo);
       
        $datos['tipos']=$tipos->orderBy('tipousuario_id','ASC')->findAll();
        
        return view('administradores/tiposusuarios', $datos);
        
    }
}