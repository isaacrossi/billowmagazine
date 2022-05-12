const email = document.querySelector("input.email")
const button = document.querySelector("input.button")
const message = document.querySelector("span.error-message")

function ValidateEmail(inputText) {

  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;



  if(inputText.value.match(mailformat)) {
    message.innerHTML = ""
    email.classList.remove("invalid")
    return true;
  } else {
      button.type = "button"
      message.innerHTML = "You have entered an invalid email"
      email.classList.add("invalid")
      return false;
    }
}

