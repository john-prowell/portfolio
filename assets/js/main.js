// Smooth Scroll
const scroll = new SmoothScroll('a[href*="#"]', {
  // offset: 95
  header: '[data-scroll-header]'
});

// Fixed header background color change on scroll
const headerScroll = () => {
  const header = document.getElementById('header');
  const top = window.scrollY;
  if (top >= 75) {
    header.classList.add('scrolled');
  } else header.classList.remove('scrolled');
};

// const navScroll = () => {
//   let scrollpos = window.scrollY;
//   const nav = document.getElementById('nav');
//   const navLinks = nav.getElementsByClassName('nav__link');
//   if (scrollpos <= 75) {
//     Array.from(navLinks).forEach(function (element) {
//       element.classList.remove('active');
//       console.log('removed');
//       // element.className.replace('active', '');
//     });
//   }
//   console.log(scrollpos);
// };

const scrollToTop = () => {
  const backToTop = document.getElementById('backToTop');
  if (
    document.body.scrollTop > 200 ||
    document.documentElement.scrollTop > 200
  ) {
    backToTop.style.display = 'inline';
  } else {
    backToTop.style.display = 'none';
  }
};

window.onscroll = () => {
  headerScroll();
  // navScroll();
  scrollToTop();
};

// nav add active class on link click

// const nav = document.getElementById('nav');
// const navLinks = nav.getElementsByClassName('nav__link');
// for (let i = 0; i < navLinks.length; i++) {
//   navLinks[i].addEventListener('click', function () {
//     var current = document.getElementsByClassName('active');
//     if (current.length > 0) {
//       current[0].className = current[0].className.replace(' active', '');
//     }
//     this.className += ' active';
//     console.log('added');
//   });
// }

// Get all sections that have an ID defined except #hero
const sections = document.querySelectorAll('section[id]:not(#hero)');
// console.log(sections);

// Add an event listener listening for scroll
window.addEventListener('scroll', navHighlighter);

function navHighlighter() {
  // Get current scroll position
  let scrollY = window.pageYOffset;

  // Now we loop through sections to get height, top and ID values for each
  sections.forEach((current) => {
    const sectionHeight = current.offsetHeight;
    const sectionTop = current.offsetTop - 100;
    sectionId = current.getAttribute('id');
    // console.log(sectionId);

    /*
    - If our current scroll position enters the space where current section on screen is, add .active class to corresponding navigation link, else remove it
    - To know which link needs an active class, we use sectionId variable we are getting while looping through sections as an selector
    */
    if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
      document
        .querySelector('.nav a[href*=' + sectionId + ']')
        .classList.add('active');
    } else {
      document
        .querySelector('.nav a[href*=' + sectionId + ']')
        .classList.remove('active');
    }
  });
}

jQuery(window).load(function () {
  jQuery('.twentytwenty-container').twentytwenty();
});
