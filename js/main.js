//video
const player = new Plyr('video');

//burger-con
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
})


//slider 
const galleryContainer = document.querySelector('.gallery-container');
const galleryControlsContainer = document.querySelector('.gallery-controls');
const galleryControls = ['previous', 'next'];
const galleryItems = document.querySelectorAll('.project-card');

class Carousel {
    constructor(container, items, controls) {
        this.carouselContainer = container;
        this.carouselControls = controls;
        this.carouselArray = [...items];
    }

    updateGallery() {
        this.carouselArray.forEach(card => {
            card.classList.remove('project-card-1');
            card.classList.remove('project-card-2');
            card.classList.remove('project-card-3');
            card.classList.remove('project-card-4');
            card.classList.remove('project-card-5');
        });

        this.carouselArray.slice(0.5).forEach((card, i) => {
            card.classList.add(`project-card-${i+1}`);
        })
    }

    setCurrentState(direction) {
        if (direction.className == "gallery-controls-previous") {
            this.carouselArray.unshift(this.carouselArray.pop());
        }else {
            this.carouselArray.push(this.carouselArray.shift());
        }
        this.updateGallery(); 
    }

    setControls() {
        this.carouselControls.forEach(control => {
            galleryControlsContainer.appendChild(document.createElement('button')).className = `.gallery-controls-${control}`;
            document.querySelector(`.gallery-controls-${control}`).innerText = control;
        })
    }

    useControls() {
        const triggers = [...galleryControlsContainer.childNodes];
        triggers.forEach(control => {
            control.addEventListener('click', e => {
                e.preventDefault();
                this.setCurrentState(control);
            })
        })
    }
}

const exampleCarousel = new Carousel(galleryContainer, galleryItems, galleryControls);

exampleCarousel.setControls();
exampleCarousel.useControls();