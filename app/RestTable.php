<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class RestTable extends Model
{
    public $fillable = ['name','email','mobile', 'additional_information', 'arrival', 'number', 'rest_table_id'];
    public function position() {
      return $this->belongsTo('App\Position');
    }
    public function check_available($dt) {
      $now = Carbon::now();
      $bookings = Booking::where("rest_table_id", $this->id)->whereDate("arrival", ">=", $now)->get();
      foreach ($bookings as $book) {
        $arrival = Carbon::createFromFormat("Y-m-d H:i:s", $book->arrival);
        $old = clone $arrival;
        $finish = $arrival->addHours(2);
        if (($dt >= $old) && ($dt <= $finish)) {
          return false;
        }
      }
      return true;
    }
    public function suggestDates($dt) {
      $dates = array();
      $index = 0;
      for ($i=0; $i < 6 ; $i++) {
        $dt->addHour();
        if ($this->check_available($dt)) {
          $dates[$index++] = clone $dt;
        }
      }
      return $dates;
    }
}
