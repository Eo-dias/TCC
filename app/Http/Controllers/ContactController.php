<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * E-mail que recebe as mensagens enviadas pelo formulário de contato.
     */
    private const RECIPIENT = 'raven.oficial.tcc@gmail.com';

    public function store(Request $request): RedirectResponse
    {
        // Validação backend (CSRF já é verificado automaticamente pelo
        // middleware VerifyCsrfToken em todas as rotas web com @csrf no form).
        $validated = $request->validate([
            'nome'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'email:rfc,dns', 'max:255'],
            'assunto'  => ['nullable', 'string', 'max:255'],
            'mensagem' => ['required', 'string', 'max:5000'],
            // honeypot simples anti-spam: campo invisível que humanos não preenchem
            'website'  => ['prohibited'],
        ], [
            'nome.required'     => 'Por favor, informe seu nome.',
            'email.required'    => 'Por favor, informe um e-mail.',
            'email.email'       => 'Informe um e-mail válido.',
            'mensagem.required' => 'Por favor, escreva sua mensagem.',
            'mensagem.max'      => 'Sua mensagem é muito longa.',
        ]);

        unset($validated['website']);

        try {
            Mail::to(self::RECIPIENT)->send(new ContactMail($validated));
        } catch (\Throwable $e) {
            report($e);

            return back()
                ->withInput()
                ->with('contact_error', 'Não foi possível enviar sua mensagem agora. Tente novamente em instantes.');
        }

        return back()->with('contact_success', 'Mensagem enviada com sucesso! Em breve entraremos em contato.');
    }
}
