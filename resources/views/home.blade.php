<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raven</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
</head>
<body>

    <nav class="navbar">
        <div class="container">
           <div class="logo">
              <img src="{{ asset('img/logo.png') }}" alt="Raven">
           </div>
            <ul class="nav-links">
                <li><a href="#inicio">Início</a></li>
<li><a href="#sobre">Sobre</a></li>
                 <li><a href="#parceiros">Parceiros</a></li>
                 <li><a href="#projetos">Projetos</a></li>
                <li><a href="#equipe">Equipe</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </div>
    </nav>

   <section class="hero" id="inicio">
    <div class="hero-particles"></div>
    <div class="hero-container">
        <div class="hero-text">
            <span class="hero-badge">
                <span class="hero-badge-dot"></span>
                Transformando ideias em realidade
            </span>
            <h1>Tecnologia que faz suas <span class="hero-highlight">ideias</span> ganharem <span class="hero-highlight-alt">asas</span>.</h1>
            <p>A <strong>Raven</strong> desenvolve soluções digitais modernas para empresas que querem inovar e crescer no mundo tecnológico. Do design ao deploy, entregamos excelência em cada projeto.</p>
            <div class="hero-buttons">
                <a href="#contato" class="btn btn-primary">
                    <span>Comece Agora</span>
                    <i data-lucide="arrow-right"></i>
                </a>
                <a href="#projetos" class="btn btn-secondary">
                    <i data-lucide="play-circle"></i>
                    <span>Ver Projetos</span>
                </a>
            </div>
        </div>
        <div class="hero-visual">
            <div class="hero-code-window">
                <div class="hero-code-header">
                    <div class="hero-code-dots">
                        <span class="dot dot-red"></span>
                        <span class="dot dot-yellow"></span>
                        <span class="dot dot-green"></span>
                    </div>
                    <div class="hero-code-filename">
                        <i data-lucide="code-2"></i>
                        <span>raven.js</span>
                    </div>
                </div>
                <div class="hero-code-body">
                    <div class="hero-code-line">
                        <span class="code-num">1</span>
                        <span class="code-keyword">const</span> <span class="code-var">raven</span> <span class="code-op">=</span> <span class="code-func">createSolution</span>({
                    </div>
                    <div class="hero-code-line">
                        <span class="code-num">2</span>
                        &nbsp;&nbsp;<span class="code-prop">name</span>: <span class="code-string">'Sua Ideia'</span>,
                    </div>
                    <div class="hero-code-line">
                        <span class="code-num">3</span>
                        &nbsp;&nbsp;<span class="code-prop">tech</span>: [<span class="code-string">'Laravel'</span>, <span class="code-string">'React'</span>],
                    </div>
                    <div class="hero-code-line">
                        <span class="code-num">4</span>
                        &nbsp;&nbsp;<span class="code-prop">quality</span>: <span class="code-string">'premium'</span>,
                    </div>
                    <div class="hero-code-line">
                        <span class="code-num">5</span>
                        &nbsp;&nbsp;<span class="code-prop">delivery</span>: <span class="code-keyword">true</span>
                    </div>
                    <div class="hero-code-line">
                        <span class="code-num">6</span>
                        });
                    </div>
                    <div class="hero-code-line">
                        <span class="code-num">7</span>
                    </div>
                    <div class="hero-code-line">
                        <span class="code-num">8</span>
                        <span class="code-var">raven</span>.<span class="code-func">launch</span>();<span class="cursor-blink">|</span>
                    </div>
                </div>
            </div>

            <div class="hero-badge-float hero-badge-1">
                <div class="badge-icon-wrap">
                    <i data-lucide="code-2"></i>
                </div>
                <div class="badge-content">
                    <span class="badge-title">Clean Code</span>
                    <span class="badge-desc">Código limpo</span>
                </div>
            </div>

            <div class="hero-badge-float hero-badge-2">
                <div class="badge-icon-wrap badge-icon-purple">
                    <i data-lucide="rocket"></i>
                </div>
                <div class="badge-content">
                    <span class="badge-title">Performance</span>
                    <span class="badge-desc">Alta velocidade</span>
                </div>
            </div>

            <div class="hero-badge-float hero-badge-3">
                <div class="badge-icon-wrap badge-icon-green">
                    <i data-lucide="shield-check"></i>
                </div>
                <div class="badge-content">
                    <span class="badge-title">Segurança</span>
                    <span class="badge-desc">100% protegido</span>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="about" id="sobre">
        <h1 class="about-title">Sobre nós</h1>
        <div class="about-box">
            <div class="about-header">
                <span class="about-badge">
                    <i data-lucide="star"></i>
                    Quem Somos
                </span>
                <h2 class="about-heading">Tecnologia que faz suas ideias <span class="about-highlight">ganharem asas</span></h2>
                <p class="about-description">
                    A Raven atua na área de desenvolvimento de software, criando aplicações sob medida
                    para atender às necessidades de empresas de pequeno e médio porte, com foco em
                    <strong>eficiência, inovação e qualidade</strong>.
                </p>
            </div>

            <div class="about-tech-section">
                <h3 class="about-tech-title">Tecnologias que dominamos</h3>
                <div class="tech-carousel">
                    <div class="tech-track">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5">
                        <img src="https://cdn.simpleicons.org/figma/000000" alt="Figma">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" alt="Laravel">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL">

                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5">
                        <img src="https://cdn.simpleicons.org/figma/000000" alt="Figma">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" alt="Laravel">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL">

                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5">
                        <img src="https://cdn.simpleicons.org/figma/000000" alt="Figma">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" alt="Laravel">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="parceiros" id="parceiros">
        <div class="parceiros-bg"></div>
        <div class="container parceiros-container">
            <div class="parceiros-header">
                <span class="parceiros-badge">
                    <i data-lucide="handshake"></i>
                    Parceiros
                </span>
                <h2 class="parceiros-title">Parceiros que <span class="parceiros-highlight">confiam</span> na nossa entrega</h2>
                <p class="parceiros-subtitle">Colaboramos com empresas que compartilham nossa visão de excelência tecnológica e inovação contínua.</p>
            </div>

            <div class="parceiros-carousel" aria-label="Logos dos parceiros">
                <div class="parceiros-track" id="parceirosTrack">
                    <div class="parceiro-card" data-name="Apolo">
                        <div class="parceiro-card-inner">
                            <img src="{{ asset('img/Parceiros/apolo.png') }}" alt="Apolo" class="parceiro-logo">
                            <div class="parceiro-glow"></div>
                        </div>
                        <span class="parceiro-name">Apolo</span>
                    </div>
                    <div class="parceiro-card" data-name="Lirium">
                        <div class="parceiro-card-inner">
                            <img src="{{ asset('img/Parceiros/lirium.png') }}" alt="Lirium" class="parceiro-logo">
                            <div class="parceiro-glow"></div>
                        </div>
                        <span class="parceiro-name">Lirium</span>
                    </div>
                    <div class="parceiro-card" data-name="Apolo">
                        <div class="parceiro-card-inner">
                            <img src="{{ asset('img/Parceiros/apolo.png') }}" alt="Apolo" class="parceiro-logo">
                            <div class="parceiro-glow"></div>
                        </div>
                        <span class="parceiro-name">Apolo</span>
                    </div>
                    <div class="parceiro-card" data-name="Lirium">
                        <div class="parceiro-card-inner">
                            <img src="{{ asset('img/Parceiros/lirium.png') }}" alt="Lirium" class="parceiro-logo">
                            <div class="parceiro-glow"></div>
                        </div>
                        <span class="parceiro-name">Lirium</span>
                    </div>
                    <div class="parceiro-card" data-name="Apolo">
                        <div class="parceiro-card-inner">
                            <img src="{{ asset('img/Parceiros/apolo.png') }}" alt="Apolo" class="parceiro-logo">
                            <div class="parceiro-glow"></div>
                        </div>
                        <span class="parceiro-name">Apolo</span>
                    </div>
                    <div class="parceiro-card" data-name="Lirium">
                        <div class="parceiro-card-inner">
                            <img src="{{ asset('img/Parceiros/lirium.png') }}" alt="Lirium" class="parceiro-logo">
                            <div class="parceiro-glow"></div>
                        </div>
                        <span class="parceiro-name">Lirium</span>
                    </div>
                </div>
            </div>

            <div class="parceiros-stats">
                <div class="parceiro-stat">
                    <span class="parceiro-stat-number">2+</span>
                    <span class="parceiro-stat-label">Parceiros Ativos</span>
                </div>
                <div class="parceiro-stat-divider"></div>
                <div class="parceiro-stat">
                    <span class="parceiro-stat-number">100%</span>
                    <span class="parceiro-stat-label">Satisfação</span>
                </div>
            </div>
        </div>
    </section>

    <section class="diferenciais" id="projetos">
        <h2 class="dif-title">Nossos projetos</h2>
        <div class="dif-container">
            <div class="dif-card">
                <button class="project-trigger" type="button" data-image="{{ asset('img/projetos/projeto1.jpeg') }}" data-title="Cadastro Mobile" data-description="Fluxo de cadastro com validacao de dados essenciais, projetado para acelerar a entrada de novas usuarias com seguranca.">
                    <div class="project-image-slot"><img src="{{ asset('img/projetos/projeto1.jpeg') }}" alt="Cadastro Mobile"></div>
                    <h3>Cadastro Mobile</h3>
                    <p>Fluxo de cadastro com validacao de dados essenciais, projetado para acelerar a entrada de novas usuarias com seguranca.</p>
                </button>
            </div>
            <div class="dif-card">
                <button class="project-trigger" type="button" data-image="{{ asset('img/projetos/projeto2.jpeg') }}" data-title="Perfil da Usuaria" data-description="Tela de perfil com acesso rapido ao historico e fichas de acompanhamento para organizacao continua das informacoes.">
                    <div class="project-image-slot"><img src="{{ asset('img/projetos/projeto2.jpeg') }}" alt="Perfil da Usuaria"></div>
                    <h3>Perfil da Usuaria</h3>
                    <p>Tela de perfil com acesso rapido ao historico e fichas de acompanhamento para organizacao continua das informacoes.</p>
                </button>
            </div>
            <div class="dif-card">
                <button class="project-trigger" type="button" data-image="{{ asset('img/projetos/projeto3.jpeg') }}" data-title="Home de Acionamento" data-description="Interface principal orientada a acao imediata para pedido de ajuda, priorizando clareza visual e tempo de resposta.">
                    <div class="project-image-slot"><img src="{{ asset('img/projetos/projeto3.jpeg') }}" alt="Home de Acionamento"></div>
                    <h3>Home de Acionamento</h3>
                    <p>Interface principal orientada a acao imediata para pedido de ajuda, priorizando clareza visual e tempo de resposta.</p>
                </button>
            </div>
            <div class="dif-card">
                <button class="project-trigger" type="button" data-image="{{ asset('img/projetos/projeto4.jpeg') }}" data-title="Login Mobile" data-description="Autenticacao simplificada com foco em usabilidade e confianca para diferentes perfis de acesso da plataforma.">
                    <div class="project-image-slot"><img src="{{ asset('img/projetos/projeto4.jpeg') }}" alt="Login Mobile"></div>
                    <h3>Login Mobile</h3>
                    <p>Autenticacao simplificada com foco em usabilidade e confianca para diferentes perfis de acesso da plataforma.</p>
                </button>
            </div>
            <div class="dif-card">
                <button class="project-trigger" type="button" data-image="{{ asset('img/projetos/projeto5.jpeg') }}" data-title="Recuperacao de Senha" data-description="Modal de redefinicao com comunicacao objetiva para reduzir friccao e garantir continuidade no acesso.">
                    <div class="project-image-slot"><img src="{{ asset('img/projetos/projeto5.jpeg') }}" alt="Recuperacao de Senha"></div>
                    <h3>Recuperacao de Senha</h3>
                    <p>Modal de redefinicao com comunicacao objetiva para reduzir friccao e garantir continuidade no acesso.</p>
                </button>
            </div>
            <div class="dif-card">
                <button class="project-trigger" type="button" data-image="{{ asset('img/projetos/app1.jpeg') }}" data-title="Cadastro Web" data-description="Tela institucional de cadastro para plataforma web com estrutura clara e campos preparados para validacao.">
                    <div class="project-image-slot"><img src="{{ asset('img/projetos/app1.jpeg') }}" alt="Cadastro Web"></div>
                    <h3>Cadastro Web</h3>
                    <p>Tela institucional de cadastro para plataforma web com estrutura clara e campos preparados para validacao.</p>
                </button>
            </div>
            <div class="dif-card">
                <button class="project-trigger" type="button" data-image="{{ asset('img/projetos/app2.jpeg') }}" data-title="Painel de Perfil Profissional" data-description="Dashboard de perfil com indicadores, dados pessoais e reconhecimentos para apoio a gestao operacional.">
                    <div class="project-image-slot"><img src="{{ asset('img/projetos/app2.jpeg') }}" alt="Painel de Perfil Profissional"></div>
                    <h3>Painel de Perfil Profissional</h3>
                    <p>Dashboard de perfil com indicadores, dados pessoais e reconhecimentos para apoio a gestao operacional.</p>
                </button>
            </div>
            <div class="dif-card">
                <button class="project-trigger" type="button" data-image="{{ asset('img/projetos/app3.jpeg') }}" data-title="Gestao de Ocorrencias" data-description="Modulo com filtros, indicadores e listagem estruturada para acompanhamento continuo de ocorrencias em campo.">
                    <div class="project-image-slot"><img src="{{ asset('img/projetos/app3.jpeg') }}" alt="Gestao de Ocorrencias"></div>
                    <h3>Gestao de Ocorrencias</h3>
                    <p>Modulo com filtros, indicadores e listagem estruturada para acompanhamento continuo de ocorrencias em campo.</p>
                </button>
            </div>
            <div class="dif-card">
                <button class="project-trigger" type="button" data-image="{{ asset('img/projetos/app4.jpeg') }}" data-title="Monitoramento Ao Vivo" data-description="Tela com mapa e ocorrencias ativas para suporte a tomada de decisao em tempo real pelas equipes responsaveis.">
                    <div class="project-image-slot"><img src="{{ asset('img/projetos/app4.jpeg') }}" alt="Monitoramento Ao Vivo"></div>
                    <h3>Monitoramento Ao Vivo</h3>
                    <p>Tela com mapa e ocorrencias ativas para suporte a tomada de decisao em tempo real pelas equipes responsaveis.</p>
                </button>
            </div>
        </div>
    </section>

    <section class="devs" id="equipe">
        <h1 class="Dev-title">Nossos Desenvolvedores</h1>
        <div class="dev-box">
            <div class="dev-header">
                <h2>Aqueles que fazem a Raven acontecer</h2>
            </div>
            <div class="dev-grid">
                @foreach($devs as $d)
                <div class="dev-card-pro">
                    <div class="dev-card-image-wrap">
                        <img class="dev-card-image" src="{{ asset($d->foto) }}" alt="{{ $d->nome }}">
                        <div class="dev-card-overlay">
                            <div class="dev-card-socials">
                                @if($d->linkedin)
                                    <a href="{{ $d->linkedin }}" target="_blank" class="dev-social-link" aria-label="LinkedIn">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                @else
                                    <span class="dev-social-link dev-social-disabled" aria-label="LinkedIn">
                                        <i class="fab fa-linkedin-in"></i>
                                    </span>
                                @endif

                                @if($d->github)
                                    <a href="{{ $d->github }}" target="_blank" class="dev-social-link" aria-label="GitHub">
                                        <i class="fab fa-github"></i>
                                    </a>
                                @else
                                    <span class="dev-social-link dev-social-disabled" aria-label="GitHub">
                                        <i class="fab fa-github"></i>
                                    </span>
                                @endif

                                @if($d->instagram)
                                    <a href="{{ $d->instagram }}" target="_blank" class="dev-social-link" aria-label="Instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                @else
                                    <span class="dev-social-link dev-social-disabled" aria-label="Instagram">
                                        <i class="fab fa-instagram"></i>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="dev-card-info">
                        <h3 class="dev-card-name">{{ $d->nome }}</h3>
                        <span class="dev-card-role">{{ $d->funcao }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="secao-formulario" id="contato">
        <div class="form-container-pro">
            <div class="div-textForm">
                <div class="form-header">
                    <span class="form-badge">Fale Conosco</span>
                    <h1 class="title-textForm">Vamos criar algo <span class="text-gradient">incrível</span> juntos</h1>
                    <p class="text-textForm">Nossa equipe está preparada para entender seu desafio e estruturar uma proposta técnica com foco em resultado, prazo e escalabilidade.</p>
                </div>

                <div class="contato-box">
                    <a href="mailto:contato@raven.com.br" class="contato-item">
                        <div class="contato-icon">
                            <i data-lucide="mail"></i>
                        </div>
                        <div class="contato-info">
                            <span class="contato-label">E-mail Corporativo</span>
                            <span class="contato-value">raven.oficial.tcc@gmail.com</span>
                        </div>
                    </a>

                    <a href="tel:+5511999999999" class="contato-item">
                        <div class="contato-icon">
                            <i data-lucide="phone"></i>
                        </div>
                        <div class="contato-info">
                            <span class="contato-label">Atendimento</span>
                            <span class="contato-value">+55 (11) 99999-9999</span>
                        </div>
                    </a>

                    <div class="contato-item">
                        <div class="contato-icon">
                            <i data-lucide="map-pin"></i>
                        </div>
                        <div class="contato-info">
                            <span class="contato-label">Localização</span>
                            <span class="contato-value">São Paulo, SP</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="div-formulario">
                <div class="form-inner">
                    <h2 class="form-title-inner">Envie sua mensagem</h2>
                    <p class="form-subtitle-inner">Preencha o formulário e retornaremos em breve</p>

                    @if(session('contact_success'))
                        <div class="form-mensagem form-sucesso">
                            <i data-lucide="check-circle"></i>
                            {{ session('contact_success') }}
                        </div>
                    @endif

                    @if(session('contact_error'))
                        <div class="form-mensagem form-erro">
                            <i data-lucide="alert-circle"></i>
                            {{ session('contact_error') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="form-mensagem form-erro">
                            <strong><i data-lucide="alert-triangle"></i> Corrija os seguintes erros:</strong>
                            @foreach($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST" class="formulario">
                        @csrf

                        <div class="form-group">
                            <label for="name" class="titlelabel">
                                <i data-lucide="user"></i> Nome Completo
                            </label>
                            <input type="text" class="input-form" name="nome" id="name" placeholder="Como podemos te chamar?" value="{{ old('nome') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="email" class="titlelabel">
                                <i data-lucide="mail"></i> E-mail
                            </label>
                            <input type="email" class="input-form" name="email" id="email" placeholder="seu@email.com" value="{{ old('email') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="assunto" class="titlelabel">
                                <i data-lucide="tag"></i> Assunto
                            </label>
                            <input type="text" class="input-form" name="assunto" id="assunto" placeholder="Sobre o que quer falar?" value="{{ old('assunto') }}">
                        </div>

                        <div class="form-group">
                            <label for="mensagem" class="titlelabel">
                                <i data-lucide="message-square"></i> Mensagem
                            </label>
                            <textarea class="input-form" name="mensagem" id="mensagem" placeholder="Conte-nos sobre seu projeto..." rows="5" required>{{ old('mensagem') }}</textarea>
                        </div>

                        <input type="text" name="website" style="display:none !important; position:absolute; left:-9999px;" tabindex="-1" autocomplete="off">

                        <button type="submit" class="botao-form">
                            <span>Enviar Mensagem</span>
                            <i data-lucide="send"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-home">
        <div class="footer-content">
            <div class="footer-brand">
                <div class="footer-logo">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo Raven">
                </div>
                <p class="footer-brand-text">Tecnologia que faz suas ideias ganharem asas. Desenvolvemos soluções digitais modernas para empresas que querem inovar e crescer.</p>
                <div class="footer-socials">
                    @if(isset($configs['instagram']) && $configs['instagram']->valor)
                    <a href="{{ $configs['instagram']->valor }}" target="_blank" class="footer-social-icon" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    @endif

                    @if(isset($configs['whatsapp']) && $configs['whatsapp']->valor)
                    <a href="{{ $configs['whatsapp']->valor }}" target="_blank" class="footer-social-icon" aria-label="WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    @endif

                    @if(isset($configs['linkedin']) && $configs['linkedin']->valor)
                    <a href="{{ $configs['linkedin']->valor }}" target="_blank" class="footer-social-icon" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    @endif

                    @if(isset($configs['github']) && $configs['github']->valor)
                    <a href="{{ $configs['github']->valor }}" target="_blank" class="footer-social-icon" aria-label="GitHub">
                        <i class="fab fa-github"></i>
                    </a>
                    @endif
                </div>
            </div>

            <div class="footer-column">
                <h3 class="footer-title">Navegação</h3>
                <ul class="footer-links">
                    <li><a href="#inicio"><i data-lucide="chevron-right"></i> Início</a></li>
                    <li><a href="#sobre"><i data-lucide="chevron-right"></i> Sobre Nós</a></li>
                    <li><a href="#projetos"><i data-lucide="chevron-right"></i> Projetos</a></li>
                    <li><a href="#equipe"><i data-lucide="chevron-right"></i> Equipe</a></li>
                    <li><a href="#contato"><i data-lucide="chevron-right"></i> Contato</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3 class="footer-title">Serviços</h3>
                <ul class="footer-links">
                    <li><a href="#"><i data-lucide="chevron-right"></i> Desenvolvimento Web</a></li>
                    <li><a href="#"><i data-lucide="chevron-right"></i> Desenvolvimento Mobile</a></li>
                    <li><a href="#"><i data-lucide="chevron-right"></i> UI/UX Design</a></li>
                    <li><a href="#"><i data-lucide="chevron-right"></i> Consultoria</a></li>
                    <li><a href="#"><i data-lucide="chevron-right"></i> Suporte Técnico</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3 class="footer-title">Contato</h3>
                <ul class="footer-contact">
                    <li>
                        <i data-lucide="mail"></i>
                        <span>raven.oficial.tcc@gmail.com</span>
                    </li>
                    <li>
                        <i data-lucide="phone"></i>
                        <span>+55 (11) 99999-9999</span>
                    </li>
                    <li>
                        <i data-lucide="map-pin"></i>
                        <span>São Paulo, SP - Brasil</span>
                    </li>
                    <li>
                        <i data-lucide="clock"></i>
                        <span>Seg - Sex: 9h às 18h</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-bottom-content">
                <p class="footer-copyright">
                    &copy; 2026 <strong>Raven</strong>. Todos os direitos reservados.
                </p>
                <div class="footer-bottom-links">
                    <a href="#">Política de Privacidade</a>
                    <span class="footer-separator">•</span>
                    <a href="#">Termos de Uso</a>
                </div>
            </div>
        </div>
    </footer>

    <div class="project-modal" id="projectModal" aria-hidden="true">
        <div class="project-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="projectModalTitle">
            <button class="project-modal-close" type="button" id="projectModalClose" aria-label="Fechar">×</button>
            <h3 id="projectModalTitle"></h3>
            <p id="projectModalDescription"></p>
            <div class="project-modal-image-wrap">
                <img id="projectModalImage" src="" alt="Projeto em destaque">
            </div>
        </div>
    </div>

    <script src="{{ url('js/carrossel.js') }}"></script>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>