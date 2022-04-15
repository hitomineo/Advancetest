<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
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
