<?php

namespace App\Http\Controllers;

use App\Services\KindService\Impl\KindServiceImpl;
use App\Services\KindService\KindServiceInterface;
use Illuminate\Http\Request;
use App\Kind;
use App\Book;

class KindController extends Controller
{
    protected $kindService;

    public function __construct(KindServiceInterface $kindService)
    {
        $this->kindService = $kindService;
    }

    public function create()
    {
        $kinds = $this->kindService->getAll();
        return view('Kind.addKind', compact('kinds'));
    }

    public function store(Request $request)
    {
        $kind=$request->all();
        $this->kindService->store($kind);
        return redirect()->route('home.index');
    }
}
