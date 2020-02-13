<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'nisn',
        'nis',
        'name',
        'grade_id',
        'address',
        'phone',
        'spp_id',
    ];

    public function grade() {
        return $this->hasOne('App\Grade', 'grade_id', 'id');
    }

    public function spp() {
        return $this->hasOne('App\Spp', 'spp_id', 'id');
    }
}
