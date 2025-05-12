<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CountryService extends Model
{
    protected $table = 'country_services';

    protected $fillable = [
        'country',
        'app',
        'price',
    ];
}
