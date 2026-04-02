document.addEventListener('DOMContentLoaded', () => {
    const searchBtn = document.getElementById('mobileSearchBtn');
    const closeSearchBtn = document.getElementById('closeSearchBtn');
    const header = document.getElementById('siteheader');
    const mobileInput = document.getElementById('mobileInput');

    searchBtn.addEventListener('click', () => {
        header.classList.add ('search-active')
        mobileInput.focus();
    });

    closeSearchBtn.addEventListener('click', () => {
        header.classList.remove('search-active');
    });
});