<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public $table='booking';
    public $timestamps = false;
    protected $fillable=['email','packageid'];
}
