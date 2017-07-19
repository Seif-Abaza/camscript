<?php
/**
 * Created by PhpStorm.
 * User: Pablo Ramirez
 * Date: 7/18/2017
 * Time: 10:44 PM
 */

namespace App;

//use Illuminate\Notification\Notifiable;
//use Illuminate\Foundation\Auth\Performer as Authenticatable;


class Performer
{

    //use Notifiable;

    /**
     * @var array
     */
    protected $fillable = [
        'userName', 'firstName', 'lastName', 'dob', 'country', 'email', 'password',
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}