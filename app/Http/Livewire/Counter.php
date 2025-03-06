<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    protected $listeners = ['increaseCounter' => 'increment'];

    public function increment()
    {
        echo "hello2";
        $this->count++;
    }

    public function render()
    {
        echo "hello";
        return view('livewire.counter');
    }
}
