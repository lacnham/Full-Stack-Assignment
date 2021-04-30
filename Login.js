var email = document.getElementById("email");
var password = document.getElementById("password");
    
function check(){
    if(password.value == "password"){
        // alert("Login successfully")
        window.open("google.com");
        return false;
    } else {
        alert("Wrong password!");
        window.location.replace("Login_box.html");
    }
}
