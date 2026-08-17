
<section class="secao-formulario" id="contato">
    <div class="div-textForm">
        <h2 class="title-textForm">Fale<br>conosco</h2>
        <p class="text-textForm">
            Tem alguma dúvida, sugestão ou quer conversar sobre um projeto?
            Preencha o formulário ao lado ou entre em contato diretamente
            pelo canal abaixo.
        </p>

        <div class="contato-box">
            <a href="mailto:raven.oficial.tcc@gmail.com" class="contato-item">
                <span class="contato-label">E-mail</span>
                <span class="contato-value">raven.oficial.tcc@gmail.com</span>
            </a>
        </div>
    </div>

    <div class="div-formulario">
        @if (session('contact_success'))
            <div class="form-alert form-alert-success">{{ session('contact_success') }}</div>
        @endif

        @if (session('contact_error'))
            <div class="form-alert form-alert-error">{{ session('contact_error') }}</div>
        @endif

        <form class="formulario" method="POST" action="{{ route('contact.send') }}#contato" novalidate>
            @csrf

            {{-- honeypot anti-spam: campo invisível, nunca deve ser preenchido por humanos --}}
            <div class="honeypot-field" aria-hidden="true">
                <label for="website">Deixe em branco</label>
                <input type="text" name="website" id="website" tabindex="-1" autocomplete="off">
            </div>

            <label class="titlelabel" for="nome">Nome</label>
            <input class="input-form" type="text" name="nome" id="nome" value="{{ old('nome') }}" required>
            @error('nome')
                <span class="form-field-error">{{ $message }}</span>
            @enderror

            <label class="titlelabel" for="email">E-mail</label>
            <input class="input-form" type="email" name="email" id="email" value="{{ old('email') }}" required>
            @error('email')
                <span class="form-field-error">{{ $message }}</span>
            @enderror

            <label class="titlelabel" for="assunto">Assunto</label>
            <input class="input-form" type="text" name="assunto" id="assunto" value="{{ old('assunto') }}">
            @error('assunto')
                <span class="form-field-error">{{ $message }}</span>
            @enderror

            <label class="titlelabel" for="mensagem">Mensagem</label>
            <textarea class="input-form textarea-form" name="mensagem" id="mensagem" required>{{ old('mensagem') }}</textarea>
            @error('mensagem')
                <span class="form-field-error">{{ $message }}</span>
            @enderror

            <button class="botao-form" type="submit">Enviar</button>
        </form>
    </div>
</section>
