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
    if (window.pageYOffset > 50) {
      header.classList.add('page-header--white');
    } else {
      header.classList.remove('page-header--white');
    }
  }

var element = document.querySelector('.contacts__title');

var Visible = function (target) {
  // Все позиции элемента
  var targetPosition = {
      top: window.pageYOffset + target.getBoundingClientRect().top,
      left: window.pageXOffset + target.getBoundingClientRect().left,
      right: window.pageXOffset + target.getBoundingClientRect().right,
      bottom: window.pageYOffset + target.getBoundingClientRect().bottom
    },
    // Получаем позиции окна
    windowPosition = {
      top: window.pageYOffset,
      left: window.pageXOffset,
      right: window.pageXOffset + document.documentElement.clientWidth,
      bottom: window.pageYOffset + document.documentElement.clientHeight
    };

  if (targetPosition.bottom > windowPosition.top && // Если позиция нижней части элемента больше позиции верхней чайти окна, то элемент виден сверху
    targetPosition.top < windowPosition.bottom && // Если позиция верхней части элемента меньше позиции нижней чайти окна, то элемент виден снизу
    targetPosition.right > windowPosition.left && // Если позиция правой стороны элемента больше позиции левой части окна, то элемент виден слева
    targetPosition.left < windowPosition.right) { // Если позиция левой стороны элемента меньше позиции правой чайти окна, то элемент виден справа
    // Если элемент полностью видно, то запускаем следующий код
    menuList.classList.add('menu-list--position');
  } else {
    // Если элемент не видно, то запускаем этот код
    console.clear();
    menuList.classList.remove('menu-list--position');
  };
};

// Запускаем функцию при прокрутке страницы
window.addEventListener('scroll', function() {
  Visible (element);
});

// А также запустим функцию сразу. А то вдруг, элемент изначально видно
Visible (element);
