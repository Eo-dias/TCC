<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @param array{nome: string, email: string, assunto: ?string, mensagem: string} $data
     */
    public function __construct(public array $data)
    {
    }

    public function envelope(): Envelope
    {
        $assunto = $this->data['assunto'] ?? null;

        return new Envelope(
            subject: $assunto
                ? "Contato pelo site: {$assunto}"
                : "Novo contato pelo site de {$this->data['nome']}",
            replyTo: [
                new \Illuminate\Mail\Mailables\Address($this->data['email'], $this->data['nome']),
            ],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
        );
    }
}
