<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;
// use App\Http\Controllers\StudentMnnitController;
use App\StudentMnnit;
use App\ComplaintMnnit;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class closingMail extends Mailable
{
    use Queueable, SerializesModels;

    public $studentMnnit;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($studentMnnit)
    {
        $this->studentMnnit=$studentMnnit;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('mnnit.ccquesries@gmail.com', 'Computer Center MNNIT')
                    ->to($this->studentMnnit->email, $this->studentMnnit->name)
                    ->subject('Confirmation mail for complaint number # '.$this->studentMnnit->id)
                    ->view('email.closedmail');
    }
}
