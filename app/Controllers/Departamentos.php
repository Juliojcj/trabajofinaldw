<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Departamento;
class Departamentos extends Controller{
    public function cargarDepartamento(){
        $depa = new Departamento();
        
        $datos['depas'] = $depa-> orderBy('cod_depto' , 'ASC')->findAll();
            return view('encargados/departamento', $datos);
    }

    public function verDepartamento(){
        return view('encargados/nuevodepto');
    }
    public function guardarDepartamento(){
        $depa = new Departamento();

        $cod_depto=$this->request->getVar('txtCod');
        $nombre=$this->request->getVar('txtNombre');
        $cod_region=$this->request->getVar('txtDes');

        $datos=[
            'cod_depto'=>$cod_depto,
            'nombre'=>$nombre,
            'cod_region'=>$cod_region
        ];
        $depa->insert($datos);

        $datos['depas']=$depa->orderBy('cod_depto' , 'ASC')->findAll();
        return view('encargados/departamento', $datos);
    }

    public function veractualizarDepartamento($codigo=null){
        $departamentos = new Departamento();

        $datos['departamentos']=$departamentos->where('cod_depto',$codigo)->first();
        return view('encargados/actualizardepto',$datos);
    }
    public function actualizarDepartamento(){
        $depa = new Departamento();

        $cod_depto=$this->request->getVar('txtCod');
        $nombre=$this->request->getVar('txtNombre');
        $cod_region=$this->request->getVar('txtDes');

        $datos=[
            'cod_depto'=>$cod_depto,
            'nombre'=>$nombre,
            'cod_region'=>$cod_region
        ];

        $depa->update($cod_depto,$datos);

        $datos['depas']=$depa->orderBy('cod_depto','ASC')->findAll();
            return view('encargados/departamento',$datos);
    }

    public function eliminarDepartamento($codigo=null){
        $departamentos=new Departamento();

        $departamentos->delete($codigo);

        $datos['depas']=$departamentos->orderBy('cod_depto', 'ASC')->findAll();
        return view('encargados/departamento',$datos);

    }
}