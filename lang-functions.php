<?php
session_start();

function obtenerIdiomaNavegador() {
    if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        $idiomas = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
        foreach($idiomas as $idioma) {
            $codigo = substr($idioma, 0, 2);
            return $codigo;
        }
    }
    return 'es';
}

function obtenerIdiomaActual() {
    return isset($_SESSION['idioma']) ? $_SESSION['idioma'] : (isset($_COOKIE['idioma']) ? $_COOKIE['idioma'] : obtenerIdiomaNavegador());
}

//Si esta vacio el valor
function traducir($clave) {
    global $lang, $idioma;
    $traduccion = isset($lang[$idioma][$clave]) ? $lang[$idioma][$clave] : ' ';

    // Verifica si la traducción está vacía
    if (empty($traduccion)) {
        return "ERROR: ".$clave;
    } else {
        return $traduccion;
    }
}

if(isset($_GET['lang'])) {
    $idioma = $_GET['lang'];
    $_SESSION['idioma'] = $idioma;
    setcookie('idioma', $idioma, time() + (60 * 60 * 24 * 30), '/');
}

//// Definir idioma predeterminado
//$idioma = obtenerIdiomaActual();
//
//// Incluir archivo de idioma
//include('lang.php');
?>
