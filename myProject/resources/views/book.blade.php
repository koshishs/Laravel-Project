@extends('layouts.nav')

@section('content')
<div class="container">
    <div class="p-5">
        <div class="d-flex justify-content-between align-items-baseline">
        <h3 class="ps-2 text-dark">Book Products</h3>
        @can('isadmin')
        <a href="{{route('addbook')}}" class="btn-success btn text-decoration-none ">Add New</a>
        @endcan
        </div>
        <table class="table table-hover">
           
        <form action="{{ asset('/book') }}" class="d-flex" role="search">
                        <input class="form-control me-2" type="text" name="user_search" placeholder="Search"
                            aria-label="Search">
                        
                </form>

            <thead>
                <tr>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Author Name</td>
                    <td>Prices</td>
                    <td>Pages</td>
                    @can('isadmin')
                    <td>Action</td>
                    @elsecan('iseditor')
                    <td>Action</td>
                    @endcan
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <td data-label="ID">{{$book->id}}</td>
                    <td data-label="Title">{{$book->title}}</td>
                    <td data-label="Author Name">{{$book->firstname.' '.$book->surname}}</td>
                    <td data-label="Price">$ {{$book->price}}</td>
                    <td data-label="No of Pages">{{$book->pages}}</td>
                    @can('isadmin')
                    <td data-label="Action">
                        <button onclick="window.location='{{route('editbook', $book->id)}}'" >Edit</button>
                        <button type="submit"  form="form-{{$book->id}}">Delete</button>
                        <form id="form-{{$book->id}}" class="d-none" action="{{route('deletebook', $book->id)}}" method="POST">
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                    
                    @elsecan('iseditor')
                    <td data-label="Action">
                        <button onclick="window.location='{{route('editbook', $book->id)}}'" >Edit</button>
                    </td>
                    @endcan
                </tr>
                @endforeach
            </tbody>
        </table>
            <div class="d-flex justify-content-center">
                {{$books->links()}}
            </div>
    </div>
</div>

@endsection