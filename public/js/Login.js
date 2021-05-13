// set "states" for localStorage
if (localStorage.getItem("LogInState") === null) {
    localStorage.setItem("LogInState", "notLoggedIn");
}

const LoginForm = document.getElementById("loginform");

// Check entered password with correct password
LoginForm.addEventListener("submit", function (event) {
    // Get email and password values, and message for wrong password in Log in Page
    const Inputted_Email = document.getElementById("email").value;
    const Inputted_Password = document.getElementById("password").value;
    const WrgPassMsg = document.querySelector(".pass_error");


    // Set email value as local storage item
    localStorage.setItem("email", Inputted_Email);

    if (Inputted_Password !== "password") {
        // Display wrong password message
        WrgPassMsg.setAttribute("style", "display: block");
        event.preventDefault();   // Stop form from submitting
        return false;
    } else {
        // Set login status to 'true'
        localStorage["LogInState"] = "LoggedIn";
        return true;
    }
})

