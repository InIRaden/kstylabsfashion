document.addEventListener('DOMContentLoaded', function() { 
    const prev = document.querySelector('#prev');
    const next = document.querySelector('#next');
    const cardsContainer = document.querySelector('.cards-container');

    let scrollAmount = 0;
    let cardWidth = cardsContainer.querySelector('.card').offsetWidth + 16;
    
    next.addEventListener('click', () => {
        cardsContainer.scrollBy({
            left: cardWidth,
            behavior: 'smooth'
        });
    });
    
    prev.addEventListener('click', () => {
        cardsContainer.scrollBy({
            left: -cardWidth,
            behavior: 'smooth'
        });
    });
});

// Animasi scroll
document.addEventListener("DOMContentLoaded", () => {
    const elements = document.querySelectorAll(".container");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
                observer.unobserve(entry.target); 
            }
        });
    }, { threshold: 0.2 });

    elements.forEach((el) => observer.observe(el));
});