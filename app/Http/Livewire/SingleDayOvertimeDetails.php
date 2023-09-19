<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Overtime;

class SingleDayOvertimeDetails extends Component
{

    public $is_show_single_day_overtime_list = false;

    public $overtimes = [];

    protected $rules = [
        'onSingleDayOvertimeDetails' => 'preparedSingleDayOvertimeList'
    ];


    public function render()
    {
        return view('admin.components.single-day-overtime-details');
    }


    public function preparedSingleDayOvertimeList($id)
    {

        dd($id);
        $this->overtimes = Overtime::all();

        $this->is_show_single_day_overtime_list = true;
    }

    public function cancelModal()
    {
        $this->reset();
        $this->is_show_single_day_overtime_list = false;
    }
}
