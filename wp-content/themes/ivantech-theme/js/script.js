// script.js
// document.addEventListener('DOMContentLoaded', function () {
//   const menuToggle = document.getElementById('menuToggle');
//   const offcanvasMenu = document.getElementById('offcanvasMenu');

//   menuToggle.addEventListener('click', function () {
//     if (offcanvasMenu.classList.contains('active')) {
//       // Oculta con animación
//       offcanvasMenu.classList.remove('active');
//     } else {
//       // Muestra
//       offcanvasMenu.classList.add('active');
//     }

//     menuToggle.classList.toggle('open');
//   });
// });

document.addEventListener('DOMContentLoaded', function () {
  const menuToggle = document.getElementById('menuToggle');
  const offcanvasMenu = document.getElementById('offcanvasMenu');

  menuToggle.addEventListener('click', function (e) {
    e.stopPropagation(); // Evita cerrar al hacer clic en el botón
    offcanvasMenu.classList.toggle('active');
    menuToggle.classList.toggle('open');
  });

  // Cerrar el menú al hacer clic fuera
  document.addEventListener('click', function (e) {
    if (
      offcanvasMenu.classList.contains('active') &&
      !offcanvasMenu.contains(e.target) &&
      !menuToggle.contains(e.target)
    ) {
      offcanvasMenu.classList.remove('active');
      menuToggle.classList.remove('open');
    }
  });

  // También para eventos touch (en móviles)
  document.addEventListener('touchstart', function (e) {
    if (
      offcanvasMenu.classList.contains('active') &&
      !offcanvasMenu.contains(e.target) &&
      !menuToggle.contains(e.target)
    ) {
      offcanvasMenu.classList.remove('active');
      menuToggle.classList.remove('open');
    }
  });
});