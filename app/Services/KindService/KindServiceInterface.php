<?php


namespace App\Services\KindService;


interface KindServiceInterface
{
    public function getAll();

    public function getbyId($id);

    public function delete($id);

    public function store($object);

    public function upgrade($object, $id);
}
