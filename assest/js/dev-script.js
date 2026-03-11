document.addEventListener("DOMContentLoaded", function () {
    
    // -----------------------------
    // Preloader
    // -----------------------------
   window.addEventListener("load", () => {
    const preloader = document.getElementById("preloader");
    if (preloader) {
        preloader.style.opacity = "0";
        preloader.style.visibility = "hidden";
        // Optional: remove from DOM after fade
        setTimeout(() => preloader.remove(), 500);
    }
});

    // -----------------------------
    // Scroll to Top
    // -----------------------------
    const scrollTopBtn = document.querySelector(".scroll-top");
    if (scrollTopBtn) {
        scrollTopBtn.addEventListener("click", function () {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    }

    // -----------------------------
    // Dropdown Menu
    // -----------------------------
    const dropdownBtns = document.querySelectorAll(".dropdown-btn");
    dropdownBtns.forEach((btn) => {
        btn.addEventListener("click", function () {
            let parentLi = this.closest("li");
            if (!parentLi) return;

            if (parentLi.classList.contains("open")) {
                parentLi.classList.remove("open");
                const subMenu = parentLi.querySelector(".sub-menu");
                if(subMenu) subMenu.style.display = "none";
            } else {
                document.querySelectorAll(".menu-item-has-children").forEach((item) => {
                    item.classList.remove("open");
                    const subMenu = item.querySelector(".sub-menu");
                    if(subMenu) subMenu.style.display = "none";
                });
                parentLi.classList.add("open");
                const subMenu = parentLi.querySelector(".sub-menu");
                if(subMenu) subMenu.style.display = "block";
            }
        });
    });

    // -----------------------------
    // Mobile Menu
    // -----------------------------
    const mobileNavToggler = document.querySelector('.mobile-nav-toggler');
    const mobileMenu = document.querySelector('.mobile-menu');
    const closeBtn = document.querySelector('.mobile-menu .close-btn');
    const body = document.body;
    const showMenuClass = 'menu-open';

    if (mobileNavToggler && mobileMenu) {
        mobileNavToggler.addEventListener('click', function() {
            mobileMenu.classList.add(showMenuClass);
            body?.classList.add('mobile-menu-active'); 
        });
    }
    if (closeBtn && mobileMenu) {
        closeBtn.addEventListener('click', function() {
            mobileMenu.classList.remove(showMenuClass);
            body?.classList.remove('mobile-menu-active');
        });
    }
    const navLinks = document.querySelectorAll('.mobile-menu .navigation .nav-links');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.remove(showMenuClass);
            body?.classList.remove('mobile-menu-active');
        });
    });

    // -----------------------------
    // Swiper Slider
    // -----------------------------
    if (typeof Swiper !== "undefined") {
        new Swiper(".catalog-slider", {
            spaceBetween: 20,
            loop: true,
            autoplay: { delay: 2500, disableOnInteraction: false },
            pagination: { el: ".swiper-pagination", clickable: true },
            speed: 800,
            breakpoints: {
                320: { slidesPerView: 1.2 },
                576: { slidesPerView: 2.2 },
                768: { slidesPerView: 3.2 },
                1024: { slidesPerView: 3.5 }
            }
        });
    }

});

// whatsapp
function redirectToWhatsApp() {
    var phoneNumber = "+919081813238";
    var message = ""; 
    var url =
      "https://api.whatsapp.com/send?phone=" +
      encodeURIComponent(phoneNumber) +
      "&text=" +
      encodeURIComponent(message);
    window.open(url, "_blank");
  }
  