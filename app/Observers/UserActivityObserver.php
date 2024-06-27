<?php

namespace App\Observers;

use App\Models\User;

class UserActivityObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        //
        $this->logActivity('created', $user);
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
        $this->logActivity('updated', $user);
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
        $this->logActivity('deleted', $user);
    }

    /**
     * Log user activity.
     * @param string $event
     * @param  \App\Models\User  $user
     * @return void
     */
    public function logActivity(string $event, User $user)
    {
        // Log user activity here
    }
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
