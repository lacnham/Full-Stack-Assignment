var emailvalue = document.getElementById("email");
var password = document.getElementById("password");
var displayemail = document.getElementById("DisplayEmail").value;    
var inputEmail;
var hreff = document.getElementById("hreff");
var UserInfo = {};

// function f1(){
//     hreff.href="Login_box.html"
// }

function Emailused4login() {
    if(typeof(Storage) !== "undefined") {
        // wrapping this in a try...catch block, incase cookies are disabled
        try {
            // Attempt to pull UserInfo (by key) from localStorage, failure results
        // in UserInfo being an empty object.
            UserInfo = JSON.parse(localStorage.getItem('UsernameLogin')) || {};
            // Now check if UserInfo is NOT set
            if(!UserInfo.UsernameLogin){
                hreff.href="Login_box.html"; 
                function check(){
                    if(password.value == "password"){
                        // alert("Login successfully")
                        UserInfo.UsernameLogin = emailvalue.value;
                        localStorage.setItem('UsernameLogin',JSON.stringify(UserInfo));
                        displayemail = localStorage.getItem("UsernameLogin")
                        window.location.href = "my-account.html";
                    } else {
                        alert("Wrong password!");
                    }
                }
                       
            } else {
                // UserInfo was set, welcome them back
                displayemail = localStorage.getItem("UsernameLogin")
                window.location.href = "my-account.html";   
            }
        } else {
            alert('Your browser does not support the localStorage method!');
        }

    } catch(err) {
        // Cookies are disabled, which threw an error, alert the user
        alert('To use localStorage, you need to enable cookies.');
    }
}

// function check(){
//     if(password.value == "password"){
//         // alert("Login successfully")
//         UserInfo.UsernameLogin = emailvalue.value;
//         localStorage.setItem('UsernameLogin',JSON.stringify(UserInfo));
//         displayemail = localStorage.getItem("UsernameLogin")
//         window.location.href = "my-account.html";
//     } else {
//         alert("Wrong password!");
//     }
// }

//       if (localStorage.clickcount < 1) {
//         window.location.href = "Login_box.html";
//       } else {
//         localStorage.clickcount = 1;
//       }
//       document.getElementById("result").innerHTML = "You have clicked the button " + localStorage.clickcount + " time(s).";
//     } else {
//       document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
//     }
//   }

