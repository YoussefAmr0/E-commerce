@extends('layout.Admin')
@section('section')

    <div class="container">
    <h1 class="text-3xl text-bold uppercase">show for user</h1>
        <form method="post" action="{{ route('users.store') }}">
            @csrf
            {{-- make the name of each input as in database --}}
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" name="name" value="{{$user->name}}" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" value="{{$user->email}}" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Role</label>
                <input type="test" class="form-control" name="role_as" value="{{$user->role_as}}" readonly>
                <div id="emailHelp" class="form-text">role 0 : user / role 1 : admin / role 2 : moderator</div>              
            </div>
        </form>
        <a href="{{ url()->previous() }}" class="btn btn-danger">back</a>
    </div>
@endsection
