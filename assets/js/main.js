document.querySelectorAll('.navbar li a').forEach( e => {
    if(e.href == window.location.href) e.parentNode.classList.add('active');
});


const ulList = document.querySelector('.navbar .container ul');

document.querySelector('.btn.burger').addEventListener('click', () => {

    if(ulList.style.top == "90px"){
        ulList.style.top = "-1000px";
    } else {
        ulList.style.top = "90px";
    }
})


$("#phone").mask("+7 (999) 999-9999");