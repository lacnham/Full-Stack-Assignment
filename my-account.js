// Get entered email on login page from local storage
const USER_EMAIL = localStorage.getItem("email");

// Get email element from my-account page
const LOGIN_EMAIL = document.getElementById("DisplayEmail");

// Change email field to entered email value
LOGIN_EMAIL.innerHTML = USER_EMAIL;

// Redirect the user back to Login page if the user hasn't logged in
if (localStorage.isLoggedIn === null || localStorage.isLoggedIn === "false") {
    let url = window.location.href;
    url = url.replace("my-account.html", "Login_box.html");
    window.location.replace(url);
}
