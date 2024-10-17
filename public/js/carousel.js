document.addEventListener('DOMContentLoaded', () => {
    const feedbackCards = document.querySelector('.feedback-cards');
    const cards = document.querySelectorAll('.feedback-card');
    const totalCards = cards.length;
    const cardsToShow = 3; // Número de cards a serem mostrados por vez
    let currentIndex = 0;

    if (totalCards > 0) {
        document.querySelector('.right-arrow').addEventListener('click', () => {
            currentIndex += cardsToShow;
            if (currentIndex >= totalCards) {
                currentIndex = 0; // Volta para o início se ultrapassar
            }
            updateCarousel();
        });

        document.querySelector('.left-arrow').addEventListener('click', () => {
            currentIndex -= cardsToShow;
            if (currentIndex < 0) {
                currentIndex = Math.max(0, totalCards - cardsToShow); // Volta para o final
            }
            updateCarousel();
        });

        function updateCarousel() {
            const offset = -currentIndex * (cards[0].clientWidth + 20); // Calcular o deslocamento
            feedbackCards.style.transform = `translateX(${offset}px)`;
        }
    }
});


