<?php

namespace App\Livewire;

use App\Models\Classe;
use Livewire\Component;
use Livewire\WithPagination;

class ListeurClasses extends Component
{
    use WithPagination;
    public $search = '';
    public function render()
    {
        //recur les donnés:
        if(!empty($this->search)){
            $ClassesList = Classe::where('libelle', 'like', '%' . $this->search . '%')->orWhere('code', 'like',
             '%' . $this->search . '%')->paginate(3);
        }
        else{
            $ClassesList = Classe::paginate(3);
        }


        return view('livewire.listeur-classes', compact('ClassesList'));
    }
}
