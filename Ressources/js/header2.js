const menuToggle = document.querySelector('.menu-toggles');
const menu = document.querySelector('.menus');

menuToggle.addEventListener('click', () => {
  menuToggle.classList.toggle('active');
  menu.classList.toggle('active');
});