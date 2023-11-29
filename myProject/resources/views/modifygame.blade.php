@extends('layouts.nav')

@section('content')
<div class="modproduct p-5">
<form action="{{route('updategame',$id)}}" method='post' value="">
    @csrf
    @method('put')
    <div class="p-2"> 
        <h1>Modify Game</h1>
    </div>
    <div class="form">
        <input type="text" class="form-control mb-2 @error('title') is-invalid @enderror" placeholder="Title" name="title" value="{{$title}}">
            @error('title')
                <span style="color: red">{{$message}}</span>
            @enderror

            <input type="text" class="form-control mb-2 @error('Console') is-invalid @enderror" placeholder="Console" name="Console" value="{{$Console}}">
            @error('Console')
                <span style="color: red">{{$message}}</span>
            @enderror

            <input type="text" class="form-control mb-2 @error('title') is-invalid @enderror" placeholder="price" name="price" value="{{$price}}">
            @error('price')
                <span style="color: red">{{$message}}</span>
            @enderror
            <button type="submit" class="btnupdate btn-primary btn-lg updatecd">UPDATE </button>
    </div>
</form>
</div>
@endsection