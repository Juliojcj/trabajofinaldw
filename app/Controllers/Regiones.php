<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Region;
class Regiones extends Controller{
    public function cargarRegiones(){
        $region = new Region();
        
        $datos['region'] = $region-> orderBy('cod_region' , 'ASC')->findAll();
            return view('encargados/region', $datos);
    }

    public function verRegion(){
        return view('encargados/nuevoregion');
    }
    public function guardarRegion(){
        $region = new Region();

        $txtCod=$this->request->getVar('txtCod');
        $txtNombre=$this->request->getVar('txtNombre');
        $txtDes=$this->request->getVar('txtDes');

        $datos=[
            'cod_region'=>$txtCod,
            'nombre'=>$txtNombre,
            'descripcion'=>$txtDes
        ];
        $region->insert($datos);

        $datos['region']=$region->orderBy('cod_region' , 'ASC')->findAll();
        return view('encargados/region', $datos);
    }

    public function veractualizarRegion($codigo=null){
        $region = new Region();

        $datos['regiones']=$region->where('cod_region',$codigo)->first();
        return view('encargados/actualizarregion',$datos);
    }
    public function actualizarRegion(){
        $region = new Region();

        $txtCod=$this->request->getVar('txtCod');
        $txtNombre=$this->request->getVar('txtNombre');
        $txtDes=$this->request->getVar('txtDes');
        
        $datos=[
            'nombre'=>$txtNombre,
            'descripcion'=>$txtDes
        ];

        $region->update($txtCod,$datos);

        $datos['region']=$region->orderBy('cod_region','ASC')->findAll();
            return view('encargados/region',$datos);
    }

    public function eliminarRegion($codigo=null){
        $region=new Region();

        $region->delete($codigo);

        $datos['region']=$region->orderBy('cod_region', 'ASC')->findAll();
        return view('encargados/region',$datos);

    }
}