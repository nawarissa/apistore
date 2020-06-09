<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestTable extends Model
{
    public $fillable = ['name','email','mobile', 'additional_information', 'arrival', 'number', 'rest_table_id'];
    public function position() {
      return $this->belongsTo('App\Position');
    }
}
