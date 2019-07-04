@extends('index')
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <h2 class="h2">
                Add New Book
            </h2>
            <form action="{{route('Book.store')}}" class="text-left" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="inputTitle">NameBook</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label for="inputTitle">Information</label>
                    <input type="text" class="form-control" name="inform" required>
                </div>
                <div class="form-group">
                    <label for="inputTitle">Author</label>
                    <input type="text" class="form-control" name="author" required>
                </div>
                <div class="form-group">
                    <label for="inputTitle">DatePublish</label>
                    <input type="date" class="form-control" name="date" required>
                </div>
                <div class="form-group">
                    <select class="custom-select" name="kind">
                        <option selected>Choose Kinds</option>
                        @forelse($kinds as $kind)
                        <option value="{{$kind->id}}">{{$kind->nameKind}}</option>
                        @empty
                            <option>Not Kind</option>
                        @endforelse
                    </select>
                </div>
                <div class="form-group">
                    <input type="file" class="form-control-file" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <hr>
            <a href="{{route('Book.list')}}">Back</a>
        </div>
    </div>
@endsection

