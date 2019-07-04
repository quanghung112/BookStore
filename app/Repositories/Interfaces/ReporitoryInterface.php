<?php
namespace App\Repositories\Interfaces;

interface ReporitoryInterface
{
    public function getAll();
    public function getById($id);
    public function create($object);
    public function update($object);
    public function delete($object);
}
