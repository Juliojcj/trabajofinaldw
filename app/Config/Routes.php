<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
$routes->post('sesion', 'Usuarios::iniciarSesion');



$routes->get('cargar_regiones', 'Regiones::cargarRegiones');
$routes->get('nuevoregion', 'Regiones::verRegion');
$routes->get('aguardarregion', 'Regiones::guardarRegion');
$routes->get('modificar_region/(:num)', 'Regiones::veractualizarRegion/$1');
$routes->get('aguardar_region', 'Regiones::actualizarRegion');
$routes->get('eliminarregion/(:num)', 'Regiones::eliminarRegion/$1');


$routes->get('cargar_depto', 'Departamentos::cargarDepartamento');
$routes->get('verformulariodepa', 'Departamentos::verDepartamento');
$routes->get('guardardepa', 'Departamentos::guardarDepartamento');
$routes->get('modificardepa/(:num)', 'Departamentos::veractualizarDepartamento/$1');
$routes->get('actualizardepa', 'Departamentos::actualizarDepartamento');
$routes->get('eliminardepa/(:num)', 'Departamentos::eliminarDepartamento/$1');

$routes->get('cargar_nivel', 'Nivelesacademicos::cargarNiveles');
$routes->get('cargarNivel', 'Nivelesacademicos::verNivel');
$routes->get('aguardarniveles', 'Nivelesacademicos::guardarNivel');
$routes->get('eliminarNiveles/(:num)', 'Nivelesacademicos::eliminarNivel/$1');
$routes->get('vermodificarnivel/(:num)', 'Nivelesacademicos::veractualizarNivel/$1');
$routes->get('aguardarnivel', 'Nivelesacademicos::actualizarNiveles');

$routes->get('cargar_muni', 'Municipios::cargarMunicipios');
$routes->get('verformulariomuni', 'Municipios::verMunicipio');
$routes->get('guardarmuni', 'Municipios::guardarMunicipio');
$routes->get('modificar/(:num)', 'Municipios::veractualizarMuni/$1');
$routes->get('actualizar', 'Municipios::actualizarMuni');
$routes->get('eliminar/(:num)', 'Municipios::eliminarMuni/$1');

$routes->get('cargar_ciudadanos', 'Ciudadanos::cargarCiudadanos');
$routes->get('verciudadanos', 'Ciudadanos::verCiudadanos');
$routes->get('aguargarciudadano', 'Ciudadanos::guardarCiudadanos');
$routes->get('eliminarciudadano/(:num)', 'Ciudadanos::eliminarCiudadanos/$1');
$routes->get('verformidificacion/(:num)', 'Ciudadanos::actualizarCiudadanos/$1');
$routes->get('aguardarciudadano', 'Ciudadanos::modificarCiudadanos');

$routes->get('cargar_usuarios', 'Usuarios::cargarInternautas');
$routes->get('nuevousuario', 'Usuarios::verformularioUsuarios');
$routes->get('aguardarnuevo','Usuarios::guardarUsuario');
$routes->get('eliminar/(:num)', 'Usuarios::eliminarUsuarios/$1');
$routes->get('actualizarusuario/(:num)', 'Usuarios::frmModificarUsuarios/$1');
$routes->get('aguardaractualizado', 'Usuarios::modificarUsuarios');

$routes->get('cargar_tipo', 'Tipos::cargarTipos');
$routes->get('ver_formulariot', 'Tipos::verTipos');
$routes->get('aguardartipos', 'Tipos::guardarTipos');
$routes->get('ver_for_actualizar/(:num)', 'Tipos::frmModificarTipos/$1');
$routes->get('aguardaractualizacion', 'Tipos::modificarTipos');
$routes->get('eliminartipos/(:num)', 'Tipos::eliminarTipos/$1');

$routes->get('cargarpersonas', 'Personas::cargarCiudadanos');
