<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Firm extends Model
{
    //
    protected $fillable=['firm_name', 'profilepic', 'gst_no', 'register_no', 'map', 'pan_no', 'country', 'state', 'city', 'address', 'landmark', 'street', 'since', 'pincode', 'firm_mobile', 'user_id'];
}
