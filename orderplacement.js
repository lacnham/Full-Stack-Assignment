let voucherused = 0;
let totalPrice = 0;
localStorage.setItem("voucherused",voucherused);
localStorage.setItem("totalPrice",totalPrice);
const noproduct = document.getElementById("alertcartinfo");
const productbar = document.querySelector(".productbar");
let producttitle = document.querySelector('.titleofproduct');
let productprice = document.querySelector('.price');

// Load cart from localStorage to memory
let cart = localStorage.getItem("cart");
cart = JSON.parse(cart);

if (cart === null || cart.length === 0) {
    noproduct.removeAttribute("hidden");
} else {

    for (let index = 0; index < cart.length; index++) {
        let newProductBar = productbar.cloneNode(true);
        newProductBar.removeAttribute("hidden");
        productbar.parentElement.appendChild(newProductBar);
    }
}



if (localStorage.getItem("cart") === "{}") {
    localStorage.removeItem("cart")
}


