@extends('layout.Admin')
@section('section')
    <div class="container">
        <table class="table">
    <h1>users page</h1>

            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">role</th>
                    <th scope="col">created at</th>
                    <th scope="col">Controlls</th>
                </tr>
            </thead>
            @foreach ($user as $users)
            <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $users->name }}</td>
                        <td>{{ $users->email }}</td>
                        <td>{{ $users->role_as }}</td>
                        <td>{{ $users->created_at->diffForHumans() }}</td>
                        <td class="d-flex">
                            <a class="btn btn-info" href="{{ route('users.show', $users->id) }}">Show</a>
                            @if (Auth::check() && Auth::user()->role_as == '1')
                            <a class="btn btn-warning" href="{{ route('users.edit', $users->id) }}">Edit</a>
                            <form method="post" action="{{ route('users.destroy', $users->id) }}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="delete" class="btn btn-danger">
                            </form>
                            @endif
                        </td>
                    </tr>
            </tbody>
            @endforeach
        </table>
        <a href="{{ route('users.create') }}" class="btn btn-primary">add user</a>
        
    </div>

    
@endsection
