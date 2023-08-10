<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class ContatoMensagem extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $phone;
    public $text;

    /**
     * Create a new message instance.
     */
    public function __construct(Request $request)
    {
        $this->name = $request->input('name');
        $this->email = $request->input('email');
        $this->phone = $request->input('phone');
        $this->text = $request->input('text');
    }

    public function build()
    {
        return $this->subject('Mensagem de Contato')
            ->view('emails.contato_mensagem')
            ->bcc('jumazitech@gmail.com');
    }
}
