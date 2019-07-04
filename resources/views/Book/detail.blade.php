@extends('index')

@section('content')
    <h2 class="h2" >
        Information {{$book->nameBook}}
    </h2>
    <div class="col">
        <img src="{{asset('storage/'.$book->image)}}" class="rounded float-left" height="300px" width="250px">
        <ul class="list-group">
            <li class="list-group-item active">Name: {{$book->nameBook}}</li>
            <li class="list-group-item">Kind: {{$book->kind->nameKind}}</li>
            <li class="list-group-item">Author: {{$book->author}}</li>
            <li class="list-group-item">Information: {{$book->information}}</li>
            <li class="list-group-item">Datepublish: {{$book->datePublish}}</li>
        </ul>
    </div>
    <a  href="{{route('Book.edit',$book->id)}} "><button type="button" class="btn btn-primary" >Uprade Information</button></a>
    <a href="{{route('Book.list')}}"><button type="button" class="btn btn-primary" >Back</button></a>
@endsection

