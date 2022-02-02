let btn = document.querySelector('.checkbtn');
let icon = document.querySelector('#icon');

btn.addEventListener('click', overflow);

function overflow() {

    let body = document.querySelector("body");

    if (body.classList.contains("overflowY")) {
        body.classList.remove("overflowY");
        icon.classList.remove("fa-times");
        icon.classList.add('fa-bars');
    } else {
        body.classList.add("overflowY");
        icon.classList.remove("fa-bars");
        icon.classList.add('fa-times');
    }
}