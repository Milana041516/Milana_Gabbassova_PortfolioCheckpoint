export const initializeSlider = () => {

//slider 
const container = document.querySelector('#carousel-container');
const prevBtn = document.querySelector('.slider-prev');
const nextBtn = document.querySelector('.slider-next');

if (!container) {
  console.log('Carousel container not found');
} else {
  let currentIndex = 0;
  


  const cards = document.querySelectorAll('.project-card');
  const totalCards = cards.length;

  function updateCarousel() {
    cards.forEach((card, index) => {
      const offset = (index - currentIndex + totalCards) % totalCards;
      const zIndex = offset === 2 ? 2 : 0;
      const scale = offset === 2 ? 1.2 : 0.7;
      const opacity = offset === 2 ? 1 : 0.5;

      card.style.transform = `
        translateX(${(offset - 2) * 100}%) 
        translateZ(${offset === 2 ? '50px' : '-100px'}) 
        scale(${scale})
      `;
      card.style.opacity = opacity;
      card.style.zIndex = zIndex;
    });
  }

  nextBtn.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % totalCards;
    updateCarousel();
  });

  prevBtn.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + totalCards) % totalCards;
    updateCarousel();
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowRight') {
      currentIndex = (currentIndex + 1) % totalCards;
      updateCarousel();
    } else if (e.key === 'ArrowLeft') {
      currentIndex = (currentIndex - 1 + totalCards) % totalCards;
      updateCarousel();
    }
  });

  let touchStartX = 0;
  let touchEndX = 0;

  container.addEventListener('touchstart', (e) => {
    touchStartX = e.changedTouches[0].screenX;
  });

  container.addEventListener('touchend', (e) => {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
  });

  function handleSwipe() {
    const swipeThreshold = 50;
    const swipeLength = touchEndX - touchStartX;

    if (Math.abs(swipeLength) > swipeThreshold) {
      if (swipeLength > 0) {
        currentIndex = (currentIndex - 1 + totalCards) % totalCards;
      } else {
        currentIndex = (currentIndex + 1) % totalCards;
      }
      updateCarousel();
    }
  }

  updateCarousel();
}

};