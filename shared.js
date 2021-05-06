/**
 * Persistent log in features
 */
 if (localStorage["isLoggedIn"] === "true") {
    // Mobile menu display Logged In status
    // document.querySelector(".mobile-menu-my-account").setAttribute("style", "display: block;");
    // document.querySelector(".mobile-menu-login").setAttribute("style", "display: none;");

    // Check the login status and change Login field to 'My Account'
    const logoutBtn = document.getElementById("logoutBtn");

    if (logoutBtn) {
        logoutBtn.setAttribute("style", "display: block;");
    }

    // Redirect to My Account if the user is already logged in and tries to open either Login, Register, or Forgot Password
    let currentURL = window.location.href;
    if (
        currentURL.indexOf("Login_box.html") !== -1 ||
        currentURL.indexOf("register_acc.html") !== -1 ||
        currentURL.indexOf("forgotPass.html") !== -1
    ) {

        // Auto redirect to "My Account" if already logged in
        let myAccountURL = currentURL;
        myAccountURL = myAccountURL.replace("Login_box.html", "");
        myAccountURL = myAccountURL.replace("register_acc.html", "");
        myAccountURL = myAccountURL.replace("forgotPass.html", "");
        myAccountURL += "my-account.html";
        window.location.replace(myAccountURL);
    }
}


/**
 * Logout mechanism
 */
function logout() {
    localStorage["isLoggedIn"] = "false";
}
