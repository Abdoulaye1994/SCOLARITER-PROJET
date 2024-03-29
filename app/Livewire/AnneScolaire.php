<?php

namespace App\Livewire;

use App\Models\SchoolYear;
use Livewire\Component;
use Livewire\WithPagination;

class AnneScolaire extends Component
{
    use WithPagination;



    public function toggleStatus($id){
        //Mettre tout les lignes de la table active
        $query = SchoolYear::where('active', '1')->update(['active' => '0']);
    }

    public $search = '';

    public function render()
    {
        if(!empty($this->search)){
            $schoolYearList = SchoolYear::where('school_year','like','%'.$this->search.'%')
            ->orWhere('anne_actuel','like','%'.$this->search.'%')->paginate(3);
        } else {
            $schoolYearList = SchoolYear::paginate(3);
        }


        return view('livewire.anne-scolaire',   compact('schoolYearList'));
    }
}
