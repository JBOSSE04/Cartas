<?php 
    namespace Controllers;

    use Lib\Pages;
    use Models\Contacto;

    class ContactoController{
        private Contacto $contact;
        private Pages $pages;

        function __construct() {
            $this->contact = new Contacto();
            $this->pages = new Pages();
        }

        public function mostrarTodos(){
            $todos_mis_contactos = $this->contact->getAll();

            $this->pages->render('Contacto/mostrar_todos', ['todos_mis_contactos'=>$todos_mis_contactos]);
        }
    }
?>