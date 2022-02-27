@extends('layout.Admin')
@section('section')
    {{-- users section --}}
    <div class="container mt-4 mb-5">
        <table class="table">
            <h1 class="text-3xl text-bold uppercase">users section</h1>

            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">role</th>
                    <th scope="col">created at</th>
                    <th scope="col">Controlls</th>
                </tr>
            </thead>
            @foreach ($users as $user)
                <tbody>
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role_as }}</td>
                        <td>{{ $user->created_at->diffForHumans() }}</td>
                        <td class="d-flex">
                            <a class="btn btn-info" href="{{ route('users.show', $user->id) }}">Show</a>
                            @if (Auth::check() && Auth::user()->role_as == '1')
                            <a class="btn btn-warning" href="{{ route('users.edit', $user->id) }}">Edit</a>
                            <form method="post" action="{{ route('users.destroy', $user->id) }}">
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


    {{-- womens section --}}
    <div class="container mt-4 mb-5">
        <table class="table">
            <h1 class="text-3xl text-bold uppercase">women section</h1>

            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">image</th>
                    <th scope="col">name</th>
                    <th scope="col">price</th>
                    <th scope="col">description</th>
                    <th scope="col">added from</th>
                    <th scope="col">Controlls</th>
                </tr>
            </thead>
            @foreach ($women as $womens)
                <tbody>
                    <tr>
                        <th scope="row">{{ $womens->id }}</th>
                        <td><img class="w-20" src="{{ asset('uploads/students/' . $womens->image) }}" alt=""
                                class="w-full max-h-60"></td>
                        <td>{{ $womens->name }}</td>
                        <td>{{ $womens->price }}</td>
                        <td>{{ $womens->description }}</td>
                        <td>{{ $womens->created_at->diffForHumans() }}</td>
                        <td class="d-flex">
                            <a class="btn btn-info" href="{{ route('womens.show', $womens->id) }}">Show</a>
                            @if (Auth::check() && Auth::user()->role_as == '1')
                            <a class="btn btn-warning" href="{{ route('womens.edit', $womens->id) }}">Edit</a>
                            <form method="post" action="{{ route('womens.destroy', $womens->id) }}">
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
        <a href="{{ route('womens.create') }}" class="btn btn-primary">add men product</a>
    </div>

    {{-- mens section --}}
    <div class="container mt-4 mb-5">
        <table class="table">
            <h1 class="text-3xl text-bold uppercase">men section</h1>

            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">image</th>
                    <th scope="col">name</th>
                    <th scope="col">price</th>
                    <th scope="col">description</th>
                    <th scope="col">added from</th>
                    <th scope="col">Controlls</th>
                </tr>
            </thead>
            @foreach ($men as $mens)
                <tbody>
                    <tr>
                        <th scope="row">{{ $mens->id }}</th>
                        <td><img class="w-20" src="{{ asset('uploads/students/' . $mens->image) }}" alt=""
                                class="w-full max-h-60"></td>
                        <td>{{ $mens->name }}</td>
                        <td>{{ $mens->price }}</td>
                        <td>{{ $mens->description }}</td>
                        <td>{{ $mens->created_at->diffForHumans() }}</td>
                        <td class="d-flex">
                            <a class="btn btn-info" href="{{ route('mens.show', $mens->id) }}">Show</a>
                            @if (Auth::check() && Auth::user()->role_as == '1')
                            <a class="btn btn-warning" href="{{ route('mens.edit', $mens->id) }}">Edit</a>
                            <form method="post" action="{{ route('mens.destroy', $mens->id) }}">
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
        <a href="{{ route('mens.create') }}" class="btn btn-primary">add men product</a>
    </div>



    {{-- footwears section --}}
    <div class="container mt-4 mb-5">
        <table class="table">
            <h1 class="text-3xl text-bold uppercase">footwear section</h1>

            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">image</th>
                    <th scope="col">name</th>
                    <th scope="col">price</th>
                    <th scope="col">description</th>
                    <th scope="col">added from</th>
                    <th scope="col">Controlls</th>
                </tr>
            </thead>
            @foreach ($footwear as $footwears)
                <tbody>
                    <tr>
                        <th scope="row">{{ $footwears->id }}</th>
                        <td><img class="w-20" src="{{ asset('uploads/students/' . $footwears->image) }}" alt=""
                                class="w-full max-h-60"></td>
                        <td>{{ $footwears->name }}</td>
                        <td>{{ $footwears->price }}</td>
                        <td>{{ $footwears->description }}</td>
                        <td>{{ $footwears->created_at->diffForHumans() }}</td>
                        <td class="d-flex">
                            <a class="btn btn-info" href="{{ route('footwear.show', $footwears->id) }}">Show</a>
                            @if (Auth::check() && Auth::user()->role_as == '1')
                            <a class="btn btn-warning" href="{{ route('footwear.edit', $footwears->id) }}">Edit</a>
                            <form method="post" action="{{ route('footwear.destroy', $footwears->id) }}">
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
        <a href="{{ route('footwear.create') }}" class="btn btn-primary">add footwear product</a>
    </div>


    {{-- accessories section --}}
    <div class="container mt-4 mb-5">
        <table class="table">
            <h1 class="text-3xl text-bold uppercase">accessories section</h1>

            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">image</th>
                    <th scope="col">name</th>
                    <th scope="col">price</th>
                    <th scope="col">description</th>
                    <th scope="col">added from</th>
                    <th scope="col">Controlls</th>
                </tr>
            </thead>
            @foreach ($accessories as $accessoriess)
                <tbody>
                    <tr>
                        <th scope="row">{{ $accessoriess->id }}</th>
                        <td><img class="w-20" src="{{ asset('uploads/students/' . $accessoriess->image) }}"
                                alt="" class="w-full max-h-60"></td>
                        <td>{{ $accessoriess->name }}</td>
                        <td>{{ $accessoriess->price }}</td>
                        <td>{{ $accessoriess->description }}</td>
                        <td>{{ $accessoriess->created_at->diffForHumans() }}</td>
                        <td class="d-flex">
                            <a class="btn btn-info" href="{{ route('accessories.show', $accessoriess->id) }}">Show</a>
                            @if (Auth::check() && Auth::user()->role_as == '1')
                            <a class="btn btn-warning" href="{{ route('accessories.edit', $accessoriess->id) }}">Edit</a>
                            <form method="post" action="{{ route('accessories.destroy', $accessoriess->id) }}">
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
        <a href="{{ route('accessories.create') }}" class="btn btn-primary">add accessories product</a>
    </div>


    {{-- sales section --}}
    <div class="container mt-4 mb-5">
        <table class="table">
            <h1 class="text-3xl text-bold uppercase">sale section</h1>

            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">image</th>
                    <th scope="col">name</th>
                    <th scope="col">old price</th>
                    <th scope="col">new price</th>
                    <th scope="col">sale percent</th>
                    <th scope="col">description</th>
                    <th scope="col">added from</th>
                    <th scope="col">Controlls</th>
                </tr>
            </thead>
            @foreach ($sales as $sale)
                <tbody>
                    <tr>
                        <th scope="row">{{ $sale->id }}</th>
                        <td><img class="w-20" src="{{ asset('uploads/students/' . $sale->image) }}" alt=""
                                class="w-full max-h-60"></td>
                        <td>{{ $sale->name }}</td>
                        <td>{{ $sale->old_price }}</td>
                        <td>{{ $sale->new_price }}</td>
                        <td>{{ $sale->sale_percent }}</td>
                        <td>{{ $sale->description }}</td>
                        <td>{{ $sale->created_at->diffForHumans() }}</td>
                        <td class="d-flex">
                            <a class="btn btn-info" href="{{ route('sales.show', $sale->id) }}">Show</a>
                            @if (Auth::check() && Auth::user()->role_as == '1')
                            <a class="btn btn-warning" href="{{ route('sales.edit', $sale->id) }}">Edit</a>
                            <form method="post" action="{{ route('sales.destroy', $sale->id) }}">
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
        <a href="{{ route('sales.create') }}" class="btn btn-primary">add sale product</a>
    </div>


    {{-- blog section --}}
    <div class="container mt-4 mb-5">
        <table class="table">
            <h1 class="text-3xl text-bold uppercase">blog section</h1>

            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">image</th>
                    <th scope="col">title</th>
                    <th scope="col">description</th>
                    <th scope="col">added from</th>
                    <th scope="col">controlls</th>
                </tr>
            </thead>
            @foreach ($blog as $blogs)
                <tbody>
                    <tr>
                        <th scope="row">{{ $blogs->id }}</th>
                        <td><img class="w-20" src="{{ asset('uploads/students/' . $blogs->image) }}" alt=""
                                class="w-full max-h-60"></td>
                        <td>{{ $blogs->title }}</td>
                        <td>{{ $blogs->description }}</td>
                        <td>{{ $blogs->created_at->diffForHumans() }}</td>
                        <td class="d-flex">
                            <a class="btn btn-info" href="{{ route('blog.show', $blogs->id) }}">Show</a>
                            @if (Auth::check() && Auth::user()->role_as == '1')
                            <a class="btn btn-warning" href="{{ route('blog.edit', $blogs->id) }}">Edit</a>
                            <form method="post" action="{{ route('blog.destroy', $blogs->id) }}">
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
        <a href="{{ route('blog.create') }}" class="btn btn-primary">add blog</a>
    </div>
@endsection
