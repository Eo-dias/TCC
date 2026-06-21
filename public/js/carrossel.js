document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.querySelector('.dev-carousel');

    if (!carousel) return;

    // Quanto vai rolar a cada movimento (largura do card + gap)
    const scrollAmount = 280;

    // Tempo entre cada movimento (em ms) — 3 segundos
    const intervaloAutomatico = 3000;

    setInterval(() => {
        const maxScroll = carousel.scrollWidth - carousel.clientWidth;

        // Se chegou no final, volta pro começo
        if (carousel.scrollLeft >= maxScroll - 10) {
            carousel.scrollTo({
                left: 0,
                behavior: 'smooth'
            });
        } else {
            // Senão, avança
            carousel.scrollBy({
                left: scrollAmount,
                behavior: 'smooth'
            });
        }
    }, intervaloAutomatico);
});