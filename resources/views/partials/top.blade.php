<link type="text/css" rel="stylesheet" href="{{ asset('css/styles.css') }}">  
    <link type="text/css" rel="stylesheet" href="{{ asset('css/normalize.css') }}">

<header>
<div class="container">
    <img src="../img/logo.png" alt="logo" class="logo" >
    
    <nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
      <ul class="nav nav-pills">
        <li><a href="{{ route('index') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('game') }}">Game</a></li>
        @guest
        <li><a href="{{ route('login') }}">Log in</a></li>
        @else 
        <li><a href="{{ route('past.index') }}">History</a></li>
        <li>
            <a href="#" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Log Out</a>
        </li>
        @endguest

        
        
      </ul>
    </nav>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
  </div>
</header>