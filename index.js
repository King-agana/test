let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .flex .navbar')

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

function myFunction() {
    var x =
    document.getElementById("myInput");
    if (x.type ==="password") {
        x.type = "text";
    } else{
        x.type = "password";
    }
}