<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Announce extends Component
{

    public $is_mobile_device = true;

    public function render()
    {
        return view('admin.components.announce');
    }
}
