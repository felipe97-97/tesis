<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AgendaCreate extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Hora Agendada';

    public $validated;
    public $paciente;
    public $colaborador;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($validated, $paciente, $colaborador)
    {
        $this->validated = $validated;
        $this->paciente = $paciente;
        $this->colaborador = $colaborador;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('no-responder@vivadent.cl')->view('emails.create');
    }
}
