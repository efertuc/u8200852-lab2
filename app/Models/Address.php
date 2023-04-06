<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'address';

    protected $fillable = [
        'customer_id',
        'name_usr',
        'city',
        'street',
        'house',
        'floor',
        'flat',
        'intercom_code'
    ];

    public function customer_u()
    {
        $this->belongsTo(Customer::class);
    }

}
