<?php

namespace App\Livewire;

use App\Models\Niveau;
use Exception;
use Livewire\Component;

class EditionsNiveaux extends Component
{
    public $niveau;
    public $code;
    public $libelle;
    public $scolarite;

    public function mount(Niveau $niveau){

        $niveau-> code = $this->niveau->code;
        $niveau-> libelle = $this->niveau->libelle;
        $niveau-> scolarite = $this->niveau->scolarite;


    }

    public function store(){

        $niveau = Niveau::find($this->niveau->id);
        $this->validate([
           'code'=>'string|required',
           'libelle'=>'string|required',
           'scolarite'=>'integer|required'
        ]);

        try{
           // recuperer les donnés dont l'active = 1

            $niveau-> code = $this->code;
            $niveau-> libelle = $this->libelle;
            $niveau-> scolarite = $this->scolarite->id;


           // $niveau->save();

            return redirect()->route('niveaux')->with('success', 'Niveau scolaire ajouter');


           } catch(Exception $e){
            // sera prise en compte si il un problème
            dd('error');
             }

        }




    public function render()
    {
        return view('livewire.editions-niveaux');
    }
}
