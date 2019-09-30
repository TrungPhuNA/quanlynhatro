<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table   = 'locations';
    protected $guarded = '';

    const CITY     = 1;
    const DISTRICT = 2;

}
