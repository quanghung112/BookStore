<?php


namespace App\Repositories\Interfaces;


interface BookRepositoryInterface
{
    public function filterByKind($idKind,$kind_id);
}
