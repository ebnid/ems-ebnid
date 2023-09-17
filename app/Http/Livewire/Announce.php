<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Jenssegers\Agent\Agent;

class Announce extends Component
{

    public $is_mobile_device = true;
    public $browser;

    public function mount()
    {
        $agent = new Agent();
        $this->browser = $agent->browser();
        $this->is_mobile_device = $agent->isMobile();
    }

    public function render()
    {
        return view('admin.components.announce');
    }
}
