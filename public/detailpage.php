
<?php require_once("../private/initialize.php"); ?>

<?php include(SHARED_PATH . "/mall_header.php"); ?>

<style>
    <?php include("stylesheet/test.css")?>
</style>

<?php $page_title="UNIQLO"; ?>

<body>
    <a href='store1.php'>
        <img class='logouniqlo' src='pics_nham/logo.jpg'>
    </a>
    <div class='smallcontainer detailproduct'>
        <div class='rowwf'>
            <div class="col2">
                <img src="pics_nham/autumn1.jpg" alt='Autumn collection' width='400px;'>
            </div>
            <div class="col2">
                <p>Home/ Jacket</p>
                <h1>Kaki Jacket</h1>
                <h4>450000 VND</h4>
            
                <button class='addtocart' id='add-to-cart'>Add to Cart
                </button>
                <p id='notice'></p>
                <h2>Product Details 
                </h2>
                <br>
                <p>
                    Selected High Quality Wool: We use 80% wool fabrics.
                        Soft, smooth, breathable. Our coat features a classic 
                        big hood, windproof zipper, 2 inner pockets and 2 side
                        zip pockets. The overall sense of design is strong and
                        stylish. Wearing is also very comfortable and it gives 
                        you a cool looking. Advanced and reliable fabric can keep 
                        you warm enough in cold weather.
                </p>
            </div>
        </div>
    </div>
    <div class='smallcontainer'>
        <div class = 'roww'>
            <h3 class='moreproduct'>More products in season</h3>
            <section class='product_display'>
                <div class='pic_product_display'>
                    <a class="pro" href="detailpage.php">
                        <img  class='pic' src="pics_nham/autumn1.jpg" alt="Autumn Collection" width="340" height="470" >
                        <p>Kaki Jacket</p><br>
                        <p class='price'>450.000 VNĐ</p>
                    </a>
                </div>
                <div class='pic_product_display'>
                    <a class="pro" href="detailpage.php">
                        <img class='pic' src="pics_nham/autumn2.jpg" alt="Autumn Collection" width="340" height="470" >
                        <p>Brown Jacket</p> <br>
                        <p class='price'>350.000 VNĐ</p>
                    </a>
                </div>
                <div class='pic_product_display'>
                    <a class="pro" href="detailpage.php">
                        <img class='pic' src="pics_nham/autumn3.jpg" alt="Autumn Collection" width="340" height="470"  >
                        <p>Deep Blue Trench Jacket</p> <br>
                        <p class='price'>650.000 VNĐ</p>
                    </a>
                </div>
                <div class='pic_product_display'>
                    <a class="pro" href="detailpage.php">
                        <img class='pic' src="pics_nham/autumn4.jpg" alt="Autumn Collection" width="340" height="470"  >
                        <p>Dark Brown Jacket</p> <br>
                        <p class='price'>400.000 VNĐ</p>
                    </a>
                </div>
            </section>
        </div>
    </div>
</body>

<button id="up-arrow" onclick="topfunction()" title="Go to top"><i class="fa fa-arrow-circle-up"></i></button>
<script src="addtocart.js"></script>
<script type="text/javascript" src="shared.js"></script>

<?php include(SHARED_PATH . "/mall_footer.php"); ?>