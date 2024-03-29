<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\level;

class LevelController extends Controller
{
    public function edit(Level $level){
        return view('Newpage.editer', compact('level'));
    }

    public function index(){
        return view('Newpage.listclasse');
    }

    public function created(){
        return view('Newpage.createur');

    }
}
