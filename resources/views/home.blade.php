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
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
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

    </div>

</section>
</body>
</html>