<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TodaySchedule extends Model
{
    //
    protected $fillable=['firm_id','schedule_id','user_id','todaydate','week','shift'];
}
