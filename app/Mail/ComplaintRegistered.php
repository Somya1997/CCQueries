<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\StudentMnnitController;
use App\StudentMnnit;
use App\ComplaintMnnit;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class ComplaintRegistered extends Mailable
{
    use Queueable, SerializesModels;

    public $studentMnnit;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(StudentMnnit $studentMnnit)
    {
        $this->studentMnnit = $studentMnnit;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('mnnit.ccquesries@gmail.com', 'Computer Centre MNNIT')
                    ->to($this->studentMnnit->email, $this->studentMnnit->name)
                    ->subject('Your complaint number is $this->studentMnnit->id')
                    ->view('email.ccqueries');
    }
}
