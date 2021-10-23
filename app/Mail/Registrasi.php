<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Registrasi extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $noreg;
    public $nama;
    public $nim;
    public function __construct($noreg, $nama, $nim)
    {
        $this->noreg = $noreg;
        $this->nama = $nama;
        $this->nim = $nim;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       return $this->from('beasiswaubg@gmail.com')
       ->view('berhasil')
       ->with(
        [
            'noreg' => $this->noreg,
            'nama' => $this->nama,
            'nim' => $this->nim
        ]);
   }
}
