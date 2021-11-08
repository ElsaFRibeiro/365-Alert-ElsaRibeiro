// variable to select the navigation menu
const navtwo = document.querySelector('#navigation-short');

// variable to select the navigation button (hamburguer)
const buttontwo = document.querySelector('#action')

// function to toggle the class of opened on the menu to move hide/show it
function open() {
    navtwo.classList.toggle('opened');
}
buttontwo.addEventListener('click', open);