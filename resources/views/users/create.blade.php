@extends('layouts.app')


@section('content')


<h3>Add New Users</h3>
<form action="{{ route('users.store')}}" method="POST">
@csrf

<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" />
    @error('name')
    <span class="text-danger">{{ $message }}</span>
    @enderror

</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" class="form-control" />
    @error('email')
    <span class="text-danger">{{$message}}</span>
    @enderror

</div>


<div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" />
    @error('password')
    <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    <label for="roles">roles</label>

   
    <select class=" form-control"  name="roles">
    @foreach ($roles as $role)
    <option value="{{$role->id}}"> {{$role->name}}</option>
        
    @endforeach
</select>
    @error('roles')
    <span class="text-danger">{{$message}}</span>
    @enderror


</div>
<button type="submit" class="btn btn-dark px-4" >Register</button>




</form>

<br>

<a href="{{ route('login') }}" class="btn btn-primary">Login</a>

@endsection













