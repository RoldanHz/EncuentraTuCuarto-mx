<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

#Rutas para Admin
$routes->get('EncuentraTuCuarto/admin/inicio', 'admin\Principal::inicio');
$routes->get('EncuentraTuCuarto/admin/descarga', 'admin\Principal::descarga');
#----------------------
$routes->get('EncuentraTuCuarto/admin/vistas/areas/ver', 'admin\Areas::ver');
$routes->get('EncuentraTuCuarto/admin/vistas/areas/agregar', 'admin\Areas::agregar');
$routes->post('EncuentraTuCuarto/admin/vistas/areas/agregar', 'admin\Areas::agregar');
$routes->get('EncuentrTuCuarto/admin/vistas/areas/buscar','admin\Areas::buscar');
$routes->get('EncuentraTuCuarto/admin/vistas/areas/editar/(:num)', 'admin\Areas::editar/$1');
$routes->get('eliminararea/(:num)', 'admin\Areas::eliminar/$1');
$routes->post('editarea/','admin\Areas::actualizar');
#----------------------
$routes->get('EncuentraTuCuarto/admin/vistas/unidades/ver', 'admin\Unidades::ver');
$routes->get('EncuentraTuCuarto/admin/vistas/unidades/agregar', 'admin\Unidades::agregar');
$routes->post('EncuentraTuCuarto/admin/vistas/unidades/agregar', 'admin\Unidades::agregar');
$routes->get('EncuentrTuCuarto/admin/vistas/unidades/buscar','admin\Unidades::buscar');
$routes->get('EncuentraTuCuarto/admin/vistas/unidades/editar/(:num)', 'admin\Unidades::editar/$1');
$routes->get('eliminarunidad/(:num)', 'admin\Unidades::eliminar/$1');
$routes->post('editunidad/','admin\Unidades::actualizar');
#----------------------
$routes->get('EncuentraTuCuarto/admin/vistas/departamentos/ver', 'admin\Departamentos::ver');
$routes->get('EncuentraTuCuarto/admin/vistas/departamentos/agregar', 'admin\Departamentos::agregar');
$routes->post('EncuentraTuCuarto/admin/vistas/departamentos/agregar', 'admin\Departamentos::agregar');
$routes->get('EncuentraTuCuarto/admin/vistas/departamentos/buscar','admin\Departamentos::buscar');
$routes->get('EncuentraTuCuarto/admin/vistas/departamentos/editar/(:num)', 'admin\Departamentos::editar/$1');
$routes->get('eliminardepartamento/(:num)', 'admin\Departamentos::eliminar/$1');
$routes->post('editdepartamento/','admin\Departamentos::actualizar');
#----------------------
$routes->get('EncuentraTuCuarto/admin/vistas/servicios/ver', 'admin\Servicios::ver');
$routes->get('EncuentraTuCuarto/admin/vistas/servicios/agregar', 'admin\Servicios::agregar');
$routes->post('EncuentraTuCuarto/admin/vistas/servicios/agregar', 'admin\Servicios::agregar');
$routes->get('EncuentraTuCuarto/admin/vistas/servicios/buscar', 'admin\Servicios::buscar');
$routes->get('EncuentraTuCuarto/admin/vistas/servicios/editar/(:num)', 'admin\Servicios::editar/$1');
$routes->get('eliminarservicio/(:num)', 'admin\Servicios::eliminar/$1');
$routes->post('editservicio/','admin\Servicioss::actualizar');
#----------------------
$routes->get('EncuentraTuCuarto/admin/vistas/usuarios/ver', 'admin\Usuarios::ver');
$routes->get('EncuentraTuCuarto/admin/vistas/usuarios/agregar', 'admin\Usuarios::agregar');
$routes->post('EncuentraTuCuarto/admin/vistas/usuarios/agregar', 'admin\Usuarios::agregar');
$routes->get('EncuentraTuCuarto/admin/vistas/usuarios/buscar', 'admin\Usuarios::buscar');
$routes->get('EncuentraTuCuarto/admin/vistas/usuarios/editar/(:num)', 'admin\Usuarios::editar/$1');
$routes->get('eliminarusuario/(:num)', 'admin\Usuarios::eliminar/$1');
$routes->post('editusuario/','admin\Usuarios::actualizar');
#----------------------
$routes->get('EncuentraTuCuarto/admin/vistas/users/ver', 'admin\Users::ver');
$routes->get('EncuentraTuCuarto/admin/vistas/users/agregar', 'admin\Users::agregar');
$routes->post('EncuentraTuCuarto/admin/vistas/users/agregar', 'admin\Users::agregar');
$routes->get('EncuentraTuCuarto/admin/vistas/users/buscar', 'admin\Users::buscar');
$routes->get('EncuentraTuCuarto/admin/vistas/users/editar/(:num)', 'admin\Users::editar/$1');
$routes->get('eliminaruser/(:num)', 'admin\Users::eliminar/$1');
$routes->post('edituser/','admin\Users::actualizar');
#----------------------
$routes->get('EncuentraTuCuarto/admin/vistas/serviciosExtras/ver', 'admin\Extraservices::ver');
$routes->get('EncuentraTuCuarto/admin/vistas/serviciosExtras/agregar', 'admin\Extraservices::agregar');
$routes->post('EncuentraTuCuarto/admin/vistas/serviciosExtras/agregar', 'admin\Extraservices::agregar');
$routes->get('EncuentraTuCuarto/admin/vistas/serviciosExtras/buscar', 'admin\Extraservices::buscar');
$routes->get('EncuentraTuCuarto/admin/vistas/serviciosExtras/editar/(:num)', 'admin\Extraservices::editar/$1');
$routes->get('eliminarextraservicio/(:num)', 'admin\Extraservices::eliminar/$1');
$routes->post('editextraservicio/','admin\Extraservices::actualizar');

#Rutas para Arrendatario
$routes->get('EncuentraTuCuarto/arrendatario/inicio', 'Arren::inicio');




#Rutas para Visitante
$routes->get('EncuentraTuCuarto/visitante/inicio', 'Visitante\Visi::inicio');