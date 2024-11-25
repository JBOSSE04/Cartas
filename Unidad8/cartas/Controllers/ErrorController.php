<?php
namespace Controllers;

use Lib\Pages;

class ErrorController {
    public function notFound() {
        $page = new Pages();
        $page->render('error/404', []);
    }
}
