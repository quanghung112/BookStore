<?php


namespace App\Services\BookService\Impl;


use App\Book;
use App\Repositories\Interfaces\BookRepositoryInterface;
use App\Services\BookService\BookServiceInterface;

class BookServiceImpl implements BookServiceInterface
{
    protected $bookRepository;

    public function __construct(BookRepositoryInterface $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function getAll()
    {
        return $this->bookRepository->getAll();
    }

    public function getbyId($id)
    {
        return $this->bookRepository->getById($id);
    }

    public function upgrade($object, $id)
    {
        $book = $this->getbyId($id);
        $book->nameBook = $object['name'];
        $book->information = $object['inform'];
        $book->author = $object['author'];
        $book->datePublish = $object['date'];
        $book->kind_id = $object['kind'];
        if (isset($object['image'])) {
            $image = $object['image'];
            $path = $image->store('images', 'public');
            $book->image = $path;
        }
        $this->bookRepository->create($book);
    }

    public function destroy($id)
    {
        $book = $this->getbyId($id);
        $this->bookRepository->delete($book);
    }

    public function store($object)
    {
        $newBook = new Book();
        $newBook->nameBook = $object['name'];
        $newBook->information = $object['inform'];
        $newBook->author = $object['author'];
        $newBook->datePublish = $object['date'];
        $newBook->kind_id = $object['kind'];
        if (isset($object['image'])) {
            $image = $object['image'];
            $path = $image->store('images', 'public');
            $newBook->image = $path;
        }
        $this->bookRepository->create($newBook);
    }

    public function filterByKind($idKind,$kind_id)
    {
        return $this->bookRepository->filterByKind($idKind,$kind_id);
    }
}
