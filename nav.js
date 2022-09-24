const mainMenu = document.querySelector('ul');
const closeMenu = document.querySelector('.close-menu');
const openMenu = document.querySelector('.open-menu');

openMenu.addEventListener('click', show);
closeMenu.addEventListener('click', close);

//close menu when click
function show(){
    mainMenu.style.display = 'flex';
    mainMenu.style.top = '0';
}

function close(){
    mainMenu.style.top = '-100%';
} 
