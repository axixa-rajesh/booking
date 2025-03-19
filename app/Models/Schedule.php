<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //
    protected $fillable=['end_from', 'start_from', 'shift', 'week', 'firm_id', 'user_id','max_booking'];
    public function is_today_schedule()
    {
        $data= $this->hasMany(TodaySchedule::class);
    //   print_r($data);
       return $data;
    }
}
