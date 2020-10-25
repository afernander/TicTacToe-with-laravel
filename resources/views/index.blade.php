@extends('layout')

@section('content')


    <link type="text/css" rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/boxes.css') }}">        
    
    <div class="container">
      <h1 id="maintitle">Welcome to Alejandro Fernandez - <font color="#0AEAF0">Tic</font> <font color="#D7260E">Tac</font><font color="#2D4108"> Toe</font> </h1>
      <p><strong>Note:</strong> This proyect was made for proyecto integrador 1 using laravel.</p>
      <p>To start click on Login.</p>
      @guest
      <p><a href="{{ route('login') }}" ><img alt="login in" src="../img/login.png" id="login"> </a></p>
      @endguest
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <br>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @auth
                        {{ __('You are logged in!') }}
                        
                            welcome {{ auth()->user()->name }}
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
      <p id="text">If you try to go to 
      <a href="{{ route('game') }}" > game</a> without logging in , the page will redirect you to the loging in </p>
    </div>
    

@endsection