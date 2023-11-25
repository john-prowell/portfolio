// Zenscroll
var defaultDuration = 777; // ms
var edgeOffset = 120; // px
zenscroll.setup(defaultDuration, edgeOffset);

// Fixed header background color change on scroll
// const headerScroll = () => {
//   const header = document.getElementById('header');
//   const top = window.scrollY;
//   if (top >= 75) {
//     header.classList.add('scrolled');
//   } else header.classList.remove('scrolled');
// };

// const scrollToTop = () => {
//   const backToTop = document.getElementById('backToTop');
//   if (
//     document.body.scrollTop > 200 ||
//     document.documentElement.scrollTop > 200
//   ) {
//     backToTop.style.display = 'inline';
//   } else {
//     backToTop.style.display = 'none';
//   }
// };

// window.onscroll = () => {
//   headerScroll();
//   scrollToTop();
// };

/* Highlight top nav links when corresponding section is scrolled to */

// Get all sections that have an ID defined except #hero
// const sections = document.querySelectorAll('section[id]:not(#hero)');

// Add an event listener listening for scroll
// window.addEventListener('scroll', navHighlighter);

// function navHighlighter() {
//   // Get current scroll position
//   let scrollY = window.pageYOffset;

//   // Now we loop through sections to get height, top and ID values for each
//   sections.forEach((current) => {
//     const sectionHeight = current.offsetHeight;
//     const sectionTop = current.offsetTop - 100;
//     sectionId = current.getAttribute('id');

//     /*
//     - If our current scroll position enters the space where current section on screen is, add .active class to corresponding navigation link, else remove it
//     - To know which link needs an active class, we use sectionId variable we are getting while looping through sections as an selector
//     */
//     if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
//       document
//         .querySelector('.nav a[href*=' + sectionId + ']')
//         .classList.add('active');
//     } else {
//       document
//         .querySelector('.nav a[href*=' + sectionId + ']')
//         .classList.remove('active');
//     }
//   });
// }

jQuery(window).load(function () {
  jQuery('.twentytwenty-container').twentytwenty();
});

AOS.init({ disable: 'mobile', startEvent: 'DOMContentLoaded' });

// --- Mobile Nav Menu
const hamMenuBtn = document.querySelector('.header__main-ham-menu-cont');
const smallMenu = document.querySelector('.header__sm-menu');
const headerHamMenuBtn = document.querySelector('.header__main-ham-menu');
const headerHamMenuCloseBtn = document.querySelector(
  '.header__main-ham-menu-close'
);
const headerSmallMenuLinks = document.querySelectorAll('.header__sm-menu-link');

hamMenuBtn.addEventListener('click', () => {
  if (smallMenu.classList.contains('header__sm-menu--active')) {
    smallMenu.classList.remove('header__sm-menu--active');
  } else {
    smallMenu.classList.add('header__sm-menu--active');
  }
  if (headerHamMenuBtn.classList.contains('d-none')) {
    headerHamMenuBtn.classList.remove('d-none');
    headerHamMenuCloseBtn.classList.add('d-none');
  } else {
    headerHamMenuBtn.classList.add('d-none');
    headerHamMenuCloseBtn.classList.remove('d-none');
  }
});

for (let i = 0; i < headerSmallMenuLinks.length; i++) {
  headerSmallMenuLinks[i].addEventListener('click', () => {
    smallMenu.classList.remove('header__sm-menu--active');
    headerHamMenuBtn.classList.remove('d-none');
    headerHamMenuCloseBtn.classList.add('d-none');
  });
}

const headerLogoContainer = document.querySelector('.header__logo-container');

headerLogoContainer.addEventListener('click', () => {
  location.href = '#';
});
