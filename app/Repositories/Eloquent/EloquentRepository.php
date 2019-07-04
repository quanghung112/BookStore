<?php


namespace App\Repositories\Eloquent;

use Illuminate\Contracts\Foundation\Application;
use App\Repositories\Interfaces\ReporitoryInterface;

abstract class EloquentRepository implements ReporitoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public function getAll()
    {
        return $this->model::all();
    }

    public function create($object)
    {
        $this->model=$object;
        $this->model->save();
    }

    public function update($object)
    {
        $this->model->save();
    }
    public function delete($object)
    {
        $this->model=$object;
        $this->model->delete();
    }
    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }
}
