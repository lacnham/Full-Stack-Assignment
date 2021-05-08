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

if (cart !=null){
    setinfoforproduct();
}

// function setinfoforproduct() {
//     let display_products = localStorage.getItem('cart');
//     display_products = JSON.parse(display_products);
//     let bar = document.querySelector('.productbar');
//     console.log(display_products);
//     if (display_products && bar){
//         bar.innerHTML=''
//         Object.values(display_products).map(item => {
//             bar.innerHTML +=`
//             <td>
//             <div class='orderinfo'>
//                 <img  src="${item.product_img}" alt='Image of a product'class='cartimg' width='150px'>
//                 <div>
//                     <p class="ProductTitle titleofproduct"></p>
//                     <br>
//                     <button class='RemoveProduct'onclick='remove()'>Remove</button>
//                 </div>
//             </div>
//         </td>
    
//         <td>
//             <input type='number' value='1' >
//         </td>
//         <td ><span class='ProductPrice price'>1</span></td>
//             `
//         });
//     }
// }

function remove() {
    var bar_to_remove = document.querySelector('.productbar');
    bar_to_remove.parentNode.removeChild(bar_to_remove);
    return false;
}

