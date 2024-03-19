<?php

require_once 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use App\Controllers\{AuthController, MencionController, TutorController, EstudianteController, EmpresaController};
use App\Controllers\Mantenimientos\{MunicipiosController, AuditoriaController, UsuariosController, ConocimientosController, HabilidadesController};

$request_method = $_SERVER['REQUEST_METHOD'];
$request_uri = $_SERVER['REQUEST_URI'];
$route = str_replace("/app-pasantias", '', $request_uri);


// var_dump("app-pasantias");
// die();

session_start();
if ((isset($_SESSION['nombre_usuario']) && $route === '/login') || (isset($_SESSION['nombre_usuario']) && $route === '/')) {
    header("Location: /app-pasantias/home");
    exit;
}
//rutas

if ($request_method === 'GET' && strpos($route, '/mencion-show/') === 0) {
    $id = intval(substr($route, strlen('/mencion-show/')));
    // (new MencionPrincipalController())->show($id);
} elseif ($request_method === 'GET' && strpos($route, '/mencion-delete/') === 0) {
    $id = intval(substr($route, strlen('/mencion-delete/')));
    (new MencionController())->delete($id);
} elseif ($request_method === 'GET' && strpos($route, '/mencion-des/') === 0) {
    $id = intval(substr($route, strlen('/mencion-des/')));
    // (new MencionPrincipalController())->deshabilitar($id);
} elseif ($request_method === 'GET' && strpos($route, '/mencion-hab/') === 0) {
    $id = intval(substr($route, strlen('/mencion-hab/')));
    // $mencionPrincipalController = (new MencionPrincipalController())->habilitar($id);
} elseif ($request_method === 'GET' && strpos($route, '/tutor-delete/') === 0) {
    $id = intval(substr($route, strlen('/tutor-delete/')));
    (new TutorController())->delete($id);
} elseif ($request_method === 'GET' && strpos($route, '/estudiante-show/') === 0) {
    $id = intval(substr($route, strlen('/estudiante-show/')));
    (new EstudianteController())->show($id);
} elseif ($request_method === 'GET' && strpos($route, '/estudiante-delete/') === 0) {
    $id = intval(substr($route, strlen('/estudiante-delete/')));
    (new EstudianteController())->delete($id);
} elseif ($request_method === 'GET' && strpos($route, '/empresa-delete/') === 0) {
    $id = intval(substr($route, strlen('/empresa-delete/')));
    (new EmpresaController())->delete($id);
} elseif ($request_method === 'GET' && strpos($route, '/parroquia-get/') === 0) {
    $id = intval(substr($route, strlen('/parroquia-get/')));
    (new MunicipiosController())->getParroquias($id);
} elseif ($request_method === 'GET' && strpos($route, '/conocimientos-get/') === 0) {
    $id = intval(substr($route, strlen('/conocimientos-get/')));
    (new ConocimientosController())->getConocimientos($id);
} elseif ($request_method === 'GET' && strpos($route, '/habilidades-get/') === 0) {
    $id = intval(substr($route, strlen('/habilidades-get/')));
    (new HabilidadesController())->getHabilidades($id);
} elseif ($request_method === 'GET' && strpos($route, '/usuario-delete/') === 0) {
    $id = intval(substr($route, strlen('/usuario-delete/')));
    (new UsuariosController())->delete($id);
} elseif ($request_method === 'GET' && strpos($route, '/conocimientos-delete/') === 0) {
    $id = intval(substr($route, strlen('/conocimientos-delete/')));
    (new ConocimientosController())->delete($id);
} elseif ($request_method === 'GET' && strpos($route, '/habilidades-delete/') === 0) {
    $id = intval(substr($route, strlen('/habilidades-delete/')));
    (new HabilidadesController())->delete($id);
} elseif ($request_method === 'POST' && $route === '/login') {
    $authController = (new AuthController())->login($_REQUEST['user'], md5($_REQUEST['password']));
    if (!$authController) {
        $error = true;
        require_once 'public/views/auth/login.php';
    }
} elseif ($request_method === 'POST' && $route === '/mencion-store') {
    (new MencionController())->store($_REQUEST);
} elseif ($request_method === 'POST' && $route === '/tutor-store') {
    (new TutorController())->store($_REQUEST);
} elseif ($request_method === 'POST' && $route === '/estudiante-store') {
    $pdf = base64_encode(file_get_contents($_FILES['nombre_curriculum']['tmp_name']));
    (new EstudianteController())->store($_REQUEST, $pdf);
} elseif ($request_method === 'POST' && $route === '/empresa-store') {
    (new EmpresaController())->store($_REQUEST);
} elseif ($request_method === 'POST' && $route === '/usuario-store') {
    (new UsuariosController())->store($_REQUEST);
} elseif ($request_method === 'POST' && $route === '/conocimientos-store') {
    (new ConocimientosController())->store($_REQUEST);
} elseif ($request_method === 'POST' && $route === '/habilidades-store') {
    (new HabilidadesController())->store($_REQUEST);
} else {
    switch ($route) {
        case '/':
            require_once 'public/views/auth/login.php';
            break;
        case '/login':
            require_once 'public/views/auth/login.php';
            break;
        case '/logout':
            (new AuthController())->logout();
            break;

            // Rutas Home
        case '/home':
            if (isset($_SESSION['nombre_usuario'])) {
                require_once 'public/views/home.php';
            } else {
                header("Location: /app-pasantias/login");
                exit;
            }
            break;

            // Rutas de mencion

        case '/mencion':
            (new MencionController())->index();
            break;

        case '/mencion-create':
            (new MencionController())->create();
            break;

            //ruta de tutor

        case '/tutor':
            (new TutorController())->index();
            break;

        case '/tutor-create':
            (new TutorController())->create();
            break;

            //rutas de estudiante

        case '/estudiante':
            (new EstudianteController())->index();
            break;

        case '/estudiante-create':
            (new EstudianteController())->create();
            break;

            //rutas de empresa

        case '/empresa':
            (new EmpresaController())->index();
            break;

        case '/empresa-create':
            (new EmpresaController())->create();
            break;

            //Ruta de auditoria

        case '/auditoria':
            (new AuditoriaController())->index();
            break;

            //rutas de usuario

        case '/usuario':
            (new UsuariosController())->index();
            break;

        case '/usuario-create':
            (new UsuariosController())->create();
            break;

            //rutas de conocimientos

        case '/conocimientos':
            (new ConocimientosController())->index();
            break;

        case '/conocimientos-create':
            (new ConocimientosController())->create();
            break;

            //rutas de habilidades

        case '/habilidades':
            (new HabilidadesController())->index();
            break;

        case '/habilidades-create':
            (new HabilidadesController())->create();
            break;

        default:
            http_response_code(404);
            echo "Ruta no encontrada";
            break;
    }
}
