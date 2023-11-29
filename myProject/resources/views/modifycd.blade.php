@extends('layouts.nav')

@section('content')
<div class="modproduct p-5">
<form action="{{route('updatecd',$id)}}" method='post' value="">
    @csrf
    @method('put')
    <div class="p-2"> 
        <h1>Modify CD</h1>
    </div>
    <div class="form">
        <input type="text" class="form-control mb-2 @error('title') is-invalid @enderror" placeholder="Title" name="title" value="{{$title}}">
            @error('title')
                <span style="color: red">{{$message}}</span>
            @enderror
        <input type="text" class="form-control mb-2 " placeholder="Firstname (optional)" name="firstname" value="{{$firstname}}">
        <input type="text" class="form-control mb-2 @error('band') is-invalid @enderror" placeholder="Band" name="band" value="{{$band}}">
            @error('band')
                <span style="color: red">{{$message}}</span>
            @enderror
        <input type="text" class="form-control mb-2 @error('price') is-invalid @enderror" placeholder="Price" name="price" value="{{$price}}">
            @error('price')    
                <span style="color: red">{{$message}}</span>
            @enderror
        <input type="text" class="form-control mb-2 @error('playlength') is-invalid @enderror" placeholder="Playlength" name="playlength" value="{{$playlength}}">
            @error('playlength')
                <span style="color: red">{{$message}}</span>
            @enderror
            <br>
        <button type="submit" class="btnupdate btn-primary btn-lg updatecd">UPDATE </button>
        
    </div>
</form>
</div>
@endsection