<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'content' => 'required',
    );
}
