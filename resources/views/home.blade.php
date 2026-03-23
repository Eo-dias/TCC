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
                <span>Logo da Empresa</span>
            </div>

            <ul class="nav-links">
                <li><a href="#">Sessão1</a></li>
                <li><a href="#">Sessão2</a></li>
                <li><a href="#">Sessão3</a></li>
                <li><a href="#">Sessão4</a></li>
                <li><a href="#">Sessão5</a></li>
            </ul>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-container">

            <div class="hero-text">
                <h1>Tecnologia que faz suas ideias ganharem asas.</h1>

                <p>
                    A Raven desenvolve soluções digitais modernas para empresas
                    que querem inovar e crescer no mundo tecnológico.
                </p>

                <a href="#" class="btn">Conheça agora</a>
            </div>

            <div class="hero-image">
                <img src="{{ asset('img/quadrados.png') }}">
            </div>

        </div>
    </section>

<section class="about">

    <h3 class="about-title">Sobre nós</h3>

    <div class="about-box">

        <div class="about-left">
            <img src="{{ asset('img/sobrenos.png') }}">
        </div>

        <div class="about-right">
            <h2>Tecnologia que faz suas ideias ganharem asas.</h2>

            <p>
                A Raven atua na área de  desenvolvimento de software, criando aplicações sob medida 
                para atender às necessidades de empresas de pequeno e médio porte, com foco em eficiência,
                inovação e qualidade.
            </p>
        </div>

        <div class="tech-carousel">
            <div class="tech-track">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg">
                <img src="https://cdn.simpleicons.org/figma/000000">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg">

                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg">
                <img src="https://cdn.simpleicons.org/figma/000000">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg">

                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg">
                <img src="https://cdn.simpleicons.org/figma/000000">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg">
            </div>
        </div>
    </div>

</section>

<section class="devs">
     <h3 class="Dev-title">Nossos Desenvolvedores</h3>

     <div class="dev-box">

        <div class="about-right">
            <h2>Aqueles que fazem a Raven acontecer</h2>

        </div>

        <div class="dev-carousel-wrapper">
            <button class="prev-dev">‹</button>

            <div class="dev-carousel">
                @foreach($devs as $d)
                <div class="dev-card">
                    <figure class="figura">
                        <img class="image" src="{{ asset($d->foto) }}">
                        <figcaption class="figura-texto">
                            <h3>{{ $d->nome }}</h3>
                            <div class="linha-dev"></div>
                            <p>{{ $d->funcao }}</p>
                        </figcaption>
                    </figure>
                </div>
                @endforeach
            </div>

            <button class="next-dev">›</button>
        </div>
     </div>

</section>

<section class="diferenciais">

    <h2 class="dif-title">Nossos diferenciais</h2>

    <div class="dif-container">

        <div class="dif-card">
            <div class="icon">💻</div>
            <h3>Aplicações digitais</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="dif-card">
            <div class="icon">⚙️</div>
            <h3>Desenvolvimento web</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="dif-card">
            <div class="icon">🖥️</div>
            <h3>Desenvolvimento de sistemas</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="dif-card">
            <div class="icon">⚙️</div>
            <h3>Desenvolvimento web</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

    </div>

</section>

<section class="secao-formulario">
    <div class="div-textForm">
        <div>
            <h1 class="title-textForm">Nos Contate</h1>
            <p class="text-textForm">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <div>
            <p class="contato-form"><a href="#" class="link-textForm">✉️ E-mail</a></p>
            <p class="contato-form"><a href="#" class="link-textForm">📞 Telefone</a></p>
        </div>
    </div>
    <div class="div-formulario">
        <form action="" method="get" class="formulario">
            <label for="name" class="titlelabel">Nome Completo</label>
            <input type="text" class="input-form" name="name-form" id="" placeholder="Nome completo...">
            <label for="email" class="titlelabel">E-mail</label>
            <input type="email" class="input-form" name="email-form" id="" placeholder="E-mail...">
            <label for="assunto" class="titlelabel">Assunto</label>
            <input type="text"  class="input-form" name="assunto" id="" placeholder="Assunto...">
            <input type="submit" class="botao-form" value="Fala conosco">
        </form>
    </div>
</section>
<footer class="footer-home">
    <div class="div-footer1">
        <div class="secoesFooter"><h1>Logo da empresa</h1> <p>Slogan da empresa</p></div>
        <div class="secoesFooter">
            <a href="#"><img class="iconesHome" src="{{ asset('img/icones/instagram.png') }}" alt="insta"></a>
            <a href="#"><img class="iconesHome" src="{{ asset('img/icones/whatsapp.png') }}" alt="whats"></a>
            <a href="#"><img class="iconesHome" src="{{ asset('img/icones/twitter-alt.png') }}" alt="x"></a>
            <a href="#"><img class="iconesHome" src="{{ asset('img/icones/threads-circle.png') }}" alt="treads"></a>
        </div>
    </div>
    <div class="div-footer2">&copy; Todos os direitos reservados para Raven - 2026</div>
</footer>
    <script src="{{ url('js/carousel.js') }}"></script>
</body>
</html> 