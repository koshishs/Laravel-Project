@extends('layouts.nav')

@section('content')

<div class="container-sm">
    <div class="row mt-2 mx-auto rounded py-3 px-3">
        <div class="d-flex justify-content-between mb-1">
            <h1>CD Adding Form:</h1>
        </div>
<form action="{{route('storecd')}}" method='post' value="">
    @csrf
    <div class="mb-3">
        <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Title" name="title" value="{{old('title')}}">
            @error('title')
                <span style="color: red">{{$message}}</span>
            @enderror
    </div>
    <div class="mb-3">        
        <input type="text" class="form-control " placeholder="Firstname (optional)" name="firstname" value="{{old('firstname')}}">
    </div>
    <div class="mb-3">    
        <input type="text" class="form-control @error('band') is-invalid @enderror" placeholder="Band" name="band" value="{{old('band')}}">
            @error('band')
                <span style="color: red">{{$message}}</span>
            @enderror
    </div>
    <div class="mb-3">
        <input type="text" class="form-control @error('price') is-invalid @enderror" placeholder="Price" name="price" value="{{old('price')}}">
            @error('price')
                <span style="color: red">{{$message}}</span>
            @enderror
    </div>
    <div class="mb-3">
        <input type="text" class="form-control @error('playlength') is-invalid @enderror" placeholder="Playlength" name="playlength" value="{{old('playlength')}}">
            @error('playlength')
                <span style="color: red">{{$message}}</span>
            @enderror
    </div>
    <div class="mb-3">
        <button type="submit" class="btnadd btn-primary btn-lg">Add CD</button>
    </div>
</form>
    </div>
</div>
@endsection
