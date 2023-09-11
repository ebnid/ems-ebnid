<?php

namespace App\Observers;

use App\Models\Withdraw;
use App\Mail\SendWithdrawRequestToAdmin;
use Illuminate\Support\Facades\Mail;
use App\Models\User;


class WithdrawObserver
{
    /**
     * Handle the Withdraw "created" event.
     */
    public function created(Withdraw $withdraw): void
    {
        try {

            $user = $withdraw->employee->user->name;

            $admins = User::whereIn('role', ['admin', 'root'])->get();

            foreach($admins as $admin){
                Mail::to($admin->email)->send(new SendWithdrawRequestToAdmin($user, $withdraw));
            }

        }catch(\Exception $e){
            
        }
    }

    /**
     * Handle the Withdraw "updated" event.
     */
    public function updated(Withdraw $withdraw): void
    {
        //
    }

    /**
     * Handle the Withdraw "deleted" event.
     */
    public function deleted(Withdraw $withdraw): void
    {
        //
    }

    /**
     * Handle the Withdraw "restored" event.
     */
    public function restored(Withdraw $withdraw): void
    {
        //
    }

    /**
     * Handle the Withdraw "force deleted" event.
     */
    public function forceDeleted(Withdraw $withdraw): void
    {
        //
    }
}
