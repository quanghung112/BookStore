<?php

namespace App\Http\Controllers;

use App\Services\BookService\BookServiceInterface;
use App\Services\KindService\KindServiceInterface;
use Illuminate\Http\Request;
use App\Services\KindService\Impl\KindServiceImpl;

class BookController extends Controller
{
    protected $bookService;
    protected $kindService;

    public function __construct(BookServiceInterface $bookService, KindServiceInterface $kindService)
    {
        $this->bookService = $bookService;
        $this->kindService = $kindService;
    }

    public function index()
    {
        $checkLogin=$this->bookService->showHome();
        if ($checkLogin){
            $kinds = $this->kindService->getAll();
            return view('index', compact('kinds'));
        }
        return view('Login.Login');
    }

    public function showList()
    {
        $books = $this->bookService->getAll();
        $kinds = $this->kindService->getAll();
        return view('Book.list', compact('books', 'kinds'));
    }

    public function create()
    {
        $kinds = $this->kindService->getAll();
        return view('Book.create', compact('kinds'));
    }

    public function store(Request $request)
    {
        $book = $request->all();
        $this->bookService->store($book);
        return redirect()->route('Book.list');
    }

    public function delete($id)
    {
        $this->bookService->destroy($id);
        return redirect()->route('Book.list');
    }

    public function detail($id)
    {
        $book = $this->bookService->getbyId($id);
        $this->bookService->insertView($id);
        $kinds = $this->kindService->getAll();
        return view('Book.detail', compact('book', 'kinds'));
    }

    public function edit($id)
    {
        $book = $this->bookService->getbyId($id);
        $kinds = $this->kindService->getAll();
        return view('Book.update', compact('book', 'kinds'));
    }

    public function upgrade(Request $request, $id)
    {
        $book = $request->all();
        $this->bookService->upgrade($book,$id);
        return redirect()->route('Book.detail',$id);

    }
    public function filterByKind($idKind)
    {
        $books = $this->bookService->filterByKind($idKind,$idKind);
        $kinds = $this->kindService->getAll();
        return view('Book.list', compact('books', 'kinds'));
    }
}
