<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use Illuminate\Http\Request;

class NiveauxController extends Controller
{
    public function index(){
        return view('niveaux.list');
    }


    public function create(){
        return view('niveaux.creates');
    }

    public function editeur(Niveau $niveau){
        return view('niveaux.edites', compact('niveau'));
    }
}
