<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Mobile extends Component
{
    public $num1;
    public $num2;
    public $result;
    public $message = '';


    protected $listeners = ['resultCalculated' => "calculated"];

    public function calculated() {
        $this->message = "Result Calculated";
    }

    public function add() {
        $this->result = $this->num1 + $this->num2;
        $this->emit('resultCalculated');
    }
    
    public function render()
    {
        return view('livewire.mobile');
    }
}
