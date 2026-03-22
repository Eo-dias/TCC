document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.querySelector('.dev-carousel')
    const next = document.querySelector('.next-dev')
    const prev = document.querySelector('.prev-dev')

    const cardWidth = 280

    function atualizarBotoes(){
        if(carousel.scrollLeft <= 0){
            prev.style.opacity = "0";
            prev.style.pointerEvents = "none"
        }else{
            prev.style.opacity = "1";
            prev.style.pointerEvents = "auto"
        }

        if(carousel.scrollLeft + carousel.clientWidth >= carousel.scrollWidth - 5){
            next.style.opacity = "0";
            next.style.pointerEvents = "none"
        }else{
            next.style.opacity = "1";
            next.style.pointerEvents = "auto"
        }
    }

    next.addEventListener('click', () => {
        carousel.scrollBy({
            left: cardWidth * 2,
            behavior: 'smooth'
        })
        
    })

    prev.addEventListener('click', () => {
        carousel.scrollBy({
            left: -cardWidth * 2,
            behavior: 'smooth'
        })
    })

    carousel.addEventListener('scroll', atualizarBotoes)

    atualizarBotoes()
})