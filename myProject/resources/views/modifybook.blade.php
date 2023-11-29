@extends('layouts.nav')

@section('content')
<div class="modproduct p-5">
<form action="{{route('updatebook',$id)}}" method='post' value="">
    @csrf
    @method('put')
    <div class="p-2"> 
        <h1>Modify Book</h1>
    </div>
    <div class="form">
        <input type="text" class="form-control mb-2 @error('title') is-invalid @enderror" placeholder="Title" name="title" value="{{$title}}">
            @error('title')
                <span style="color: red">{{$message}}</span>
            @enderror
        <input type="text" class="form-control mb-2 " placeholder="Firstname (optional)" name="firstname" value="{{$firstname}}">
        <input type="text" class="form-control mb-2 @error('surname') is-invalid @enderror" placeholder="Surname" name="surname" value="{{$surname}}">
            @error('surname')
                <span style="color: red">{{$message}}</span>
            @enderror
        <input type="text" class="form-control mb-2 @error('price') is-invalid @enderror" placeholder="Price" name="price" value="{{$price}}">
            @error('price')
                <span style="color: red">{{$message}}</span>
            @enderror
        <input type="text" class="form-control mb-2 @error('pages') is-invalid @enderror" placeholder="Pages" name="pages" value="{{$pages}}">
            @error('pages')
                <span style="color: red">{{$errors->first('pages')}}</span>
            @enderror
            <br>
        <button type="submit" class="btnupdate btn-primary btn-lg updatebook">UPDATE </button>

    </div>
</form>
</div>
@endsection