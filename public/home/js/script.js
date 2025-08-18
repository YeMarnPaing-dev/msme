document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(".direction .col-md-6");

    function checkScroll() {
        elements.forEach(el => {
            const rect = el.getBoundingClientRect();
            if (rect.top < window.innerHeight - 100) {
                el.classList.add("show");
            }
        });
    }

    window.addEventListener("scroll", checkScroll);
    checkScroll(); // run once on load
});
