BX.ready(function() {
    function trackScroll() {
        const scrolled = window.pageYOffset;
        const coords = document.documentElement.clientHeight;

        if (scrolled > coords) {
            goTopBtn.style.opacity = '1';
        }
        if (scrolled < coords) {
            goTopBtn.style.opacity = '0';
        }
    }

    function backToTop(evt) {
        evt.preventDefault();
        window.scroll(0, 0);
    }

    const goTopBtn = document.querySelector('.to-top-btn');

    window.addEventListener('scroll', trackScroll);
    goTopBtn.addEventListener('click', backToTop);

    Fancybox.bind("[data-fancybox]", {
        l10n: Fancybox.l10n.ru
    });
});