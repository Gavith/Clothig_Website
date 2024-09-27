
// ------------------- Form script ---------------------------

// Select login button using JavaScript querySelector
let loginButton = document.querySelector("#btn");
let head = document.querySelector("header");
let htext = document.querySelector(".hero-text");
let himg = document.querySelector(".hero-image");
let icon = document.querySelector("#cls");
let form = document.querySelector("form");


// Add click event listener to the login button
loginButton.addEventListener('click', function() {
    htext.style.filter = "blur(10px)";
    himg.style.filter = "blur(10px)";
    head.style.filter = "blur(10px)";
    form.style.opacity = "1";/* Make it visible */
    form.style.visibility = "visible";/* Allow interaction */
    form.style.transition  = "opacity 0.5s ease, visibility 0s";/* Reset transition for visibility */
});

// close btn styles
icon.addEventListener('click', function(){
    htext.style.filter = "none";
    himg.style.filter = "none";
    head.style.filter = "none";
    form.style.opacity = "0";
    form.style.visibility = "hidden";
});
