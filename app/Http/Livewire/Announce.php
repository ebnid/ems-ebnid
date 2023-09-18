<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Jenssegers\Agent\Agent;

class Announce extends Component
{

    public $browser;
    public $platform;
    public $device;

    public function mount()
    {
        $agent = new Agent();
        $this->browser = $agent->browser();
        $this->platform = $agent->platform();
        $this->device = $agent->device();
    }

    public function render()
    {
        return view('admin.components.announce');
    }
}
