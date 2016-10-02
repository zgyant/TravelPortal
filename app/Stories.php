<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stories extends Model
{
    public $table='stories';
    public $timestamps = false;
    protected $fillable=['user','title','desc','uimage','cimage'];
}
