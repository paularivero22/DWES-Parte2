<?php

    function flash($clave, $mensajeOpcional = null): ?string 
    {

        // Inicializamos la sección 'flash' si no existe
        if (!isset($_SESSION['flash'])) {
            $_SESSION['flash'] = [];
        }

        // Si ya existe la clave en la sesión flash
        if (isset($_SESSION['flash'][$clave])) {
            $mensaje = $_SESSION['flash'][$clave];
            unset($_SESSION['flash'][$clave]); // Eliminamos después de leer
            return $mensaje;
        }

        // Si no existe la clave, creamos la sesión flash con el mensaje opcional
        if ($mensajeOpcional !== null) {
            $_SESSION['flash'][$clave] = $mensajeOpcional;
            return $mensajeOpcional;
        }

        // Si no existe clave y no hay mensaje opcional
        return null;
    }


    function iniciar_sesion(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    function estaLogueado()
    {
        iniciar_sesion();
        return isset($_SESSION['usuario']);
    }

    function redireccionar(String $url)
    {
        if (!headers_sent()) {
        header("Location: $url");
        exit;
    } else {
        echo "<script>window.location.href='$url';</script>";
        exit;
    }
    }

    function esPost()
    {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }

