
// var UserInfo = {};

// // function f1(){
// //     hreff.href="Login_box.html"
// // }

// function Emailused4login() {
//     if(typeof(Storage) !== "undefined") {
//         // wrapping this in a try...catch block, incase cookies are disabled
//         // try {
//             // Attempt to pull UserInfo (by key) from localStorage, failure results
//         // in UserInfo being an empty object.
//             UserInfo = JSON.parse(localStorage.getItem('UsernameLogin')) || {};
//             // Now check if UserInfo is NOT set
//             if(!UserInfo.UsernameLogin){
//                 UserInfo.UsernameLogin = emailvalue.value;
//                 localStorage.setItem('UsernameLogin',JSON.stringify(UserInfo));
//                 displayemail = localStorage.getItem("UsernameLogin");

//                 function checkpassword(password){
//                     if(password.value == "password"){
//                         // alert("Login successfully")   
//                         location.href = "my-account.html";
//                     } else {
//                         alert("Wrong password!");
//                     }
//                 }
                
//             } else {
//                 // UserInfo was set, welcome them back
//                 displayemail = localStorage.getItem("UsernameLogin")
//                 location.href = "my-account.html";   
//             }
        
//         } else {
//             alert('Your browser does not support the localStorage method!');
//         }

    // } catch(err) {
    //     // Cookies are disabled, which threw an error, alert the user
    //     alert('To use localStorage, you need to enable cookies.');
    // }
// }



// localStorage initialization
if (localStorage.getItem("isLoggedIn") === null) {
    localStorage.setItem("isLoggedIn", "false");
}

const CORRECT_PWD = "password";
const LoginForm = document.getElementById("loginform");

// Check entered password with correct password
LoginForm.addEventListener("submit", function (event) {
    // Get email and password values, and wrong password message
    const ENTERED_EMAIL = LoginForm.username.value;
    const ENTERED_PWD = LoginForm.password.value;

    // Set email value as local storage item
    localStorage.setItem("email", ENTERED_EMAIL);

    if (ENTERED_PWD !== CORRECT_PWD) {
        // Display wrong password message
        alert("Wrong password!");
        event.preventDefault();   // Stop form from submitting
        return false;
    } else {
        // Set login status to 'true'
        localStorage["isLoggedIn"] = "true";
        return true;
    }
})



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


