function logout() {
    localStorage["LogInState"] = "notLoggedIn";
}

// Scroll to top button
function topfunction(){
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

var logoutBtn = document.getElementById("logoutBtn");
var cicrle_logoutbtn = document.getElementById("cicrle_logoutbtn");
var Account_Signin = document.getElementById("Account_Signin");

// If User Logged In
if (localStorage["LogInState"] === "LoggedIn") {
    // display LOGOUT button
    logoutBtn.setAttribute("style", "display: block;") &&
    cicrle_logoutbtn.setAttribute("hidden");
    // change SIGNIN button into ACCOUNT button
    Account_Signin.innerHTML = "My Account"; 
    
    // if user trying to access "login/register/forgotPassword page" even though they have logged in
    // navigate the user to my account page 
    let theURL = window.location.href; 
    if(
        theURL.search("Login_box.html") !== -1 ||
        theURL.search("register_acc.html") !== -1 ||
        theURL.search("forgotPass.html") !== -1 
        
    ){
        let myaccountURL = theURL;
        myaccountURL.replace("Login_box.html", "");
        myaccountURL.replace("register_acc.html", "");
        myaccountURL.replace("forgotPass.html", "") ;
        myaccountURL = myaccountURL + "my-account.html";
        window.location.replace(myaccountURL);
    }
}
