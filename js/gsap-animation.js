export const initializeGSAPAnimations = () => {
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

const navMenu = document.querySelector('.nav-menu');


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
    toggleActions: "play none none none"
  }
});

//about me page scrolling
gsap.from('.info-about', {
  opacity: 0,
  x: -100, 
  duration: 1,
  stagger: {
    amount: 0.5 
  },
  scrollTrigger: {
    trigger: '.info-about',
    start: "top 30%",
    end: "bottom top",
    toggleActions: "play none none reverse", 
    markers: false
  }
});

gsap.from('.info-picture', {
  opacity: 0,
  x: 100, 
  duration: 1,
  stagger: {
    amount: 0.5 
  },
  scrollTrigger: {
    trigger: '.info-picture',
    start: "top 30%",
    end: "bottom top",
    toggleActions: "play none none reverse",
    markers: false
  }
});

gsap.from('.info-socials', {
  opacity: 0,
  x: 100, 
  duration: 1,
  stagger: {
    amount: 0.5
  },
  scrollTrigger: {
    trigger: '.info-socials',
    start: "top 80%",
    end: "bottom top",
    toggleActions: "play none none reverse",
    markers: false
  }
});

gsap.from('.info-education', {
  opacity: 0,
  x: -100, 
  duration: 1,
  stagger: {
    amount: 0.5
  },
  scrollTrigger: {
    trigger: '.info-education',
    start: "top 80%",
    end: "bottom top",
    toggleActions: "play none none reverse",
    markers: false
  }
});

gsap.from('.info-location', {
  opacity: 0,
  x: 100,
  duration: 1,
  stagger: {
    amount: 0.5
  },
  scrollTrigger: {
    trigger: '.info-location',
    start: "top 80%",
    end: "bottom top",
    toggleActions: "play none none reverse",
    markers: false
  }
});

gsap.from('.info-why-frontend', {
  opacity: 0,
  y: 100, 
  duration: 1,
  scrollTrigger: {
    trigger: '.info-why-frontend',
    start: "top 80%",
    end: "bottom top",
    toggleActions: "play none none reverse",
    markers: false
  }
});


gsap.from('.info-skills', {
  opacity: 0,
  y: 100, 
  duration: 1,
  scrollTrigger: {
    trigger: '.info-skills',
    start: "top 80%",
    end: "bottom top",
    toggleActions: "play none none reverse",
    markers: false
  }
});

//case-study text appearing
gsap.from('.text-info-cs', {
  opacity: 0,
  y: 100, 
  duration: 1,
  scrollTrigger: {
    trigger: '.text-info-cs',
    start: "top 65%",
    end: "bottom top",
    toggleActions: "play none none reverse",
    markers: false
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

 };