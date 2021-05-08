// Get input email from localStorage
const LoginEmail = localStorage.getItem("email");

// Get email from my-account page
const userEmail = document.getElementById("DisplayEmail");

// Change email field to input email 
userEmail.innerHTML = LoginEmail;

// Redirect the user back to Login page if the user hasn't logged in
if (localStorage.LogInState === null || localStorage.LogInState === "notLoggedIn") {
    let url = window.location.href;
    url = url.replace("my-account.html", "Login_box.html");
    window.location.replace(url);
}