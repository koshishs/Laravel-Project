@extends('layouts.nav')

@section('content')

<div class="container-sm">
    <div class="row mt-2 mx-auto rounded py-3 px-3">
        <div class="d-flex justify-content-between mb-1">
            <h1>Games Adding Form:</h1>
        </div>
<form action="{{route('storegame')}}" method='post' value="">
    @csrf
    <div class="mb-3">
        <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Title" name="title" value="{{old('title')}}">
            @error('title')
                <span style="color: red">{{$message}}</span>
            @enderror
    </div>
    <div class="mb-3">
        <input type="text" class="form-control @error('Console') is-invalid @enderror" placeholder="Console" name="Console" value="{{old('Console')}}">
            @error('Console')
                <span style="color: red">{{$message}}</span>
            @enderror
    </div>
    <div class="mb-3">
        <input type="text" class="form-control @error('price') is-invalid @enderror" placeholder="price" name="price" value="{{old('price')}}">
            @error('price')
                <span style="color: red">{{$message}}</span>
            @enderror
    </div>
    <div class="mb-3">
        <button type="submit" class="btnadd btn-primary btn-lg">Add Game</button>
    </div>
</form>
    </div>
</div>
@endsection
