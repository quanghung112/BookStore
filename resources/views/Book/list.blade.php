
@extends('index')

@section('content')

    <div class="container">
        <div class="col-12">
            <div class="row">
                <h1>Book list and Information </h1>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">NameBook</th>
                        <th scope="col">Image</th>
                        <th scope="col">Kind</th>
                        <th scope="col">Information</th>
                        <th scope="col">Author</th>
                        <th scope="col">DatePublish</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse( $books as $key => $book)
                        <tr>
                            <th class="align-middle" >{{$key+1}}</th>
                            <td class="align-middle">{{$book->nameBook}}</td>
                            <td class="align-middle"><a href="{{route('Book.detail',$book->id)}}"><img src="{{asset('storage/'.$book->image)}}" width="100" height="100"></a></td>
                            <td class="align-middle">{{$book->kind->nameKind}}</td>
                            <td class="align-middle">{{$book->information}}</td>
                            <td class="align-middle">{{$book->author}}</td>
                            <td class="align-middle">{{$book->datePublish}}</td>
                            <td class="align-middle">
                                <a href="{{route('Book.delete',$book->id)}}">
                                    <button type="submit" class="btn btn-secondary">Delete</button>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>Not book</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{$books->appends(request()->query())}}
            </div>
        </div>
    </div>
@endsection


