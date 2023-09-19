<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Overtime;

class SingleDayOvertimeDetails extends Component
{

    public $is_show_single_day_overtime_list = false;

    public $overtimes = [];

    protected $listeners = [
        'onSingleDayOvertimeDetails' => 'preparedSingleDayOvertimeList'
    ];


    public function render()
    {
        return view('admin.components.single-day-overtime-details');
    }


    public function preparedSingleDayOvertimeList($id)
    {


        $this->overtimes = Overtime::where('employee_id', $id)->get();

        $this->is_show_single_day_overtime_list = true;
    }

    public function cancelModal()
    {
        $this->reset();
        $this->is_show_single_day_overtime_list = false;
    }
}
