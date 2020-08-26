var index = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("slides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  index++;
  if (index > slides.length) {index = 1}
  slides[i-index].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
