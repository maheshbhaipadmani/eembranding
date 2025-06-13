
document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function() { 
        if (typeof Swiper !== 'undefined') {
            const ranberryTrendsSliderElement = document.querySelector('.elementor-element-cbef735.project-details-custom-slider');

            if (ranberryTrendsSliderElement) {
                new Swiper(ranberryTrendsSliderElement.querySelector('.elementor-image-carousel-wrapper'), {
                    navigation: {
                        nextEl: '.elementor-swiper-button-next',
                        prevEl: '.elementor-swiper-button-prev',
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                    loop: true,
                    speed: 500,
                    slidesPerView: 3, 
                    spaceBetween: 0,
                    centeredSlides: true,
                });
            } else {
                console.error("Ranberry Trends slider element not found.");
            }
        } else {
            console.warn("Swiper library not found even after delay.");
        }
    }, 100);
});
