<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Municipio;
class Municipios extends Controller{
    public function cargarMunicipios(){
        $munis = new Municipio();
        
        $datos['muni'] = $munis-> orderBy('cod_muni' , 'ASC')->findAll();
            return view('encargados/municipios', $datos);
    }

    public function verMunicipio(){
        return view('encargados/nuevomuni');
    }
    public function guardarMunicipio(){
        $munis = new Municipio();

        $cod_muni=$this->request->getVar('txtCod');
        $nombre=$this->request->getVar('txtNombre');
        $cod_depto=$this->request->getVar('txtDes');

        $datos=[
            'cod_muni'=>$cod_muni,
            'nombre'=>$nombre,
            'cod_depto'=>$cod_depto
        ];
        $munis->insert($datos);

        $datos['muni']=$munis->orderBy('cod_muni' , 'ASC')->findAll();
        return view('encargados/municipios', $datos);
    }

    public function veractualizarMuni($codigo=null){
        $muni = new Municipio();

        $datos['municipios']=$muni->where('cod_muni',$codigo)->first();
        return view('encargados/actualizarmuni',$datos);
    }
    public function actualizarMuni(){
        $muni = new Municipio();

        $txtCod=$this->request->getVar('txtCod');
        $txtNombre=$this->request->getVar('txtNombre');
        $txtDes=$this->request->getVar('txtDes');
        
        $datos=[
            'nombre'=>$txtNombre,
            'descripcion'=>$txtDes
        ];

        $muni->update($txtCod,$datos);

        $datos['muni']=$muni->orderBy('cod_muni','ASC')->findAll();
        return view('encargados/municipios',$datos);    }

    public function eliminarMuni($codigo=null){
        $muni=new Municipio();

        $muni->delete($codigo);

        $datos['muni']=$muni->orderBy('cod_muni', 'ASC')->findAll();
        return view('encargados/municipios',$datos);

    }
}