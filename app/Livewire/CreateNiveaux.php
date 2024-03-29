<?php

namespace App\Livewire;

use App\Models\Niveau;
use App\Models\SchoolYear;
use Livewire\Component;
use Exception;

class CreateNiveaux extends Component
{
    public $code;
    public $libelle;
    public $scolarite;

    public function store(Niveau $niveau){
        $this->validate([
           'code'=>'string|required|unique:niveaux,code',
           'libelle'=>'string|required|unique:niveaux,libelle',
           'scolarite'=>'integer|required|unique:niveaux,scolarite'
        ]);

        try{
           // recuperer les donnés dont l'active = 1

            $activeSchoolYear = SchoolYear::where('active', 1)->first();


            $niveau->code = $this->code;
            $niveau->libelle = $this->libelle;
            $niveau->scolarite = $this->scolarite;
            $niveau->school_year_id = $activeSchoolYear->id;

            $niveau->save();

            return redirect()->route('niveaux.index')->with('success', 'Niveau scolaire ajouter');


           } catch(Exception $e){
            // sera prise en compte si il un problème

             }

        }



    public function render()
    {
        return view('livewire.create-niveaux');
    }
}
