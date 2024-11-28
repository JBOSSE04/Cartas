<?php

use Services\ContactoService;

class ContactoController {
    private $service;
    private $pages;




    function __construct(){
        $this->service = new ContactoService();
        $this->pages = new Pages();
        }

    public function listar(): void {
        $contactos = $this->service->getAll();
        $this->pages->render('contactos/showContacts', ['contactos' => $contactos]);
    }
}
?>