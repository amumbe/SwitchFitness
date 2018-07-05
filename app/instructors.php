<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class instructors extends Model
{
    public $table = 'instructors';
    protected $hidden = ['photo'];
}
