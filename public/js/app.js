document.addEventListener('DOMContentLoaded', () => {
    const searchBtn = document.getElementById('mobileSearchBtn');
    const closeSearchBtn = document.getElementById('closeSearchBtn');
    const header = document.getElementById('siteheader');

    searchBtn.addEventListener('click', () => {
        header.classList.toggle('search-active');
    })
})