let slideIn = 1;
showSlides(slideIn);

function plusSlides(n) {
  showSlides(slideIn += n);
}

function currentSlide(n) {
  showSlides(slideIn = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIn = 1}    
  if (n < 1) {slideIn = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIn-1].style.display = "block";  
  dots[slideIn-1].className += " active";
}