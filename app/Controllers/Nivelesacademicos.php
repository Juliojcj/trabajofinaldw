<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Nivelesacademico;
class Nivelesacademicos extends Controller{
    public function cargarNiveles(){
        $niveles = new Nivelesacademico();
        
        $datos['nivel'] = $niveles-> orderBy('cod_nivel_acad' , 'ASC')->findAll();
            return view('encargados/nivelacad', $datos);
    }

    public function verNivel(){
        return view('encargados/nuevonivel');
    }
    public function guardarNivel(){
        $niveles = new Nivelesacademico();

        $txtCod=$this->request->getVar('txtCod');
        $txtNombre=$this->request->getVar('txtNombre');
        $txtDes=$this->request->getVar('txtDes');

        $datos=[
            'cod_nivel_acad'=>$txtCod,
            'nombre'=>$txtNombre,
            'descripcion'=>$txtDes
        ];
        $niveles->insert($datos);

        $datos['nivel']=$niveles->orderBy('cod_nivel_acad' , 'ASC')->findAll();
        return view('encargados/nivelacad',$datos);
    }

    public function veractualizarNivel($codigo=null){
        $niveles = new Nivelesacademico();

        $datos['nivel']=$niveles->where('cod_nivel_acad',$codigo)->first();
            return view('encargados/actualizarnivel',$datos);
    }
    public function actualizarNiveles(){
        $niveles = new Nivelesacademico();

        $txtCod=$this->request->getVar('txtCod');
        $txtNombre=$this->request->getVar('txtNombre');
        $txtDes=$this->request->getVar('txtDes');

        $datos=[
            'cod_nivel_acad'=>$txtCod,
            'nombre'=>$txtNombre,
            'descripcion'=>$txtDes
        ];

        $niveles->update($txtCod,$datos);

        $datos['nivel']=$niveles->orderBy('cod_nivel_acad','ASC')->findAll();
            return view('encargados/nivelacad',$datos);
    }

    public function eliminarNivel($codigo=null){
        $niveles=new Nivelesacademico();

        $niveles->delete($codigo);

        $datos['nivel']=$niveles->orderBy('cod_nivel_acad', 'ASC')->findAll();
        return view('encargados/nivelacad',$datos);

    }
    
}