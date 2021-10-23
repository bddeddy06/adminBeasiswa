<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BeasiswaMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $tgl_mulai;
    public $tgl_akhir;
    public function __construct($tgl_mulai, $tgl_akhir)
    {
        $this->tgl_mulai = $tgl_mulai;
        $this->tgl_akhir = $tgl_akhir;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('beasiswaubg@gmail.com')
        ->view('emailku')
        ->with(
            [
                'tgl_mulai' => $this->tgl_mulai,
                'tgl_akhir' => $this->tgl_akhir
            ]);
    }
}
