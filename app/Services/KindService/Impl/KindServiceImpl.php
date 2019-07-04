<?php


namespace App\Services\KindService\Impl;

use App\Kind;
use App\Repositories\Eloquent\KindEloquentRepository;
use App\Repositories\Interfaces\KindReporitoryInterface;
use App\Services\KindService\KindServiceInterface;

class KindServiceImpl implements KindServiceInterface
{
    protected $kindRepository;

    public function __construct(KindReporitoryInterface $kindReporitory)
    {
        $this->kindRepository = $kindReporitory;
    }

    public function getAll()
    {
        return $this->kindRepository->getAll();
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function getbyId($id)
    {
        // TODO: Implement getKind() method.
    }

    public function store($object)
    {
        $kind=new Kind();
        $kind->nameKind=$object['name'];
        $this->kindRepository->create($kind);
    }

    public function upgrade($object, $id)
    {

    }
}
