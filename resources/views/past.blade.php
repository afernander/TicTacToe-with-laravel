@extends('layout')

@section('content')
<link type="text/css" rel="stylesheet" href="{{ asset('css/normalize.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('css/boxes.css') }}"> 

@forelse ($plays as $play)
<div id="block">
    <p>The winner was {{ $play->win }}</p>
    <?php
    $box=array($play->box0,$play->box1,$play->box2,$play->box3,$play->box4,$play->box5,$play->box6,$play->box7,$play->box8);
    for($i=0;$i<9;$i++){
            printf('<input type="text" name="box%s" value="%s" id="box">', $i,$box[$i]);
            if($i==2 || $i==5 || $i==8){
                print('<br>');
            };
        };

    ?>
    <br>
    
    </div>
    @empty
    <p>No data to show</p>
@endforelse
@endsection