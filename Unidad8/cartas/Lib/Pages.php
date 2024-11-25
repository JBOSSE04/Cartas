<?php
namespace Lib;

class Pages {
    public function render($template, $vars = []) {
        extract($vars);
        require_once __DIR__ . "/../views/{$template}.php";
    }
}
?>
