/*document.getElementsByClassName("main-title")[0].style.color = "red";*/

document.getElementById("main-action").onclick = function () {
    document.getElementById("Cars").scrollIntoView({behavior: "smooth"});
}

var buttons = document.getElementsByClassName("car-button");
for (var i = 0; i < buttons.length; i++) {
    buttons[i].onclick = function () {
        document.getElementById("Prices").scrollIntoView({behavior: "smooth"});
    }
}


document.getElementById("Price-action").onclick = function () {
    if (document.getElementById("name").value === "") {
        alert("Заполните поле имени!");
    } else if (document.getElementById("phone").value === "") {
        alert("Заполните поле телефон!");
    } else if (document.getElementById("car").value === "") {
        alert("Выберите желаемое авто!");
    } else {
        alert("Спасибо за заявку, мы свяжемся с вами в ближайшее время!");
    }
}

document.addEventListener("DOMContentLoaded", function () {
    let layer = document.querySelector('.image');
    document.addEventListener('mousemove', (event) => {
        layer.style.transform = 'translate3d(' + ((event.clientX * 2) / 55) + 'px,' + ((event.clientY * 2) / 55) + 'px,0px)';
    });

    const elem = document.querySelector(".main");
    document.addEventListener('scroll', () => {
        elem.style.backgroundPositionX = '0' + (2 * window.pageYOffset) + 'px';
    })
});