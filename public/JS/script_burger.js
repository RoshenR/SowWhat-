function toggleBurgerMenu() {
    const navLinks = document.querySelector('.burger-nav-links');
    const menuIcon = document.querySelector('.burger-menu-icon');
    navLinks.classList.toggle('active');
    menuIcon.classList.toggle('active');
}