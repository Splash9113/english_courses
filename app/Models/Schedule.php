<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public $fillable = ['group_id', 'schedule'];

    public function group()
    {
        $this->belongsTo(Group::class);
    }
}
