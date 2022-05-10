<?php 
namespace App\Controllers;

use App\Models\Ciudadano;
use CodeIgniter\Controller;

class Ciudadanos extends Controller{
   
    public function cargarCiudadanos(){
        $ciudadanos = new Ciudadano();
        
        $datos['ciudadano'] = $ciudadanos-> orderBy('dpi' , 'ASC')->findAll();
                 return view('operadores/ciudadanos', $datos);
    }

    public function verCiudadanos(){
        return view('operadores/nuevo');
    }
    public function guardarCiudadanos(){
        $ciudadanos = new Ciudadano();

        $txtDpi=$this->request->getVar('txtDpi');
        $txtApellido=$this->request->getVar('txtApellido');
        $txtNombre=$this->request->getVar('txtNombre');
        $txtDireccion=$this->request->getVar('txtDireccion');
        $txtTelcasa=$this->request->getVar('txtTelcasa');
        $txtTelmovil=$this->request->getVar('txtTelmovil');
        $txtEmail=$this->request->getVar('txtEmail');
        $txtFecha=$this->request->getVar('txtFecha');
        $txtCodnivel=$this->request->getVar('txtCodnivel');
        $txtLugar=$this->request->getVar('txtLugar');

        $datos=[
            'dpi'=>$txtDpi,
            'apellido'=>$txtApellido,
            'nombre'=>$txtNombre,
            'direccion'=>$txtDireccion,
            'tel_casa'=>$txtTelcasa,
            'tel_movil'=>$txtTelmovil,
            'email'=>$txtEmail,
            'fechanac'=>$txtFecha,
            'cod_nivel_acad'=>$txtCodnivel,
            'lugar_nacimiento'=>$txtLugar

        ];
        $ciudadanos->insert($datos);

        $datos['ciudadano']=$ciudadanos->orderBy('dpi' , 'ASC')->findAll();
            return view('operadores/ciudadanos', $datos);
    }

    public function actualizarCiudadanos($codigo=null){
        $ciudadanos = new Ciudadano();

        $datos['personas']=$ciudadanos->where('dpi',$codigo)->first();
            return view('operadores/actualizar',$datos);
    }
    public function modificarCiudadanos(){
        $ciudadanos = new Ciudadano();

        $txtDpi=$this->request->getVar('txtDpi');
        $txtApellido=$this->request->getVar('txtApellido');
        $txtNombre=$this->request->getVar('txtNombre');
        $txtDireccion=$this->request->getVar('txtDireccion');
        $txtTelcasa=$this->request->getVar('txtTelcasa');
        $txtTelmovil=$this->request->getVar('txtTelmovil');
        $txtEmail=$this->request->getVar('txtEmail');
        $txtFecha=$this->request->getVar('txtFecha');
        $txtCodnivel=$this->request->getVar('txtCodnivel');
        $txtLugar=$this->request->getVar('txtLugar');

        $datos=[
            'dpi'=>$txtDpi,
            'apellido'=>$txtApellido,
            'nombre'=>$txtNombre,
            'direccion'=>$txtDireccion,
            'tel_casa'=>$txtTelcasa,
            'tel_movil'=>$txtTelmovil,
            'email'=>$txtEmail,
            'fechanac'=>$txtFecha,
            'cod_nivel_acad'=>$txtCodnivel,
            'lugar_nacimiento'=>$txtLugar

        ];

        $ciudadanos->update($txtDpi,$datos);

        $datos['ciudadano']=$ciudadanos->orderBy('dpi','ASC')->findAll();
        return view('operadores/ciudadanos',$datos);

    }

    public function eliminarCiudadanos($codigo=null){
        $ciudadanos=new Ciudadano();

        $ciudadanos->delete($codigo);

        $datos['ciudadano']=$ciudadanos->orderBy('dpi', 'ASC')->findAll();
        return view('operadores/ciudadanos', $datos);

    }
}