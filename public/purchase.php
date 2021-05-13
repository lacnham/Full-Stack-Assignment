<?php require_once("../private/initialize.php"); ?>

<?php include(SHARED_PATH . "/mall_header.php"); ?>

<style>
    <?php include("stylesheet/test.css")?>
</style>

<?php $page_title="Order Placement"; ?>

<body class="bodyorder">
    <div class='smallcontainer order'>
        <table>
            <tr>
                <th class="ProductTitle">Product</th>
                <th class='ProductQuantities'>Quantity</th>
                <th class='ProductPrice'>Subtotal</th>
            </tr>
            
            <tr class='productbar' hidden>
                <td>
                    <div class='orderinfo'>
                        <img src='' alt='Image of a product'class='cartimg' width='150px'>
                        <div>
                            <p class="ProductTitle titleofproduct"></p>
                            <br>
                            <button class='RemoveProduct'>Remove</button>
                        </div>
                    </div>
                </td>
            
                <td>
                    <input class='quantites' type='number' value='1' min ='1' >
                </td>
                <td ><span class='ProductPrice price'></span></td>
            </tr>       
            
        </table>
        <p id='alertcartinfo' hidden> Your cart is empty now</p>
        <div class='total'>
            <div class='voucher'>
                <label class= 'voucher'>Voucher</label>
                <input class= 'voucher-box' type ='text'>
                <span class ='alertcoupon' hidden> Voucher can not be used</span>
                </div>
            <table>  
                <tr>
                    <td>Subtotal</td>
                    <td class='totalprice'></td>
                </tr>
                <tr>
                    <td>Discount</td>
                    <td class='discountprice'>0</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td class='finalprice'></td>
                </tr>
            </table>
            
        </div>
        <br>
        <div class='buttonshop'>
            <a href='store1.php'>
                <button class= 'buttonnham'>Continue Shopping</button>
            </a>    
            <button id ='buy'class= 'buttonnham' onclick = checkcoupon()>Order</button>
        </div>
    </div>
    
</body>


<?php include(SHARED_PATH . "/mall_footer.php"); ?>

<button id="up-arrow" onclick="topfunction()" title="Go to top"><i class="fa fa-arrow-circle-up"></i></button>
        
<script src="orderplacement.js"></script>
<script src="addtocart.js"></script>
<script type="text/javascript" src="shared.js"></script>