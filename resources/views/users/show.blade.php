@extends('layouts.app')


@section('content')


<h3>Show Users</h3>
<h2>Hello, {{session('user')}}</h2>

<div class="row">
    <div class="col-sm-4">
        <label>Name</label>
        <p>{{$user->name}}</p>
    </div>

    <div class="col-sm-4">
        <label>Email</label>
        <p>{{$user->email}}</p>
    </div>
    <div class="col-sm-4">
        <label>Roles</label>
        <p>
            @foreach ($user->roles as $role )
            {{$role->name}} {{!$loop->last ? ',' : ''}}
            @endforeach
        </p>
        
        
    </div>
   
</div>

@endsection