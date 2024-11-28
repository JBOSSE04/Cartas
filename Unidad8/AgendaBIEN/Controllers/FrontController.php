<?php
namespace Controllers;

class FrontController {
    public static function main() {
        $controller = isset($_GET['controller']) ? ucfirst($_GET['controller']) : DEFAULT_CONTROLLER;
        $action = isset($_GET['action']) ? $_GET['action'] : DEFAULT_ACTION;

        $controllerName = "Controllers\\{$controller}Controller";

        if (class_exists($controllerName)) {
            $controllerInstance = new $controllerName();
            if (method_exists($controllerInstance, $action)) {
                $controllerInstance->$action();
            } else {
                die("La acción {$action} no existe en el controlador {$controllerName}.");
            }
        } else {
            die("El controlador {$controllerName} no existe.");
        }
    }
}
?>
