@extends('layout.Admin')
@section('section')

    <div class="container">
    <h1 class="text-3xl text-bold uppercase">edit for user</h1>
        <form method="post" action="{{ route('users.update',$user->id) }}">
            @csrf
            @method('put')   
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" name="name" value="{{$user->name}}">        
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" value="{{$user->email}}">              
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" value="{{$user->password}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Role</label>
                <input type="text" class="form-control" name="role_as" value="{{$user->role_as}}">
                <div id="emailHelp" class="form-text">role 0 : user / role 1 : admin / role 2 : moderator</div>              
            </div>
        <a href="{{ url()->previous() }}" class="btn btn-danger">back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
