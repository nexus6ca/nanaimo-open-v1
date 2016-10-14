<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    protected $fillable = array(
        'email',
        'firstName',
        'lastName',
        'rating',
        'altEmail',
        'prov',
        'city',
        'age',
        'byeRounds',
        'membershipOption',
        'CFCNumber',
        );
}
