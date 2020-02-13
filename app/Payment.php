<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $fillable = [
        'employee_id',
        'nisn',        
        'payment_date',        
        'month_paid',        
        'year_paid',        
        'spp_id',        
        'amount_paid',        
    ];

    public function employee() {
        return $this->hasOne('App\User', 'employee_id', 'id');
    }

    public function student() {
        return $this->hasOne('App\Student', 'nisn', 'id');
    }

    public function spp() {
        return $this->hasOne('App\Spp', 'spp_id', 'id');
    }
}
