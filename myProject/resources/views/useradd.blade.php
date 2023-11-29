@extends('layouts.nav')

@section('content')

<div class="container-sm">
    <div class="row mt-2 mx-auto rounded py-3 px-3">
        <div class="d-flex justify-content-between mb-1">
            <h1>User Adding Form:</h1>
        </div>
<form action="{{route('users.store')}}" method='post' >
    @csrf
    <div class="mb-3">    
        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{old('name')}}">
            @error('name')
                <span style="color: red">{{$message}}</span>
            @enderror
    </div>
    <div class="mb-3">
        <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{old('email')}}">
            @error('email')
                <span style="color: red">{{$message}}</span>
            @enderror
    </div>
    <div class="mb-3">
        <input type="text" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" value="{{old('password')}}">
            @error('password')
                <span style="color: red">{{$message}}</span>
            @enderror
    </div>
    <div class="mb-3">
        <input type="text" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Comfirm Password" name="password_confirmation" value="{{old('password_confirmation')}}">
            @error('password_confirmation')
                <span style="color: red">{{$message}}</span>
            @enderror
    </div>
    <select class="form-select mb-3 @error('role') is-invalid @enderror" placeholder="Role" name="role" value="{{old('role')}}" required>
        <option selected>Select Role</option>
        <option value="admin">Admin</option>
        <option value="user">User</option>
        <option value="editor">Editor</option>
        </select>
        @error('role')<span class="invalid-feedback">{{$errors->first('role')}}</span> @enderror
        
    <div class="mb-3">
        <button type="submit" class="btnadd btn-primary btn-lg">Add USER</button>
    </div>
</form>
    </div>
</div>
@endsection
