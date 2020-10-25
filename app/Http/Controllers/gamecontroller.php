<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Play;

class gamecontroller extends Controller
{
    function game(){
        $winner='t';
        $box = array('','','','','','','','','');
        $boxname="box";
        if (isset($_POST["submitbtn"])){
            for($i=0;$i<9;$i++){
            $box[$i]=$_POST[$boxname.$i];
            }
            //print_r($box);
            if(($box[0]=='x'&&$box[1]=='x'&&$box[2]=='x')||($box[3]=='x'&&$box[4]=='x'&&$box[5]=='x')||($box[6]=='x'&&$box[7]=='x'&&$box[8]=='x')
            ||($box[0]=='x'&&$box[3]=='x'&&$box[6]=='x')||($box[1]=='x'&&$box[4]=='x'&&$box[7]=='x')||($box[2]=='x'&&$box[5]=='x'&&$box[8]=='x')
            ||($box[0]=='x'&&$box[4]=='x'&&$box[8]=='x')||($box[2]=='x'&&$box[4]=='x'&&$box[6]=='x')){
                $winner='x';
               
                
            }
         
            $blank=0;
            for($i=0;$i<9;$i++){
                if($box[$i]==''){
                    $blank=1;
                }
            }
            if($blank==1 && $winner =='t'){
                $x=rand() % 8;
                while($box[$x]!= ''){
                    $x=rand() % 8;
                }
                $box[$x]='o';
                if(($box[0]=='o'&&$box[1]=='o'&&$box[2]=='o')||($box[3]=='o'&&$box[4]=='o'&&$box[5]=='o')||($box[6]=='o'&&$box[7]=='o'&&$box[8]=='o')
            ||($box[0]=='o'&&$box[1]=='o'&&$box[2]=='o')||($box[1]=='o'&&$box[4]=='o'&&$box[7]=='o')||($box[2]=='o'&&$box[5]=='o'&&$box[8]=='o')
            ||($box[0]=='o'&&$box[4]=='o'&&$box[8]=='o')||($box[2]=='o'&&$box[4]=='o'&&$box[6]=='o')){
                $winner='o';
                
            }
            
            }else if ($winner=='t'){
                $winner='n';
            }
            if(($box[0]=='o'&&$box[1]=='o'&&$box[2]=='o')||($box[3]=='o'&&$box[4]=='o'&&$box[5]=='o')||($box[6]=='o'&&$box[7]=='o'&&$box[8]=='o')
            ||($box[0]=='o'&&$box[1]=='o'&&$box[2]=='o')||($box[1]=='o'&&$box[4]=='o'&&$box[7]=='o')||($box[2]=='o'&&$box[5]=='o'&&$box[8]=='o')
            ||($box[0]=='o'&&$box[4]=='o'&&$box[8]=='o')||($box[2]=='o'&&$box[4]=='o'&&$box[6]=='o')){
                $winner='o';
            }
        }
        if($winner!='t'){
        Play::create([
            'box0' => $box[0],
            'box1' => $box[1],
            'box2' => $box[2],
            'box3' => $box[3],
            'box4' => $box[4],
            'box5' => $box[5],
            'box6' => $box[6],
            'box7' => $box[7],
            'box8' => $box[8],
            'win' => $winner

              ]);
        }

        return view('game',compact('box'),compact('winner'));
    }
    
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plays =  Play::latest()->get();

        return view('past',compact('plays'));
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('game');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Play::create([
            'box0' => request('box0'),
            'box1' => request('box1'),
            'box2' => request('box2'),
            'box3' => request('box3'),
            'box4' => request('box4'),
            'box5' => request('box5'),
            'box6' => request('box6'),
            'box7' => request('box7'),
            'box8' => request('box8'),
            'win' => request('win')
        ]);
        return redirect()->route('game');
    }
}
