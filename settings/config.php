<?php

// ----------------------------
// Configuración del entorno
// ----------------------------

define('ENVIRONMENT', 'Development'); // Cambiar a 'Production' en producción

if (ENVIRONMENT === 'Development') {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    error_reporting(0);
}

// ----------------------------
// Configuración de la base de datos
// ----------------------------
define('DB_HOST', 'localhost');
define('DB_NAME', 'bd_sistema_gestion_escolar');
define('DB_USER', 'root');
define('DB_PASSWORD', '4825');

// ----------------------------
// Configuración de las rutas
// ----------------------------

// Detectar automáticamente el nombre de la aplicación desde la ruta
$app_name = basename(dirname(__DIR__));
define('NAME_APP', $app_name); // Almacenando el nombre de la aplicación en una constante

// Ruta base del proyecto (directorio padre del directorio settings)
define('BASE_PATH', dirname(__DIR__) . '/');

// URLs dinámicas basadas en el servidor actual
define('BASE_HOME', 'http://' . $_SERVER['SERVER_NAME'] . '/' . NAME_APP . '/');
define('BASE_STATIC', 'http://' . $_SERVER['SERVER_NAME'] . '/' . NAME_APP . '/');

// Rutas de archivos y directorios
define('BASE_PATH_COMPONENTS', BASE_PATH . 'components');
define('SETTINGS_BD', BASE_PATH . 'settings/settingBD.php');

define('BASE_PATH_AVATAR_PROFESORES', BASE_PATH . '/assets/avatar_profesores');
define('BASE_PATH_AVATAR_ESTUDIANTES', BASE_PATH . '/assets/avatar_estudiantes');

// -------------------------------
// Lista de Bases Controllers ----
// -------------------------------
define('CONTROLLER_GLOBAL', BASE_PATH . 'controllers/ControllerGlobal.php');
define('BASE_CONTROLLER_MATERIAS', BASE_PATH . 'controllers/ControllerMaterias.php');
define('BASE_CONTROLLER_PROFESORES', BASE_PATH . 'controllers/ControllerProfesores.php');
define('BASE_CONTROLLER_ESTUDIANTES', BASE_PATH . 'controllers/ControllerEstudiantes.php');
define('BASE_CONTROLLER_GRADOS', BASE_PATH . 'controllers/ControllerGrados.php');
define('COMPONENTES_GLOBALES', BASE_PATH . 'components/components.php');

// -------------------------------
// Rutas Controllers POST --------
// -------------------------------
define('POST_FORM_CURSO', BASE_STATIC . 'controllers/ControllerGrados.php');
define('POST_FORM_MATERIA', BASE_STATIC . 'controllers/ControllerMaterias.php');
define('POST_FORM_PROFESOR', BASE_STATIC . 'controllers/ControllerProfesores.php');
define('POST_FORM_ESTUDIANTE', BASE_STATIC . 'controllers/ControllerEstudiantes.php');

// ----------------------------
// Configuración de zona horaria
// ----------------------------
date_default_timezone_set('America/Bogota');

// ----------------------------
// Otras configuraciones comunes
// ----------------------------
define('SESSION_TIMEOUT', 3600); // Tiempo de expiración de la sesión en segundos (1 hora)