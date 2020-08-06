<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    public $table = 'events';
    public $fillable = ['name','ownerId','image_loc','date','time','location','description'];
}
