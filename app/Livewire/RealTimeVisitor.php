<?php

namespace App\Livewire;

use App\Models\Tamu;
use Livewire\Component;

class RealTimeVisitor extends Component
{
    public $tamu;

    public function mount(){
        $this->tamu = Tamu::all();; //mengambil data tamu saat komponen dimuat
    }

    public function render()
    {
        return view('livewire.real-time-visitor');
    }
}
