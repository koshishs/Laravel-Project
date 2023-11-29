@extends('layouts.nav')

@section('content')
<div class="container">
<div class="p-5">
        <div class="d-flex justify-content-between align-items-baseline">
            <h3 class="ps-0 text-dark">CD Products</h3>
           @can('isadmin')
            <a href="{{route('addcd')}}" class="btn-success btn text-decoration-none ">Add New</a>
            @endcan
            </div>
            <form action="{{ asset('/cd') }}" class="d-flex" role="search">
                        <input class="form-control me-2" type="text" name="user_search" placeholder="Search"
                            aria-label="Search">
                        
                </form>
            <table class="table table-hover">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Artist Name</td>
                    <td>Playlength</td>
                    <td>Prices</td>
                    @can('isadmin')
                    <td>Action</td>
                    @elsecan('iseditor')
                    <td>Action</td>
                    @endcan
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($cds as $cd)
                <tr>
                    <td data-label="ID">{{$cd->id}}</td>
                    <td data-label="Title">{{$cd->title}}</td>
                    <td data-label="Author Name">{{$cd->firstname.' '.$cd->band}}</td>
                    <td data-label="Playlength">{{$cd->playlength}}mins</td>
                    <td data-label="Price">$ {{$cd->price}}</td>
                    @can('isadmin')
                    <td data-label="">
                    <button onclick="window.location='{{route('editcd', $cd->id)}}'" >Edit</button>
                        <button type="submit"  form="form-{{$cd->id}}">Delete</button>
                        <form id="form-{{$cd->id}}" class="d-none" action="{{route('deletecd', $cd->id)}}" method="POST">
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                    @elsecan('iseditor')
                    <td data-label="">
                        <a href="{{route('editcd',$cd->id)}}" class="btn-success btn btn-sm text-decoration-none">Edit</a>
                    </td>
                    @endcan
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{$cds->links()}}
        </div>
    </div>
</div>
@endsection