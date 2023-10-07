var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}
function currentSlide(n) {
    showSlides(slideIndex = n);
}
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += "active";
}



// Auto SLide

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 4000);
    // ganti gambar setiap 4 detik
}



let imageContainer = document.getElementById("container");
let overlay = document.getElementById("overlay");
let mouseoverlay = document.getElementById("mouse-overlay");

let events = {
    mouse: {
        move: "mousemove",
    },
    touch: {
        move: "touchmove"
    },
};
let deviceType = "touch";

function isTouchDevice() {
    try {
        deviceType = "touch";
        document.createEvent("TouchEvent");
        return true;
    } catch (e) {
        deviceType = "mouse";
        return false;
    }
}

const hideElement = () => {
    overlay.style.display = "none";
    mouseoverlay.style.display = "none";
}

isTouchDevice();
imageContainer.addEventListener(events[deviceType].move, (e) => {
    try {
        var x = !isTouchDevice() ? e.pageX : e.touches[0].pageX;
        var y = !isTouchDevice() ? e.pageY : e.touches[0].pageY;
    } catch (e) { }
    let imageWidth = imageContainer.offsetWidth;
    let imageHeight = imageContainer.offsetHeight;
    if (
        imageWidth - (x - imageContainer.offsetLeft) < 15 ||
        x - imageContainer.offsetLeft < 15 ||
        imageHeight - (y - imageContainer.offsetTop) < 15 ||
        y - imageContainer.offsetTop < 15
    ) {
        hideElement();

    } else {
        overlay.style.display = "block";
        mouseoverlay.style.display = "inline-block";
    }
    var posX = ((x - imageContainer.offsetLeft) /
        imageWidth).toFixed(4) * 100;
    var posY = ((x - imageContainer.offsetTop) /
        imageHeight).toFixed(4) * 100;

    overlay.style.backgroundPosition = posX + "%" + posY + "%";
    mouseoverlay.style.top = y + "px";
    mouseoverlay.style.left = x + "px";

})