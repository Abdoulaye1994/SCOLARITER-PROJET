<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function indexhome(){
        return view('Page.Accueil');
    }


    public function indexpaiement(){
        return view('Page.paiement');
    }

    public function indexparent(){
        return view('Page.parent');
    }


    public function indexblog(){
        return view('Page.Blog');
    }


    public function indexinscrit(){
        return view('Page.Inscription');
    }

    public function indexpro(){
        return view('Page.Programme');
    }

    public function indexgal(){
        return view('Page.Galerie');
    }
}
