<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Play extends Model
{
    use HasFactory;
    protected $fillable = ['box0','box1','box2','box3','box4','box5','box6','box7','box8',"win"];
}
