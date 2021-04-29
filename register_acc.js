var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var specialChar = document.getElementById("specialChar")
var length = document.getElementById("length");
var confirm_password = document.getElementById('re_pass');

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}
  
// When the user's mouse is outside the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

myInput.onkeyup = function() {
    // Validate lowercase letters
    var lowercaseLetters = /[a-z]/g;
    if(myInput.value.match(lowercaseLetters)) {
        letter.classList.remove("invalid");
        letter.classList.add("valid");
      } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
    }

    // Validate uppercase letters
    var uppercaseLetters = /[A-Z]/g;
    if(myInput.value.match(uppercaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
      } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
    }

  // Validate numbers
    var numbers = /[0-9]/g;
    if(myInput.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
      } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
    }

  // Validate Special Character
    var specialcharaters = /.*[!@#$%^&*]/g;
    if(myInput.value.match(specialcharaters)) {
        specialChar.classList.remove("invalid");
        specialChar.classList.add("valid");
      } else {
        specialChar.classList.remove("valid");
        specialChar.classList.add("invalid");
    }

  // Validate length
    if(8 <= myInput.value.length && myInput.value.length <= 20) {
        length.classList.remove("invalid");
        length.classList.add("valid");
      } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
        }
}

// Confirm Password
function matchPassword() {
  if (myInput.value != confirm_password.value) {
      confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
      confirm_password.setCustomValidity("");
  }
}

myInput.onchange = matchPassword;
confirm_password.onkeyup = matchPassword;


// Show Store Owner's input information if choose Store owner radio
function acctype(){
    if (document.getElementById("storeowner").checked) {
        document.getElementById("ifOwner").style.display = "block";
    } else {
        document.getElementById("ifOwner").style.display = "none";
    }
}  

// Toggle Password Visibility
var state = false;
  function toggleEye(){
      if(state){
          document.getElementById("psw").setAttribute("type", "password");
          document.getElementById("eye").style.color = "#7a797e";
          state = false;
      } else {
          document.getElementById("psw").setAttribute("type", "text");
          document.getElementById("eye").style.color = "#5887ef";
          state = true;
      }
  }

  function toggleEye2(){
    if(state){
        document.getElementById("re_pass").setAttribute("type", "password");
        document.getElementById("eye2").style.color = "#7a797e";
        state = false;
    } else {
        document.getElementById("re_pass").setAttribute("type", "text");
        document.getElementById("eye2").style.color = "#5887ef";
        state = true;
    }
}

