@extends('layouts.app')


@section('content')


<h3>Add New Users</h3>


 <form action="{{ route('users.user')}}"  method="POST"> 
    
    @csrf

   

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

   
    <button type="submit" class="btn btn-dark px-4">Submit</button>



    

</form>
@endsection