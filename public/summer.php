<?php require_once("../private/initialize.php"); ?>

<?php include(SHARED_PATH . "/mall_header.php"); ?>

<style>
    <?php include("stylesheet/product_page.css"); ?>
    <?php include("stylesheet/test.css")?>
</style>

<?php $page_title="Summer Collection"; ?>

<body>
    <a href='store1.php'>
        <img class='logouniqlo' src='pics_nham/logo.jpg'>
    </a>
    <img src='pics_nham/amazing-sunset-wallpaper-8.jpg' class='introimg'>
    <section class ="intro2">
        <h3 style="color:white" class =" title1">
            I N T R O D U C T I O N
        </h3>
        <p class = 'note'style="color:white"> Bring you the Summer</p>
        <p class = ' descriptionsummer'style="color:white">Summer – the warmest season of the year.
             Amongs our five launch collections this time, summer is a pretty striking one. 
             These designs help you become more active for an energetic summer. Do not be afraid
              of heat, these designs have been selected by us the most comfortable fabrics, helping you to have a stylish summer.</p>
    </section>
    <p class='titlesummer'>PRODUCTS</p>
    <section class='product_display'>
        <div class='pic_product_display'>
            <a class="pro" href="detailpage.php">
                <img class='pic' src="pics_nham/summer1.jpg" alt="Summer Collection" width="340" height="470" >
                <p>Yellow Sweater</p><br>
                <p class='price'>350.000 VNĐ</p>
            </a>
        </div>
        <div class='pic_product_display'>
            <a class="pro" href="detailpage2.php">
                <img class='pic' src="pics_nham/summer2.jpg" alt="Summer Collection" width="340" height="470" >
                <p>Dress</p> <br>
                <p class='price'>600.000 VNĐ</p>
            </a>
        </div>
        <div class='pic_product_display'>
            <a class="pro" href="detailpage2.php">
                <img class='pic' src="pics_nham/summer3.jpg" alt="Summer Collection" width="340" height="470"  >
                <p>Grey Jacket</p> <br>
                <p class='price'>550.000 VNĐ</p>
            </a>
        </div>
        <div class='pic_product_display'>
            <a class="pro" href="detailpage.php">
                <img class='pic' src="pics_nham/summer4.jpg" alt="Summer Collection" width="340" height="470"  >
                <p>Flower Pattern Dress</p><br> 
                <p class='price'>650.000 VNĐ</p>
            </a>
        </div>
    </section>
</body>

<?php include(SHARED_PATH . "/mall_footer.php"); ?>
<button id="up-arrow" onclick="topfunction()" title="Go to top"><i class="fa fa-arrow-circle-up"></i></button>
<script type="text/javascript" src="shared.js"></script>

