<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\Attendance;

class Overtime extends Model
{
    use HasFactory;


    protected $casts = [
        'start_at' => 'datetime',
        'end_at' => 'datetime',
    ];


    // Model Scope
    public function scopeFinished($query)
    {
        return $query->whereNotNull('start_at')->whereNotNull('end_at');
    }

    public function scopeAccepted($query)
    {
        return $query->whereNotNull('start_at')->whereNotNull('end_at')->where('status', 'accepted');
    }


    // Relationship
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function attendance()
    {
        return $this->belongsTo(Attendance::class);
    }

    // Compute Func

    public function overtimeMoneyAmount()
    {
        return $this->employee->salaryPerMinute() * $this->overtime;
    }
}
