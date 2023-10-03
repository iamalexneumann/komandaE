BX.ready(function() {
    const navbarContainer = document.querySelector('.navbar');
    const btnElements = navbarContainer.querySelectorAll('.navbar__btn, .navbar__close');

    function togglenavbar() {
        navbarContainer.classList.toggle('open');
    }

    btnElements.forEach(function(btnElement) {
        btnElement.addEventListener('click', togglenavbar);
    });
});