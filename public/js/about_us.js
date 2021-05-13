var nham_modal = document.getElementById("nham-modal-box")
var linh_modal = document.getElementById("linh-modal-box")
var nguyen_modal = document.getElementById("nguyen-modal-box")

// Get the element that opens the modal
var openModal1 = document.getElementById("openModal1");
var openModal1_2 = document.getElementById("openModal1_2"); 
var openModal2 = document.getElementById("openModal2");
var openModal2_2 = document.getElementById("openModal2_2"); 
var openModal3 = document.getElementById("openModal3");
var openModal3_2 = document.getElementById("openModal3_2"); 

// Get the element that closes the modal
var closeModal1 = document.getElementsByClassName("close1")[0];
var closeModal2 = document.getElementsByClassName("close2")[0];
var closeModal3 = document.getElementsByClassName("close3")[0];

// When the user clicks on More, open the modal 
openModal1.onclick = function nham(openbox) {
    nham_modal.style.display = "block";
}

openModal1_2.onclick = function nham(openbox) {
    nham_modal.style.display = "block";
}

openModal2.onclick = function linh(openbox) {
    linh_modal.style.display = "block";
}

openModal2_2.onclick = function linh(openbox) {
    linh_modal.style.display = "block";
}

openModal3.onclick = function nguyen(openbox) {
    nguyen_modal.style.display = "block";
}

openModal3_2.onclick = function nguyen(openbox) {
    nguyen_modal.style.display = "block";
}

// When the user clicks on X, close the modal
closeModal1.onclick = function nhamclose(closebox) {
    nham_modal.style.display = "none";
}

closeModal2.onclick = function linhclose(closebox) {
    linh_modal.style.display = "none";
}

closeModal3.onclick = function nguyenclose(closebox) {
    nguyen_modal.style.display = "none";
}

// When the user clicks outside of the modal, close it
window.onclick = function(event) {
    if (event.target == nham_modal || event.target == linh_modal || event.target == nguyen_modal) {
        nham_modal.style.display = "none";
        linh_modal.style.display = "none";
        nguyen_modal.style.display = "none";
    }
}
