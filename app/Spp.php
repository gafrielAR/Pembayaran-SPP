<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    protected $table = 'spps';

    protected $fillable = [
        'year',
        'nominal'
    ];
}
