<?php require_once("../private/initialize.php"); ?>

<?php include(SHARED_PATH . "/mall_header.php"); ?>

<style>
    <?php include("stylesheet/product_page.css"); ?>
</style>

<body>
    <a href='store1.php'>
        <img class='logouniqlo' src='pics_nham/logo.jpg'>
    </a>
    <img src='pics_nham/casual.jpg' class='introimg'>
    <section class ="intro5">
        <h3 style="color:white" class =" title1">
            I N T R O D U C T I O N
        </h3>
        <p class ='note'style="color:white">Casual and formal</p>
        <p class ='descriptioncasual'style="color:white">With the aim
             of creating products with a minimalist style as our brand, 
             this collection was born. This collection is comfortable, at the same
              time elegant and minimalistic. This collection can help you impress with family, friends
               and even at work. Needless to say too much, please scroll down to be able to see more clearly 
               these products.</p>
    </section>
    <p class='titlecasual'>PRODUCTS</p>
    <section class='product_display'>
        <div class='pic_product_display'>
            <a class="pro" href="detailpage.php">
                <img class='pic' src="pics_nham/casual1.jpg" alt="Casual Collection" width="340" height="470" >
                <p>White Long Coat</p>
                <p class='price'>500.000 VNĐ</p>
            </a>
        </div>
        <div class='pic_product_display'>
            <a class="pro" href="detailpage2.php">
                <img class='pic' src="pics_nham/casual3.jpg" alt="Casual Collection" width="340" height="470" >
                <p>Deep Blue Pants</p> 
                <p class='price'>400.000 VNĐ</p>
            </a>
        </div>
        <div class='pic_product_display'>
            <a class="pro" href="detailpage2.php">
                <img class='pic' src="pics_nham/casual2.jpg" alt="Casual Collection" width="340" height="470"  >
                <p>Sweater</p> 
                <p class='price'>350.000 VNĐ</p>
            </a>
        </div>
        <div class='pic_product_display'>
            <a class="pro" href="detailpage.php">
                <img class='pic' src="pics_nham/casual4.jpg" alt="Casual Collection" width="340" height="470"  >
                <p>White Long Skirt</p> 
                <p class='price'>350.000 VNĐ</p>
            </a>
        </div>
    </section>
</body>

<?php include(SHARED_PATH . "/mall_footer.php"); ?>

<button id="up-arrow" onclick="topfunction()" title="Go to top"><i class="fa fa-arrow-circle-up"></i></button>
<script type="text/javascript" src="shared.js"></script>