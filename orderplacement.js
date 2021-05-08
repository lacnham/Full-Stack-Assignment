const noproduct = document.getElementById("alertcartinfo");
const productbar = document.querySelector(".productbar");
let producttitle = document.querySelector('.titleofproduct');
let productprice = document.querySelector('.price');

if (localStorage.getItem("cartProducts") === "{}") {
    localStorage.removeItem("cartProducts")
}
// Load cart from localStorage to memory
let cart = localStorage.getItem("cart");
cart = JSON.parse(cart);

if (cart === null || cart.length === 0) {
    noproduct.removeAttribute("hidden");
} else {
    for (let index = 0; index < cart.length; index++) {
        let newProductBar = productbar.cloneNode(true);
        newProductBar.removeAttribute("hidden");
        let subtotal = cart[index].productprice*cart[index].quantity;
        newProductBar.querySelector(".cartimg").src = cart[index].productpic;
        newProductBar.querySelector(".ProductTitle").innerHTML = cart[index].productname;
        newProductBar.querySelector("td input").value = cart[index].quantity;
        newProductBar.querySelector(".ProductPrice").innerHTML = subtotal + " VND";

        
        productbar.parentElement.appendChild(newProductBar);;       
    }
}

//Total Price count
let totalPrice = 0;
for ( let index = 0; index < cart.length; index++){
    let subtotal = cart[index].productprice*cart[index].quantity;
    totalPrice += parseInt(subtotal); 
}
const changeprice = document.querySelector('.totalprice');
changeprice.textContent = totalPrice +'VND';
localStorage.setItem("totalPrice",totalPrice);


let discount = 0;
localStorage.setItem("discountprice",discount);
let finalprice = 0;
finalprice = totalPrice + discount;
localStorage.setItem("finalPrice",finalprice);

const set_final_price = document.querySelector('.finalprice');
set_final_price.textContent = finalprice +'VND';

function checkcoupon(){
    var discountchange = document.querySelector('.discountprice');
    var recheckcoupon = document.querySelector('.alertcoupon');
    var coupon= document.querySelector('.voucher-box').value;
    if (coupon.length <=0){
        count = 1;
    } else if (coupon =='COSC2430-HD'){
        discount = totalPrice * 20 / 100;
        discountchange.innerHTML = discount +'VND';
        finalprice = totalPrice - discount;
        set_final_price.innerHTML = finalprice +'VND';
        count = 1;
    } else if (coupon == 'COSC2430-DI' ){
        discount = totalPrice * 10 / 100;
        discountchange.innerHTML = discount +'VND';
        finalprice = totalPrice - discount;
        set_final_price.innerHTML = finalprice +'VND';
        count = 1;
    } else{
        recheckcoupon.removeAttribute("hidden")
    };
    if (count ==1){
        document.getElementById("buy").onclick= function() {
            location.href='thankyou.html'}};
}



let deleteitems = document.querySelectorAll(".RemoveProduct");
deleteitems.forEach(function (item, index){
    item.addEventListener('click', function(){
    let cart = localStorage.getItem('cart');
    cart = JSON.parse(cart);

    cart.splice(index -1, 1);
    localStorage.setItem('cart', JSON.stringify(cart));
    window.location.reload();
})
})

