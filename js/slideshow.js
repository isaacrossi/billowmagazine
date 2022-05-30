const slides = document.querySelector(".holder")

let currentSlide = 0
let totalSlides = slides.childElementCount

function moveSlide(slide) {
  let leftPosition = (-slide * 100) + 'vw'
  slides.style.left = leftPosition
}

function nextSlide() {

  currentSlide = currentSlide + 1

  if (currentSlide >= totalSlides) {
    currentSlide = 0
  }

  moveSlide(currentSlide)
}

var previousSlide = function() {
  currentSlide = currentSlide - 1
  
  if (currentSlide < 0) {
    currentSlide = totalSlides -1
  }
 
  moveSlide(currentSlide)
}

document.addEventListener('click', function () {
  nextSlide()
  console.log(currentSlide)
})


