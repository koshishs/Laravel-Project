@extends('layouts.nav')

@section('content')
<div class="container">
    <div class="p-5">
        <div class="d-flex justify-content-between align-items-baseline">
            <h3 class="ps-0 text-dark">Game Products</h3>
           @can('isadmin')
            <a href="{{route('addgame')}}" class="btn-success btn text-decoration-none ">Add New</a>
            @endcan
            </div>
            <form action="{{ asset('/game') }}" class="d-flex" role="search">
                        <input class="form-control me-2" type="text" name="user_search" placeholder="Search"
                            aria-label="Search">
                        
                </form>
            <table class="table table-hover">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Console</td>
                    <td>Prices</td>
                    @can('isadmin')
                    <td>Action</td>
                    @elsecan('iseditor')
                    <td>Action</td>
                    @endcan
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($games as $game)
                <tr>
                    <td data-label="ID">{{$game->id}}</td>
                    <td data-label="Title">{{$game->title}}</td>
                    <td data-label="Console">{{$game->Console}}</td>
                    <td data-label="Price">$ {{$game->price}}</td>
                    @can('isadmin')
                    <td data-label="">
                    <button onclick="window.location='{{route('editgame', $game->id)}}'" >Edit</button>
                        <button type="submit"  form="form-{{$game->id}}">Delete</button>
                        <form id="form-{{$game->id}}" class="d-none" action="{{route('deletegame', $game->id)}}" method="POST">
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                    @elsecan('iseditor')
                    <td data-label="">
                        <a href="{{route('editgame',$game->id)}}">Edit</a>
                    </td>
                    @endcan
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{$games->links()}}
        </div>
    </div>
</div>
@endsection