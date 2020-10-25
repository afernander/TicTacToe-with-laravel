@extends('layout')

@section('content')
<link type="text/css" rel="stylesheet" href="{{ asset('css/normalize.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('css/boxes.css') }}"> 



    <form method="POST" action="{{ route('game') }}">
        {{  csrf_field() }}
        @if($winner=="x")
            <div id="winlabel"> @auth
                             {{ auth()->user()->name }}
                        @endauth
                        @guest
                        x 
                        @endguest
                 wins</div>
        @elseif($winner=="o")
        <div id="winlabel"> O wins</div>
        @elseif($winner=="n")
        <div id="winlabel">Tie Game</div>
        @endif
    <?php

       
    
        printf('<div id="block">');
        for($i=0;$i<9;$i++){
            printf('<input type="text" name="box%s" value="%s" id="box">', $i,$box[$i]);
            if($i==2 || $i==5 || $i==8){
                print('<br>');
            }
        }
        print('</div>');
        ?>
        @if($winner=='t')
        <input type="submit" name="submitbtn" onclick="{{ route('game') }}" value="Go" id="go">
        @else
            <input type="submit" name="newgambtn" value="Play Again" onclick="{{ route('game.store') }}" id="playagain" >
        @endif
        
    </form>


@endsection