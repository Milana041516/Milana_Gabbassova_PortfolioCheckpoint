(() => {
//video
const player = new Plyr('video');

//burger-con
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
})

//gsap animations
gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(ScrollToPlugin);


//links appearing
gsap.from('.logo-tablet', {
  opacity: 0,
  delay: 0.5,
  x:20,
  duration: 1
});

gsap.from(navMenu.children ,{
  opacity: 0,
  x: 0,
  duration: 1,
  delay: 1,
  stagger: {
    amount: 1
  }
});

gsap.from('.contact-tablet', {
  opacity: 0,
  delay: 1.5,
  x:20,
  duration: 1
});

//text, heading appearing
gsap.utils.toArray('.heading').forEach((title, index) => {
  gsap.fromTo(title, {
    opacity: 0,
    x: 100,  
  }, {
    opacity: 1,
    x: 0,   
    duration: 1.5, 
    scrollTrigger: {
      trigger: title,
      start: "top 80%", 
      end: "bottom top",
      toggleActions: "play none none none"
    }
  });
});

//project-cards are appearing
gsap.fromTo('.card-gsap', {
  opacity: 0,
  scale: .1,
}, {
  opacity: 1,
  scale: 1,
  duration: 1,
  delay: .3,
  stagger: {
    amount: 1
  },
  scrollTrigger: {
    trigger: '.card-gsap', 
    start: "top 80%", 
    end: "top 30%", 
    toggleActions: "play none none reverse", 
    markers: false
  }
});

//content appearing from left to centre and right to center
gsap.fromTo('.content-gsap-left', {
  x: "-50vw",  
}, {
  x: "0",  
  delay: .5,
  duration: 1,
  scrollTrigger: {
    trigger: '.content-gsap-left',
    start: "top 80%",  
    end: "top 30%",  
    toggleActions: "play none none reverse",
    markers: false
  }
});

gsap.fromTo('.content-gsap-right', {
  x: "50vw",  
}, {
  x: "0",  
  delay: .5,
  duration: 1,
  scrollTrigger: {
    trigger: '.content-gsap-right',
    start: "top 80%",  
    end: "top 30%",  
    toggleActions: "play none none reverse",
    markers: false
  }
});

//project cards for project page are appearing
gsap.from('.projects-project div', {
  opacity: 0,
  y: 30,
  duration: 1,
  delay: 0.5,
  stagger: {
    amount: 1
  },
  scrollTrigger: {
    trigger: '.projects-project div',
    start: "top 80%",
    end: "bottom top",
    toggleActions: "restart reverse restart reverse"
  }
});




//scroll to link 
const contactLinks = document.querySelectorAll(".contact-scroll a");

function scrollLink(e) {    
        e.preventDefault(); 
        console.log(e.currentTarget.hash);
        let selectedLink = e.currentTarget.hash;
        gsap.to(window, {duration: 1, scrollTo:{y:`${selectedLink}`, offsetY:100 }});
}

contactLinks.forEach((link) => {
    link.addEventListener("click", scrollLink);
});



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

})();