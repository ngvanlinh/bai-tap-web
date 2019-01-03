var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("show-slide");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
document.getElementById("dn").addEventListener("click", function(){
    document.getElementsByClassName("login")[0].style.display = ("block");
    document.getElementsByClassName("login")[1].style.display = ("none");
})
document.getElementById("dk").addEventListener("click", function(){
    document.getElementsByClassName("login")[0].style.display = ("none");
    document.getElementsByClassName("login")[1].style.display = ("block");
})
var close = document.getElementsByClassName("close");
for(var i = 0; i < close.length; i ++)
    {
        close[i].addEventListener("click", function(){
            document.getElementsByClassName("login")[0].style.display = ("none");
            document.getElementsByClassName("login")[1].style.display = ("none");
        })
    }