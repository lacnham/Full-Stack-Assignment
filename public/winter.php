<?php require_once("../private/initialize.php"); ?>

<?php include(SHARED_PATH . "/mall_header.php"); ?>

<style>
    <?php include("stylesheet/product_page.css"); ?>
</style>

<?php $page_title="Winter Collection"; ?>


<body>
    <a href='store1.php'>
        <img class='logouniqlo' src='pics_nham/logo.jpg'>
    </a>
    <img src='pics_nham/winter.jpg' class='introimg'>
    <section class ="intro4">
        <h3 style="color:white" class =" title1">
            I N T R O D U C T I O N
        </h3>
        <p class ='note'style="color:white"> Bring you the Winter</p>
        <div class ='descriptionwinter'style="color:white">Winter - the coldest season of the year.
            We can both see winter as the coldest season and also the warmest season of the year.
             Warm because winter is the season when we spend time for ourselves and our family. For that reason,
              our winter collection is minimalistic yet warm collection. Outfits this time help you becometrendy but
               not forget the priority -  protecting users against the cold of winter.
               
        </div>
        

    </section>
    <p class='titlewinter'>PRODUCTS</p>
    <section class='product_display'>
        <div class='pic_product_display'>
            <a class="pro" href="detailpage.php">
                <img class='pic' src="pics_nham/winter1.jpg" alt="Winter Collection" width="340" height="470" >
                <p>Overcoat</p><br>
                <p class='price'>650.000 VNĐ</p>
            </a>
        </div>
        <div class='pic_product_display'>
            <a class="pro" href="detailpage2.php">
                <img class='pic' src="pics_nham/winter2.jpg" alt="Winter Collection" width="340" height="470" >
                <p>Down Jacket</p> <br>
                <p class='price'>550.000 VNĐ</p>
            </a>
        </div>
        <div class='pic_product_display'>
            <a class="pro" href="detailpage2.php">
                <img class='pic' src="pics_nham/winter3.1.jpg" alt="Winter Collection" width="340" height="470"  >
                <p>Grey-Blue Overcoat</p> <br>
                <p class='price'>500.000 VNĐ</p>
            </a>
        </div>
        <div class='pic_product_display'>
            <a class="pro" href="detailpage.php">
                <img class='pic' src="pics_nham/winter4.jpg" alt="Winter Collection" width="340" height="470"  >
                <p>Trench Jacket</p> <br>
                <p class='price'>500.000 VNĐ</p>
            </a>
        </div>
    </section>
</body>

<?php include(SHARED_PATH . "/mall_footer.php"); ?>

<button id="up-arrow" onclick="topfunction()" title="Go to top"><i class="fa fa-arrow-circle-up"></i></button>
    <script type="text/javascript" src="shared.js"></script>