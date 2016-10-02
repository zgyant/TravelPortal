<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    public $timestamps = false;
    protected $fillable=['location','time','cost','company','address','activity'];
}
