<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalendarModel extends Model
{
    protected $fillable = ['event', 'datefrom', 'dateto', 'day', 'active'];
}