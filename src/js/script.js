import Swiper from "swiper/bundle";
import * as bootstrap from 'bootstrap';

const navbar = document.querySelector('.navbar');
const nav = document.querySelector('.navbar-nav');
const mobileNav = document.querySelector('.navbar-nav--mobile');
const btnScrollTo = document.querySelectorAll('.contact-btn')
const contactSection = document.querySelector('#contacto');
const offCanvasEl = document.querySelector('#offcanvas');

class App {
    constructor() {
        // Load all swipers 
        this._loadSwipers();
        this._stickyNavigation();
        this._smoothNavigation();
        this._slideToContact();
        this._smoothNavigationMobile();
    }

    _loadSwipers(){
        const prefix = "mx3-group";
        const sliderClass = [
            `.${prefix}_service-slider`, 
            `.${prefix}_work-slider`,
            `.${prefix}_maintenance-slider`,
            `.${prefix}_portfolio-slider`,
            `.${prefix}_slideshow-slider`
        ];

        sliderClass.forEach(itemClass => {
            const itemProps = {
                loop: true,
            }

            if(itemClass === `.${prefix}_service-slider` || itemClass === `.${prefix}_maintenance-slider`){
                itemProps.slidesPerView = 1;
                itemProps.spaceBetween= 0;

                if(itemClass === `.${prefix}_service-slider`){
                    itemProps.navigation = {
                        nextEl: `.${prefix}_service-button-next`,
                        prevEl: `.${prefix}_service-button-prev`,
                    }

                    itemProps.breakpoints = {
                        768: {
                          slidesPerView: 2,
                          spaceBetween: 30
                        },
                        1200: {
                          slidesPerView: 3,
                          spaceBetween: 30
                        }
                    }
                }

                if(itemClass === `.${prefix}_maintenance-slider`){
                    itemProps.navigation = {
                        nextEl: `.${prefix}_maintenance-button-next`,
                        prevEl: `.${prefix}_maintenance-button-prev`,
                    }

                    itemProps.breakpoints = {
                        768: {
                          slidesPerView: 2,
                          spaceBetween: 30
                        },
                        1200: {
                          slidesPerView: 3,
                          spaceBetween: 30
                        }
                    }
                }
            }

            if(itemClass === `.${prefix}_work-slider`){
                itemProps.navigation = {
                    nextEl: `.${prefix}_work-button-next`,
                    prevEl: `.${prefix}_work-button-prev`,
                }

                itemProps.pagination = {
                    el: `.${prefix}_work-pagination`,
                    clickable: true,
                }
            }

            if(itemClass === `.${prefix}_portfolio-slider`){
                itemProps.navigation = {
                    nextEl: `.${prefix}_portfolio-button-next`,
                    prevEl: `.${prefix}_portfolio-button-prev`,
                }
            }

            if(itemClass === `.${prefix}_slideshow-slider`){
                itemProps.pagination = {
                    el: `.${prefix}_slideshow-pagination`,
                    clickable: true,
                }
            }

            const slider = new Swiper(itemClass, itemProps);
        });
    }

    _stickyNavigation(){
        const header = document.querySelector('#site-header');
        const navHeight = navbar.getBoundingClientRect().height;

        const stickyNav = function (entries) {
            const [entry] = entries;

            if (!entry.isIntersecting) navbar.classList.add('sticky');
            else navbar.classList.remove('sticky');
        };

        const headerObserver = new IntersectionObserver(stickyNav, {
            root: null,
            threshold: 0,
            rootMargin: `-${navHeight}px`,
        });

        headerObserver.observe(header);
    }

    _smoothNavigation(){
        nav.addEventListener('click', function (e) {
            e.preventDefault();

            // Matching strategy
            if (e.target.hash) {
                const id = e.target.hash;
                document.querySelector(id).scrollIntoView({ behavior: 'smooth' });
            }
        });
    }

    _smoothNavigationMobile(){

        const bsOffcanvas = new bootstrap.Offcanvas(offCanvasEl);

        mobileNav.addEventListener('click', function (e) {
            e.preventDefault();

            // Matching strategy
            if (e.target.hash) {
                const id = e.target.hash;
                document.querySelector(id).scrollIntoView({ behavior: 'smooth' });
                bsOffcanvas.hide();
            }
        });

    }

    _slideToContact(){
        btnScrollTo.forEach(btn => {
            btn.addEventListener('click', function (e) {
                contactSection.scrollIntoView({ behavior: 'smooth' });
            });
        })
    }
}

const app = new App();