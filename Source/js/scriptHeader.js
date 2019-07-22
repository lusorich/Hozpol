  let navMain = document.querySelector('.main-nav');
  let navToggle = document.querySelector('.main-nav__toggle');
  let header = document.querySelector('.page-header');
  let menuList = document.querySelector('.product__menu-list');
  let productItem = document.querySelectorAll('.product__menu-item');

  navMain.classList.remove('main-nav--nojs');

  navToggle.addEventListener('click', function() {
    if (navMain.classList.contains('main-nav--closed')) {
      navMain.classList.remove('main-nav--closed');
      navMain.classList.add('main-nav--opened');
    } else {
      navMain.classList.add('main-nav--closed');
      navMain.classList.remove('main-nav--opened');
    }
  });

  for (let i = 0; i < productItem.length; i++) {
      productItem[i].addEventListener('click', function() {
        for (let i = 0; i < productItem.length; i++) {
          if (productItem[i].classList.contains('product__menu-item--active')) {
            productItem[i].classList.remove('product__menu-item--active');
          }
        }
        productItem[i].classList.add('product__menu-item--active');
      })
  }

  window.onscroll = function() {
    if (window.pageYOffset > 100) {
      header.classList.add('page-header--white');
    } else {
      header.classList.remove('page-header--white');
    }
  }
