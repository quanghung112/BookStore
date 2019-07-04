@extends('index')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <h2 class="h2">
                Upgrade Book
            </h2>
            <form action="{{route('Book.upgrade',$book->id)}}" class="text-left" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="inputTitle">NameBook</label>
                    <input type="text" class="form-control" name="name" value="{{$book->nameBook}}" required>
                </div>
                <div class="form-group">
                    <label for="inputTitle">Information</label>
                    <input type="text" class="form-control" name="inform" value="{{$book->information}}" required>
                </div>
                <div class="form-group">
                    <label for="inputTitle">Author</label>
                    <input type="text" class="form-control" name="author" value="{{$book->author}}" required>
                </div>
                <div class="form-group">
                    <label for="inputTitle">DatePublish</label>
                    <input type="date" class="form-control" name="date" value="{{$book->datePublish}}" required>
                </div>
                <div class="form-group">
                    <select class="custom-select" name="kind">
                        <option value="{{$book->kind_id}}" >{{$book->kind->nameKind}}</option>
                        @forelse($kinds as $kind)
                            @if($kind->id!=$book->kind_id)
                            <option value="{{$kind->id}}">{{$kind->nameKind}}</option>
                            @endif
                        @empty
                            <option>Not Kind</option>
                        @endforelse
                    </select>
                </div>
                <div class="form-group">
                    <img src="{{asset('storage/'.$book->image)}}" width="100" height="100">
                    <input type="file" class="form-control-file" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <hr>
            <a href="{{route('Book.detail',$book->id)}}">< Back</a>
        </div>
    </div>
@endsection

