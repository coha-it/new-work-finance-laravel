<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'ip',

        'firstname',
        'lastname',
        'email',
        'position',
        'streetandnumber',
        'zipandlocation',
        'phone',
        'company',
        'ustid',
        'message',
        'type',

        'data'
    ];
}
