<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'passsword'];

    public static $rules = array(
        'name' => 'required|string|max:200',
        'email' =>'required|email|max:200',
        'password' => 'required'
    );
    public function getDetail()
    {
        $txt ='ID:'.$this->id . ' ' . $this->name . '(' .  $this->email . $this->password;
        return $txt;
    }
}
