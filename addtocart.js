// Load product information in preparation of adding to cart
let product_ID = window.location.pathname.split('/');
product_ID = product_ID[product_ID.length - 1];
let product_link = window.location.href;
let product_name = document.querySelector('.col2 h1').innerHTML;
let product_price = document.querySelector('.col2 h4').innerHTML.slice(0,6);
let product_pic = document.querySelector('.col2 img').src ;
let Product_Detail = {
    'productID' : product_ID,
    'productlink': product_link,
    'productname': product_name,
    'productprice': product_price,
    'productpic' : product_pic,
    'quantity': 1
};

console.log(Product_Detail);

alertcart = document.getElementById('notice')
// Add to cart implementation
const ADD_TO_CART = document.getElementById("add-to-cart");
ADD_TO_CART.addEventListener("click", function () {
    notice.innerHTML = 'ITEM HAS BEEN ADD TO CART';
    let cart = localStorage.cart;
    if (cart === undefined) {
        // Create a new cart in memory
        cart = [Product_Detail];
    } else {
        // Load the existing cart in localStorage into memory
        cart = JSON.parse(cart);

        // Check if product already exists in the cart
        let productCartIndex = -1;  // Default -1 if product does not exist in cart
        for (let index = 0; index < cart.length; index++) {
            if (cart[index].productID === Product_Detail.productID) {
                productCartIndex = index;
                break;
            }
        }

        // Update the cart
        if (productCartIndex === -1) {
            cart.push(Product_Detail);
        } else {
            cart[productCartIndex].quantity++;
        }
    }

    // Save everything in memory back to localStorage
    localStorage.setItem("cart", JSON.stringify(cart));
});

