<?php


namespace App\Services\BookService;


interface BookServiceInterface
{
    public function getAll();

    public function getbyId($id);

    public function destroy($id);

    public function store($object);

    public function upgrade($object, $id);

    public function filterByKind($idKind,$kind_id);
}
