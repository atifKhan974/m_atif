let closeIcon = document.querySelector(".close");
let menu = document.querySelector(".menu");
let header = document.querySelector(".header");

closeIcon.addEventListener("click", () => {
    header.style.left = "-500px"

})

menu.addEventListener("click", () => {
    header.style.left = "0px"
    // menu.style.display = "none"
})


let thumbnails = document.querySelectorAll(".thumbnails");
let bg = document.querySelector(".bg");
let imagesContainer = document.querySelector(".imagesContainer");
let shuffleImg = document.querySelector(".shuffleImg");
let bgImage = document.querySelector(".bgImage");

// document.location.reload();
thumbnails.forEach(element => {
    element.addEventListener("click", () => {
        bgImage.style.display = "none"
        imagesContainer.append()
        shuffleImg.src = element.src;
        shuffleImg.style.display = "block";
    })
});