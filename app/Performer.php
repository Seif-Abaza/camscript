<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Performer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'start_performing', 'end_performing', 'earning',
    ];
}
