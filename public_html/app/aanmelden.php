<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aanmelden extends Model
{
    protected $fillable = ['firstname', 'tussenv', 'lastname', 'gender', 'age', 'email', 'street', 'area', 'postal', 'province', 'hnumber', 'country', 'tel', 'njgroup', 'child'];
}
