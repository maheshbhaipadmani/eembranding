document.addEventListener("DOMContentLoaded", function () {
    const dropdownBtns = document.querySelectorAll(".dropdown-btn");

    dropdownBtns.forEach((btn) => {
        btn.addEventListener("click", function () {
            let parentLi = this.closest("li");
            if (parentLi.classList.contains("open")) {
                parentLi.classList.remove("open");
                parentLi.querySelector(".sub-menu").style.display = "none";
            } else {
                document.querySelectorAll(".menu-item-has-children").forEach((item) => {
                    item.classList.remove("open");
                    item.querySelector(".sub-menu").style.display = "none";
                });

                parentLi.classList.add("open");
                parentLi.querySelector(".sub-menu").style.display = "block";
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const mobileNavToggler = document.querySelector('.mobile-nav-toggler');
    const mobileMenu = document.querySelector('.mobile-menu');
    const closeBtn = document.querySelector('.mobile-menu .close-btn');
    const body = document.body;
    const showMenuClass = 'menu-open';
    if (mobileNavToggler && mobileMenu) {
        mobileNavToggler.addEventListener('click', function() {
            mobileMenu.classList.add(showMenuClass);
            if (body) {
                body.classList.add('mobile-menu-active'); 
            }
        });
    }
    if (closeBtn && mobileMenu) {
        closeBtn.addEventListener('click', function() {
            mobileMenu.classList.remove(showMenuClass);
            if (body) {
                body.classList.remove('mobile-menu-active');
            }
        });
    }
    const navLinks = document.querySelectorAll('.mobile-menu .navigation .nav-links');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.remove(showMenuClass);
            if (body) {
                body.classList.remove('mobile-menu-active');
            }
        });
    });
});