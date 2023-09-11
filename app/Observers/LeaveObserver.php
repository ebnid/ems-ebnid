<?php

namespace App\Observers;

use App\Models\Leave;
use App\Mail\SendLeaveRequestToAdmin;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class LeaveObserver
{
    /**
     * Handle the Leave "created" event.
     */
    public function created(Leave $leave): void
    {


        try {

            $user = $leave->employee->user->name;

            $admins = User::whereIn('role', ['admin', 'root'])->get();

            dd($admins);
            
            Mail::to('contact.riyadmunauwar@gmail.com')->send(new SendLeaveRequestToAdmin($user, $leave));

        }catch(\Exception $e){
            dd($e->getMessage());
        }
    }

    /**
     * Handle the Leave "updated" event.
     */
    public function updated(Leave $leave): void
    {
        //
    }

    /**
     * Handle the Leave "deleted" event.
     */
    public function deleted(Leave $leave): void
    {
        //
    }

    /**
     * Handle the Leave "restored" event.
     */
    public function restored(Leave $leave): void
    {
        //
    }

    /**
     * Handle the Leave "force deleted" event.
     */
    public function forceDeleted(Leave $leave): void
    {
        //
    }
}
