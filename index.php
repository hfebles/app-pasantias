<?php

require_once 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use App\Controllers\{AuthController, MencionController, TutorController, EstudianteController, EmpresaController};
use App\Controllers\Mantenimientos\MunicipiosController;

$request_method = $_SERVER['REQUEST_METHOD'];
$request_uri = $_SERVER['REQUEST_URI'];
$route = str_replace("/app-pasantias", '', $request_uri);


// var_dump("app-pasantias");
// die();

session_start();
if ((isset($_SESSION['nombre_usuario']) && $route === '/login') || (isset($_SESSION['nombre_usuario']) && $route === '/')) {
    header("Location: /app-pasantias/dashboard");
    exit;
}
//rutas
if ($request_method === 'GET' && strpos($route, '/mencion-show/') === 0) {
    $id = intval(substr($route, strlen('/mencion-show/')));
    // (new MencionPrincipalController())->show($id);
}elseif ($request_method === 'GET' && strpos($route, '/mencion-delete/') === 0) {
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
} elseif ($request_method === 'GET' && strpos($route, '/estudiante-delete/') === 0) {
    $id = intval(substr($route, strlen('/estudiante-delete/')));
    (new EstudianteController())->delete($id);
} elseif ($request_method === 'GET' && strpos($route, '/empresa-delete/') === 0) {
    $id = intval(substr($route, strlen('/empresa-delete/')));
    (new EmpresaController())->delete($id);
} elseif ($request_method === 'GET' && strpos($route, '/parroquia-get/') === 0) {
    $id = intval(substr($route, strlen('/parroquia-get/')));
    (new MunicipiosController())->getParroquias($id);
} elseif ($request_method === 'POST' && $route === '/login') {
    $authController = (new AuthController())->login($_REQUEST['user'], md5($_REQUEST['password']));
    if (!$authController) {
        $error = true;
        require_once 'app/views/auth/login.php';
    }
} elseif ($request_method === 'POST' && $route === '/mencion-store') {
    (new MencionController())->store($_REQUEST);
} elseif ($request_method === 'POST' && $route === '/tutor-store') {
    (new TutorController())->store($_REQUEST);
} elseif ($request_method === 'POST' && $route === '/estudiante-store') {
    (new EstudianteController())->store($_REQUEST);
} elseif ($request_method === 'POST' && $route === '/empresa-store') {
    (new EmpresaController())->store($_REQUEST);
} else {
    switch ($route) {
        case '/':
            require_once 'app/views/auth/login.php';
            break;
        case '/login':
            require_once 'app/views/auth/login.php';
            break;
        case '/logout':
             (new AuthController())->logout();
            break;

            // Rutas Home
        case '/dashboard':
            if (isset($_SESSION['nombre_usuario'])) {
                require_once 'app/views/dashboard.php';
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

        case '/estudiantes':
            // $estudiantes = (new MencionPrincipalController())->index();
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

        default:
            http_response_code(404);
            echo "Ruta no encontrada";
            break;
    }
}

?>