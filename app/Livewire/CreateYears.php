<?php

namespace App\Livewire;

use App\Models\SchoolYear;
use Carbon\Carbon;
use Exception;
use Livewire\Component;

class CreateYears extends Component
{

    public $libelle;

    public function store(SchoolYear $schoolYear){
     $this->validate([
        'libelle'=>'string|required|unique:school_years,school_year'
     ]);

     try{
        $anne_actuel = Carbon::now()->format('Y');

        $check = SchoolYear::where('anne_actuel' ,$anne_actuel)->get();

        //cette ligne de code permet a ce que l'anné ne soit pas enregistrer 2 fois

        $alreadyExist = $check->count(); // cette ligne de code permet de conter les resultats recuperer


        if($alreadyExist >= 0){

        return redirect()->back()->with('error', 'anné en cour a déja été ajouté');

        }else {

            $schoolYear->school_year= $this->libelle;
            $schoolYear->anne_actuel= $anne_actuel;

            $schoolYear->save();

            if($schoolYear){
               $this->libelle = '';
            }

            return redirect()->back()->with('success', 'Année Scolaire ajouter');


        }

     }catch(Exception $e){
    // sera prise en compte si il un problème
     }

    }


    public function render()
    {
        return view('livewire.create-years');
    }
}
