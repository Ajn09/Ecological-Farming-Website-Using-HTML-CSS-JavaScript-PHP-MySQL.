const wrapper = document.querySelector('.wrapper');
const logLink = document.querySelector('.login-link');
const regisLink = document.querySelector('.regis-link');
const logPopup = document.querySelector('.log');
const iconClose= document.querySelector('.icon-close');

regisLink.addEventListener('click',()=>{
    wrapper.classList.remove('active');
});

logLink.addEventListener('click',()=>{
    wrapper.classList.add('active');
});
logPopup.addEventListener('click',()=>{
    wrapper.classList.add('active-popup');
});
iconClose.addEventListener('click',()=>{
    wrapper.classList.remove('active-popup');
});



