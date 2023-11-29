
<div class="container">
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block px-2 py-1 d-flex alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close p-0 m-2" data-bs-dismiss='alert'></button> 
    <strong>{{ $message }}</strong>
</div>
@endif

 
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block px-2 py-1 d-flex alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close p-0 m-2" data-bs-dismiss='alert'></button>
    <strong>{{ $message }}</strong>
</div>
@endif
 
 
@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block px-2 py-1 d-flex alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close p-0 m-2" data-bs-dismiss='alert'></button>
    <strong>{{ $message }}</strong>
</div>
@endif
 
 
@if ($message = Session::get('info'))
<div class="alert alert-info alert-block px-2 py-1 d-flex alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close p-0 m-2" data-bs-dismiss='alert'></button>
    <strong>{{ $message }}</strong>
</div>
@endif
 
 
@if ($errors->any())
<div class="alert alert-danger px-2 py-1 d-flex alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close p-0 m-2" data-bs-dismiss='alert'></button>
    Please check the form below for errors
</div>
@endif
</div>

{{-- <div class="container position-relative">
    <div class="alert alert-success px-2 py-1 d-flex alert-dismissible fade show" role="alert">
        <span class="me-4">{{ __('A new email verification link has been emailed to you!') }}</span>
        <button type="button" class="btn-close p-0 m-2" data-bs-dismiss='alert' data-dismiss="alert"></button>	
    </div>
</div> --}}
