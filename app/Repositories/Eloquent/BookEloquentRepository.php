<?php


namespace App\Repositories\Eloquent;


use App\Book;
use App\Kind;
use App\Repositories\Interfaces\BookRepositoryInterface;

class BookEloquentRepository extends EloquentRepository implements BookRepositoryInterface
{
    public function getModel()
    {
        return Book::class;
    }
    public function getAll()
    {
       return $this->model::paginate(5);
    }
    public function filterByKind($idKind,$kind_id)
    {
        $kindFilter = Kind::findOrFail($idKind);
        $books=$this->model->where('kind_id',$kindFilter->id)->paginate(5);
        return $books;
    }
}

