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
    // Select the mobile navigation toggler button
    const mobileNavToggler = document.querySelector('.mobile-nav-toggler');
    // Select the mobile menu
    const mobileMenu = document.querySelector('.mobile-menu');
    // Select the close button inside the mobile menu
    const closeBtn = document.querySelector('.mobile-menu .close-btn');
    // Select the body element to potentially prevent scrolling when the menu is open
    const body = document.body;

    // Class to add to the mobile-menu to show it
    const showMenuClass = 'menu-open'; // A common class name, you can adjust if you have another

    // Add a click event listener to the mobile navigation toggler
    if (mobileNavToggler && mobileMenu) {
        mobileNavToggler.addEventListener('click', function() {
            mobileMenu.classList.add(showMenuClass);
            if (body) {
                body.classList.add('mobile-menu-active'); // Add a class to body to disable scroll
            }
        });
    }

    // Add a click event listener to the close button
    if (closeBtn && mobileMenu) {
        closeBtn.addEventListener('click', function() {
            mobileMenu.classList.remove(showMenuClass);
            if (body) {
                body.classList.remove('mobile-menu-active');
            }
        });
    }

    // Optional: Close menu when a navigation link is clicked (common for mobile UX)
    const navLinks = document.querySelectorAll('.mobile-menu .navigation .nav-links');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.remove(showMenuClass);
            if (body) {
                body.classList.remove('mobile-menu-active');
            }
        });
    });

    // Optional: Close menu when clicking outside the menu
    // This requires a slightly more complex setup or a semi-transparent overlay
    // For simplicity, I'm omitting a generic "click outside" for now,
    // as it can interfere with other elements without careful implementation.
});