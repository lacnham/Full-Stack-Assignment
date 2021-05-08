
// form.getElementById("submit").addEventListener('submit', function(e){
//     e.preventDefault();

//     contactform();
// });
var textarea = document.getElementById('description');
window.onload = textareaLengthCheck();
function textareaLengthCheck() {
    var textArea = textarea.value.length;
    var charactersLeft = 200 - textArea;
    document.getElementById("characterremaining").innerHTML = "Characters left: " + charactersLeft;
}
textarea.addEventListener('keyup', textareaLengthCheck, false);
textarea.addEventListener('keydown', textareaLengthCheck, false);
function checkphone(inputphone){
    var re =  /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{3,5}$/im;
    // var re=/^([0-9][-. ]?){1,}/;
    return re.test(inputphone);
  };
function checkemail(inputmail){
    var remail = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return remail.test(String(inputmail).toLowerCase());
};
function countletter(){
    var total=document.getElementById("description").value;
    total = total.replace(/\s/g, '');
    if (total.length <50){
        document.getElementById("characterremaining").innerHTML="You need more "+ total.length +" to submit";
    }else if ( total.length >= 50 && total.length <= 500 ){
    document.getElementById("characterremaining").innerHTML=total.length +"/500";}
}
function contactform() {
    var countfunction = 0;
    var total=document.getElementById("description").value;
    total = total.replace(/\s/g, '');
    var name = document.forms["contact"]["fullname"].value;
    var phone = document.forms["contact"]["phone"].value;
    var email = document.forms["contact"]["email"].value;
    if (name.length < 3) {
        document.getElementById("errorfullname").innerHTML ='Full Name must be over 3 characters';
        document.getElementById("successfullname").innerHTML ="";
    } else {
        document.getElementById("errorfullname").innerHTML ='';
        document.getElementById("successfullname").innerHTML ="Input OK";
        countfunction += 1;
    };
    if (!checkemail(email)){
        document.getElementById("erroremail").innerHTML = 'Invalid email address';
        document.getElementById("successemail").innerHTML ="";
    } else {
        document.getElementById("successemail").innerHTML = 'Input OK';
        document.getElementById("erroremail").innerHTML ="";
        countfunction += 1;
    if (!checkphone(phone)){
        document.getElementById("errorphone").innerHTML = 'Invalid phone number';
        document.getElementById("successphone").innerHTML ="";
    } else {
        document.getElementById("successphone").innerHTML = 'Input OK';
        document.getElementById("errorphone").innerHTML ="";
        countfunction += 1;
    };
    if ( ( document.getElementById("cphone").checked == false ) && ( document.getElementById("cemail").checked == false ) ){
        document.getElementById("errorradio").innerHTML = 'One option must be chosen';
        document.getElementById("successradio").innerHTML ="";
    } else {
        document.getElementById("successradio").innerHTML = 'Input OK';
        document.getElementById("errorradio").innerHTML ="";
        countfunction += 1;
    }
    if(total.length < 50){
        document.getElementById("errordescription").innerHTML = 'Do not reach the limit characters';
    }else if (total.length >= 500){
        document.getElementById("errordescription").innerHTML = 'You have reach the maximun characters';
    }else{
        document.getElementById("errordescription").innerHTML = '';
        countfunction +=1;
    };
    if (countfunction == 5 ){
        document.getElementById("preparesubmit").innerHTML = 'Please check your contact form again before submit';
        document.getElementById("submit").onclick= function() {
            location.href='receive.html';
        }
        };
    }; 
};

