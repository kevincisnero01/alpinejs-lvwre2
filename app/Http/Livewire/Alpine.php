<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Alpine extends Component
{
    public $count1 = 0;
    public $count2 = 0;
    public $count3 = 0;

    public function increment()
    {
        $this->count3++;
    }
    
    public function render()
    {
        return view('livewire.alpine');
    }
}
