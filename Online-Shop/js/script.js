//Toglle class active
const navbarnav = document.querySelector('.navbar-nav');
//Ketika menu di klik
document.querySelector('#menu').onclick = () => {
  navbarnav.classList.toggle('active');
};

// klik di luar side bar untuk menghilangkan nav
const menu = document.querySelector('#menu');

document.addEventListener('click', function (e) {
  if (!menu.contains(e.target) && !navbarnav.contains(e.target)) {
    navbarnav.classList.remove('active');
  }
});
