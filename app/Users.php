<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public $timestamps = false;
    protected $fillable=['fname','address','contactaddress','email','password','usertype'];
}
