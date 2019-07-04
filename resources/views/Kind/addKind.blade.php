
@extends('index')
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <h2 class="h2">
                Add New Kind Book
            </h2>
            <form action="{{route('Kind.store')}}" class="text-left" method="post">
                @csrf
                <div class="form-group">
                    <label for="inputTitle">NameKindBook</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <hr>
            <a href="{{route('Kind.index')}}">Back</a>
        </div>
    </div>
@endsection
