<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_of_birth',
        'phone_number',
        'gender',
        'address_number_name',
        'address_street_1',
        'address_street_2',
        'address_city',
        'address_county',
        'address_country',
        'address_postcode',
    ];
}
