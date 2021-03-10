

const burgerBtn   = document.querySelector('.header__burger');
const headerPopup = document.querySelector('.header__popup');
const navbar      = document.querySelector('.header__navbar');

burgerBtn.addEventListener('click', function(){
    burgerBtn.classList.toggle('header__burger_active');
    headerPopup.classList.toggle('header__popup_active');
    navbar.classList.toggle('header__navbar_active');
});

headerPopup.addEventListener('click', function(){
    burgerBtn.classList.remove('header__burger_active');
    headerPopup.classList.remove('header__popup_active');
    navbar.classList.remove('header__navbar_active');
});


