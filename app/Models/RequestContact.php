<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestContact extends Model
{
    public $table = 'request_contact';

    public $fillable = ['name', 'email', 'phone', 'message', 'comment'];
}
