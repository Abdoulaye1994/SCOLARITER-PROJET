<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\level;

class DashborController extends Controller
{
    public function indexscolaire(){
        return view('Page.anne');
    }

    public function indexcreate(){
        return view('Page.createyears');
    }

    public function indexniveau(){
        return view('Page.niveau');
    }

    public function indexnive(){
        return view('Page.createlevel');
    }

   
}
