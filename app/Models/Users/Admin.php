<?php

namespace App\Models\Users;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;

class Admin extends Authenticatable
{
    use Notifiable, LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'profile_picture_path',
        'password',
    ];

    protected static $logFillable = true;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /** Renders */
    public function renderFirstName()
    {
        return $this->first_name;
    }

    public function renderLastName()
    {
        return $this->last_name;
    }

    public function renderFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function renderProfilePicture()
    {
        $path = 'storage/default_images/no_image.jpg';

        if ($this->profile_picture_path){
            $path = 'storage/' . $this->profile_picture_path;
        }

        return $path;
    }

    public function renderEmail()
    {
        return $this->email();
    }
}
