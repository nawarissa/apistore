<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
     protected $fillable = ['name', 'email', 'user_id', 'mobile', 'number', 'additional_information', 'arrival', 'rest_table_id'];
}
