<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class MasterLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */

    public $title;


    public function __construct($title)
    {
        $this->title = $title;
    }

    
    public function render(): View
    {
        return view('admin.layouts.master-layout');
    }
}
