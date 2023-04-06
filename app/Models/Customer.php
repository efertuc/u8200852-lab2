<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer';

    protected $fillable = [
        'name',
        'surname',
        'phone',
        'blocked',
        'email'
    ];

    public function addressu()
    {
        return $this->hasMany(Address::class);
    }

}
