@extends('layouts.nav')

@section('content')
<div class="modproduct p-5">
<form action="{{route('users.update',$user->id)}}" method='post' value="">
    @csrf
    @method('put')
    <div class="p-2"> 
        <h1>Modify User</h1>
    </div>
    <div class="form">
        <input type="text" class="form-control mb-2 @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{$user->name}}">
            @error('name')
                <span style="color: red">{{$message}}</span>
            @enderror
        <input type="text" class="form-control mb-2 @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{$user->email}}">
            @error('email')
                <span style="color: red">{{$message}}</span>
            @enderror
            <select class="form-select mb-3 @error('role') is-invalid @enderror" placeholder="Role" name="role" value="{{old('role')}}" required>
                <option value="admin">Admin</option>
                <option selected value="user">User</option>
                <option value="editor">Editor</option>
                </select>
                @error('role')<span class="invalid-feedback">{{$errors->first('role')}}</span> @enderror

        <button type="submit" class="btnupdate btn-primary btn-lg updatecd">UPDATE </button>
        
    </div>
</form>
</div>
@endsection