<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewBooking extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $arrival;
    public $table;
    public $count;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($name, $arrival, $table, $count)
    {
        $this->name = $name;
        $this->arrival = $arrival;
        $this->table = $table;
        $this->count = $count;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown("emails.new_booking");
    }
}
