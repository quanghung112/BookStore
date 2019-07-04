<?php


namespace App\Repositories\Eloquent;

use App\Kind;
use App\Repositories\Interfaces\KindReporitoryInterface;

class KindEloquentRepository extends EloquentRepository implements KindReporitoryInterface
{
    public function getModel()
    {
        return Kind::class;
    }

}
