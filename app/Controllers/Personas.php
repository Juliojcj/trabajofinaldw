<?php 
namespace App\Controllers;

use App\Models\Ciudadano;
use CodeIgniter\Controller;

class Personas extends Controller{
    public function cargarCiudadanos(){
        $ciudadanos = new Ciudadano();
        
        $datos['ciudadano'] = $ciudadanos-> orderBy('dpi' , 'ASC')->findAll();
        return view('ciudadanos/personas', $datos);
    }
}