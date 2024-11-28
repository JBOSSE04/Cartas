<?php 
namespace Services;

use Repositories\ContactoRepository;

class ContactoService {
    private ContactoRepository $repository;
    function __construct() {
        $this->repository = new ContactoRepository();
    }

    public function findAll() :?array{
        return $this->repository->findAll();
    }


    public function read( int $id) {
        return $this->repository->read($id);
    }
    

    public function save(array $contacto) {
        return $this->repository->save($contacto);
    }

    public function delete(int $id): void{
        return $this->repository->update($id);
    }

}
?>