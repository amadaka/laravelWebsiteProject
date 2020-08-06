<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class participent extends Model
{
    public $table = 'participents';
    public $fillable = ['eventId','userId'];
}
