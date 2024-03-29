<?php

namespace App\Livewire;

use App\Models\Niveau;
use Livewire\Component;
use Livewire\WithPagination;

class ListNiveaux extends Component
{
    use WithPagination;
    public $search = '';
    public function render()
    {

          //recur les donnés:
          if(!empty($this->search)){
            $Niveaux = Niveau::where('libelle', 'like', '%' .
             $this->search . '%')->orWhere('code', 'like',
             '%' . $this->search . '%')->paginate(3);
        }
        else{
            $Niveaux = Niveau::paginate(3);
        }

        return view('livewire.list-niveaux', compact('Niveaux'));
    }
}
