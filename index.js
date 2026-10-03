const toggleButton = document.getElementById("toggle-Btn");
const sideBar = document.getElementById("sideBar");

function toggleSideBar(){
    sideBar.classList.toggle('close');
    toggleButton.classList.toggle('rotate');

    Array.from(sideBar.getElementsByClassName('show')).forEach(ul => {
    ul.classList.remove('show');
    ul.previousElementSibling.classList.remove('rotate');
    })
}


function toggleSubMenu(button){
    button.nextElementSibling.classList.toggle('show');
    button.classList.toggle('rotate');

    if(sideBar.classList.contains('close')){
        sideBar.classList.remove('close');
        toggleButton.classList.remove('rotate');
    }
}
