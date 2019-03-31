<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    /*
    * @var array
    */
    protected $fillable = [
        'name', 'role',
    ];
}