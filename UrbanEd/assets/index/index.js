let currentIndex = 0;
const slides = document.querySelectorAll(".slide-show");
const track = document.querySelector(".slides-track");

function nextSlide() {
  const slidesToShow = window.innerWidth <= 982 ? 1 : 2;
  const slideWidth = slides[0].offsetWidth + 20; 
  const maxIndex = slides.length - slidesToShow;

  if (currentIndex < maxIndex) {
    currentIndex++;
  } else {
    currentIndex = 0;
  }

  track.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
}
