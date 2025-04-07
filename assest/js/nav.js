document.addEventListener("DOMContentLoaded", function () {
    const dropdownBtns = document.querySelectorAll(".dropdown-btn");

    dropdownBtns.forEach((btn) => {
        btn.addEventListener("click", function () {
            let parentLi = this.closest("li");
            if (parentLi.classList.contains("open")) {
                parentLi.classList.remove("open");
                parentLi.querySelector(".sub-menu").style.display = "none";
            } else {
                // Close all other open dropdowns
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
