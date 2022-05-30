const email = document.querySelector("input.email")
const button = document.querySelector("input.button")
const message = document.querySelector("span.form-message")

function ValidateEmail(inputText) {

  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;



  if(inputText.value.match(mailformat)) {
    message.innerHTML = "Thanks for signing up!"
    message.classList.remove("bad")
    message.classList.add("good")
    email.classList.remove("invalid")
    return true;
  } else {
      message.innerHTML = "You have entered an invalid email"
      message.classList.remove("good")
      message.classList.add("bad")
      email.classList.add("invalid")
      return false;
    }
}

