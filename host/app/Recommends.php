<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recommends extends Model
{
    protected $fillable = [
        'rname', 'remail', 'rphone','details'
    ];
}
