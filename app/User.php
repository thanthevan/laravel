<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    public $timestamps = false;
    protected $table= 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

   public function feedback()
   {
      return $this->hasMany('App\Feedback','user_id','id');
   }

    public function feedbackproduct()
   {
      return $this->hasMany('App\FeedbackProduct','user_id','id');
   }

    public function order()
    {
        return $this->hasMany('App\Order','user_id','id');
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
