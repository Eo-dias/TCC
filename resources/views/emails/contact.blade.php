<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Novo contato pelo site</title>
</head>
<body style="font-family: Arial, sans-serif; background:#f4f4f4; padding:24px; color:#222;">
    <table role="presentation" width="100%" style="max-width:600px; margin:0 auto; background:#ffffff; border-radius:8px; overflow:hidden;">
        <tr>
            <td style="background:#1f2937; padding:20px 24px;">
                <h1 style="color:#ffffff; font-size:18px; margin:0;">Nova mensagem de contato</h1>
            </td>
        </tr>
        <tr>
            <td style="padding:24px;">
                <p style="margin:0 0 12px;"><strong>Nome:</strong> {{ $data['nome'] }}</p>
                <p style="margin:0 0 12px;"><strong>E-mail:</strong> {{ $data['email'] }}</p>
                @if (!empty($data['assunto']))
                    <p style="margin:0 0 12px;"><strong>Assunto:</strong> {{ $data['assunto'] }}</p>
                @endif
                <p style="margin:0 0 8px;"><strong>Mensagem:</strong></p>
                <p style="white-space: pre-line; margin:0; padding:12px; background:#f9fafb; border-radius:6px;">{{ $data['mensagem'] }}</p>
            </td>
        </tr>
        <tr>
            <td style="padding:16px 24px; background:#f4f4f4; font-size:12px; color:#666;">
                Este e-mail foi enviado automaticamente pelo formulário de contato do site. Basta responder este e-mail para falar diretamente com {{ $data['nome'] }}.
            </td>
        </tr>
    </table>
</body>
</html>
