<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['company_name'];

    public function customer() {
        return $this->belongsTo(Customer::class);
    }
}
