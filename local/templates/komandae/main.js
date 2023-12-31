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

    const callbackModal = document.querySelector('#callbackModal');
    if (callbackModal) {
        callbackModal.addEventListener('show.bs.modal', function (event) {
            const callbackModalButton = event.relatedTarget
            const callbackModalTitleVal = callbackModalButton.getAttribute('data-bs-modal-title');
            const callbackModalTitle = callbackModal.querySelectorAll('.modal-title');
            const callbackFormBtn = callbackModal.querySelectorAll('.btn');
            const callbackFormChekboxText = callbackModal.querySelectorAll('.form-check-label span');
            callbackModalTitle.forEach(element => element.innerHTML = callbackModalTitleVal);
            callbackFormBtn.forEach(element => element.value = callbackModalTitleVal);
            callbackFormChekboxText.forEach(element => element.textContent = callbackModalTitleVal);

            const callbackService = callbackModalButton.getAttribute('data-bs-modal-service');
            if (callbackService) {
                const serviceInput = callbackModal.querySelector('input[name="SERVICE"]');
                serviceInput.value = callbackService;
            }
        })
    }
});