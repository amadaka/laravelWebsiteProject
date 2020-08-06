<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userev extends Model
{
    public $table = 'userevs';
    public $fillable = ['name','email','password','role','nation','phone'];
}
