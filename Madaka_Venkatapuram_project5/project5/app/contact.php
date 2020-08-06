<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    public $table = 'contacts';
    public $fillable = ['name','email','subject','message'];
}
 