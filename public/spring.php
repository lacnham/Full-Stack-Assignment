<?php require_once("../private/initialize.php"); ?>

<?php include(SHARED_PATH . "/mall_header.php"); ?>

<style>
    <?php include("stylesheet/product_page.css"); ?>
</style>

<?php $page_title="Spring Collection"; ?>

<body>
    <a href='store1.php'>
        <img class='logouniqlo' src='pics_nham/logo.jpg'>
    </a>
    <img src='pics_nham/Spring-Background-HD-Wallpapers-61991.jpg' class='introimg'>
    <section class ="intro1">
        <h3 style="color:white" class =" title1">
            I N T R O D U C T I O N
        </h3>
        <p class = 'note' style="color:white"> Bring you the Spring </p>
        <p class = ' descriptionspring'style="color:white"> Spring - the season of hope and dreams.
            Our Spring Collection will give you a completely difference and fresh feeling. With
             designs that we have spent a lot of time and effort, this collection promises to help 
             you to stand out and be more alive than ever. </p>

    </section>
    <p class='titlespring'>PRODUCTS</p>
    <section class='product_display'>
        <div class='pic_product_display'>
            <a class="pro" href="detailpage.php">
                <img class='pic' src="pics_nham/spring1.jpg" alt="Spring Collection" width="340" height="470" >
                <p>Tan Pants</p><br>
                <p class='price'>400.000 VNĐ</p>
            </a>
        </div>
        <div class='pic_product_display'>
            <a class="pro" href="detailpage.php">
                <img class='pic' src="pics_nham/spring2.jpg" alt="Spring Collection" width="340" height="470" >
                <p>Pink Sweater</p> <br>
                <p class='price'>300.000 VNĐ</p>
            </a>
        </div>
        <div class='pic_product_display'>
            <a class="pro" href="detailpage2.php">
                <img  class='pic' src="pics_nham/spring3.jpg" alt="Spring Collection" width="340" height="470"  >
                <p>T - Shirt</p> <br>
                <p class='price'>350.000 VNĐ</p>
            </a>
        </div>
        <div class='pic_product_display'>
            <a class="pro" href="detailpage2.php">
                <img   class='pic' src="pics_nham/spring4.jpg" alt="Spring Collection" width="340" height="470"  >
                <p>Green Cardigan</p> <br>
                <p class='price'>350.000 VNĐ</p>
            </a>
        </div>
    </section>
</body>

<?php include(SHARED_PATH . "/mall_footer.php"); ?>
<button id="up-arrow" onclick="topfunction()" title="Go to top"><i class="fa fa-arrow-circle-up"></i></button>
<script type="text/javascript" src="shared.js"></script>

