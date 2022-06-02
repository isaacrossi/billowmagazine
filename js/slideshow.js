const slides = document.querySelector(".holder")
const slideChanger1 = document.querySelector(".slide-changer1")
const slideChanger2 = document.querySelector(".slide-changer2")
const slideChanger3 = document.querySelector(".slide-changer3")

let currentSlide = 0
let totalSlides = slides.childElementCount

function moveSlide(slide) {
  let leftPosition = (-slide * 100) + 'vw'
  slides.style.left = leftPosition

  let slideNumber = slide
  if (slideNumber === 1) {
    slideChanger1.classList.remove("fill")
    slideChanger2.classList.add("fill")
  } else if (slideNumber === 2)  {
    slideChanger2.classList.remove("fill")
    slideChanger3.classList.add("fill")
  } else {
    slideChanger3.classList.remove("fill")
    slideChanger1.classList.add("fill")
  }
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
  console.log(slides)
})



