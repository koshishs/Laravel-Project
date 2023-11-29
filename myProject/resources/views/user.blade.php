@extends('layouts.nav')

@section('content')
<div class="container">
<div class="p-5">
        <div class="d-flex justify-content-between align-items-baseline">
            <h3 class="ps-0 text-dark">Users</h3>
            <a href="{{route('users.create')}}" class="btn-success btn text-decoration-none ">Add New</a>
            </div>
            <table class="table table-hover">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td data-label="id">{{$user->id}}</td>
                    <td data-label="name">{{$user->name}}</td>
                    <td data-label="email">{{$user->email}}</td>
                    <td data-label="">

                    <button onclick="window.location='{{route('users.edit', $user->id)}}'" >Edit</button>
                        <button type="submit"  form="form-{{$user->id}}">Delete</button>
                        <form id="form-{{$user->id}}" class="d-none" action="{{route('deletecd', $user->id)}}" method="POST">

                 
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{$users->links()}}
        </div>
    </div>
</div>
@endsection