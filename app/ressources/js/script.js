let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navabar');

menu.onclick =() =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}