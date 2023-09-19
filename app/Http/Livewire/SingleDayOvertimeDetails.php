<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SingleDayOvertimeDetails extends Component
{

    protected $rules = [];

    
    public function render()
    {
        return view('admin.components.single-day-overtime-details');
    }
}
