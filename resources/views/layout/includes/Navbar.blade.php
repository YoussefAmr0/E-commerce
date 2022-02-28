<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <h1 class="navbar-brand container">Fashion</h1>
    <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="d-flex" action="/search">
          <input class="form-control me-2 search-box " type="text" name="query" placeholder="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
        @if (Auth::check() && Auth::user()->role_as == '1' ||Auth::check() &&  Auth::user()->role_as == '2')
             <a href="/dashboard">Dashboard</a>
         @endif 
         <a href="{{ route('start.index') }}">Home</a> 
          <a href="{{ route('women.index') }}">Women</a> 
          <a href="{{ route('men.index') }}">Men</a> 
          <a href="{{ route('footwear.index') }}">Footwear</a>
          <a href="{{ route('accessories.index') }}">Accessories</a> 
          <a href="{{ route('sales.index') }}">Sales</a> 
          <a href="{{ route('blog.index') }}">Blog</a> 
          <a href="{{ route('cart.index') }}" class="flex items-center">MyCart
             <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                 stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                 <path
                     d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                 </path>
             </svg>
         </a> 
     <!-- Right Side Of Navbar -->
     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         <!-- Authentication Links -->
         @guest
             @if (Route::has('login'))
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-user me-1 text-gray fw-normal">{{ __('Login') }}</i></a>
                 </li>
             @endif
         @else
             <li class="nav-item dropdown">
                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                     data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     {{ Auth::user()->name }}
                 </a>

                 <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
                 </div>
             </li>
         @endguest
     </ul>
 </div>
    </div>
  </div>
</nav>
<style>
    .navbar {
        background-color: black;
        color: aliceblue;
    }

    .nav {
        padding: 0 80px;
    }

    a {
        color: aliceblue;
        text-decoration: none;
        padding: 0 10px;
    }

    a:hover {
        color: purple;
    }

    .navbar-brand {
        color: aliceblue;
    }

    .search-box {
        width: 250px !important;
    }

</style>
