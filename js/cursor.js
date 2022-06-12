const cursorTag = document.querySelector("div.cursors")
const ball = cursorTag.querySelector("div")
const cursorMessage = cursorTag.querySelector("div span")
const anchorTags = document.querySelectorAll("a[data-hover]")

document.addEventListener("mousemove", function(event) {
  ball.style.left = event.pageX + "px"
  ball.style.top = event.pageY + "px"
})

anchorTags.forEach(tag => {
  tag.addEventListener("mouseover", function () {
    ball.classList.add("visible")
    cursorMessage.innerHTML = tag.getAttribute("data-hover")
    anchorTags.style.cursor = "none"
  })

  tag.addEventListener("mouseout", function () {
    ball.classList.remove("visible")
  })

})