<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <nav class="navbar">
        <div class="container">
           <div class="logo">
              <img src="{{ asset('img/logo.png') }}" alt="Logo Raven">
           </div>
            <ul class="nav-links">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#sobre">Sobre Nos</a></li>
                <li><a href="#projetos">Projetos</a></li>
                <li><a href="#equipe">Equipe</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </div>
    </nav>

    <section class="hero" id="inicio">
        <div class="hero-container">
            <div class="hero-text">
                <h1>Tecnologia que faz suas ideias ganharem asas.</h1>
                <p>
                    A Raven desenvolve solucoes digitais modernas para empresas
                    que querem inovar e crescer no mundo tecnologico.
                </p>
                <a href="#" class="btn">Conheca agora</a>
            </div>
            <div class="hero-image">
                <img src="{{ asset('img/quadrados.png') }}" alt="Arte Raven">
            </div>
        </div>
    </section>

    <section class="about" id="sobre">
        <h3 class="about-title">Sobre nos</h3>
        <div class="about-box">
            <div class="about-left">
                <img src="{{ asset('img/sobrenos.png') }}" alt="Sobre Raven">
            </div>
            <div class="about-right">
                <h2>Tecnologia que faz suas ideias ganharem asas.</h2>
                <p>
                    A Raven atua na area de desenvolvimento de software, criando aplicacoes sob medida
                    para atender as necessidades de empresas de pequeno e medio porte, com foco em eficiencia,
                    inovacao e qualidade.
                </p>
            </div>
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
        <h3 class="Dev-title">Nossos Desenvolvedores</h3>
        <div class="dev-box">
            <div class="about-right">
                <h2>Aqueles que fazem a Raven acontecer</h2>
            </div>
            <div class="dev-carousel-wrapper">
                <div class="dev-carousel">
                    @foreach($devs as $d)
                    <div class="dev-card">
                        <figure class="figura">
                            <img class="image" src="{{ asset($d->foto) }}" alt="{{ $d->nome }}">
                            <figcaption class="figura-texto">
                                <h3>{{ $d->nome }}</h3>
                                <div class="linha-dev"></div>
                                <p>{{ $d->funcao }}</p>
                            </figcaption>
                        </figure>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="secao-formulario" id="contato">
        <div class="div-textForm">
            <div>
                <h1 class="title-textForm">Nos Contate</h1>
                <p class="text-textForm">Nossa equipe esta preparada para entender seu desafio e estruturar uma proposta tecnica com foco em resultado, prazo e escalabilidade para o seu negocio.</p>
            </div>
            <div class="contato-box">
                <a href="mailto:contato@raven.com.br" class="contato-item">
                    <span class="contato-label">E-mail Corporativo</span>
                    <span class="contato-value">contato@raven.com.br</span>
                </a>
                <a href="tel:+5511999999999" class="contato-item">
                    <span class="contato-label">Atendimento Comercial</span>
                    <span class="contato-value">+55 (11) 99999-9999</span>
                </a>
            </div>
        </div>
        <div class="div-formulario">
            <form action="" method="get" class="formulario">
                <label for="name" class="titlelabel">Nome Completo</label>
                <input type="text" class="input-form" name="name-form" id="name" placeholder="Nome completo...">
                <label for="email" class="titlelabel">E-mail</label>
                <input type="email" class="input-form" name="email-form" id="email" placeholder="E-mail...">
                <label for="assunto" class="titlelabel">Assunto</label>
                <input type="text" class="input-form" name="assunto" id="assunto" placeholder="Assunto...">
                <input type="submit" class="botao-form" value="Fale conosco">
            </form>
        </div>
    </section>

    <footer class="footer-home">
        <div class="div-footer1">
            <div class="logo-footer">
               <img src="{{ asset('img/logo.png') }}" alt="Logo Raven">
            </div>
            <div class="div-footer2">
                &copy; Todos os direitos reservados para Raven - 2026
            </div>
            <div class="icones-footer">
                <a href="#"><img class="iconesHome" src="https://cdn.simpleicons.org/instagram/a8d4ee" alt="Instagram"></a>
                <a href="#"><img class="iconesHome" src="https://cdn.simpleicons.org/whatsapp/a8d4ee" alt="WhatsApp"></a>
                <a href="#"><img class="iconesHome" src="https://cdn.simpleicons.org/x/a8d4ee" alt="X"></a>
                <a href="#"><img class="iconesHome" src="https://cdn.simpleicons.org/threads/a8d4ee" alt="Threads"></a>
            </div>
        </div>
    </footer>

    <div class="project-modal" id="projectModal" aria-hidden="true">
        <div class="project-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="projectModalTitle">
            <button class="project-modal-close" type="button" id="projectModalClose" aria-label="Fechar">x</button>
            <h3 id="projectModalTitle"></h3>
            <p id="projectModalDescription"></p>
            <div class="project-modal-image-wrap">
                <img id="projectModalImage" src="" alt="Projeto em destaque">
            </div>
        </div>
    </div>

    <script src="{{ url('js/carrossel.js') }}"></script>
</body>
</html>