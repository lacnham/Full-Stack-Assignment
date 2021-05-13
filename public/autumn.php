<!-- <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autumn Collection</title>
    <link rel='stylesheet' href='css_uniqlo/product_page.css'>
    <link rel='stylesheet' href='css_uniqlo/css.css'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="homepage_2.css" type="text/css" rel="stylesheet">
    <link href="homepage_2_2.css" type="text/css" rel="stylesheet">
    <link href="css.css" type="text/css" rel="stylesheet">
    <link href="css2.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">        
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <script src="https://kit.fontawesome.com/e1571d95d8.js" crossorigin="anonymous"></script>
</head> -->

<?php require_once("../private/initialize.php"); ?>

<?php include(SHARED_PATH . "/mall_header.php"); ?>

<style>
    <?php include("stylesheet/product_page.css"); ?>
    <?php include("stylesheet/cookie-message.css"); ?>
</style>

<body>
<a href='store1.php'>
    <img class='logouniqlo' src='pics_nham/logo.jpg'>
</a>
<img src='pics_nham/autumn.jpg' class='introimg'>
<section class ="intro3">
    <h3 style="color:white" class =" title1">
        I N T R O D U C T I O N
    </h3>
    <p class='note'style="color:white"> Bring you the Autumn</p>
    <p style="color:white" class='descriptionautumn' > Autumn - the love season. Autumn always 
        brings us a feeling of warmth and comfort. For this reason, in our fall
            2021 collection designs, outfits are designed with a simple yet warm tone.
            Although simple, the outfits this time still fully express the soul of Autumn,
            and can keep the user warm.</p>
</section>
<p class='titleautumn'>PRODUCTS</p>
<section class='product_display'>
    <div class='pic_product_display'>
        <a class="pro" href="detailpage.php">
            <img  class='pic' src="pics_nham/autumn1.jpg" alt="Autumn Collection" width="340" height="470" >
            <p>Kaki Jacket</p><br>
            <p class='price'>450.000 VNĐ</p>
        </a>
    </div>
    <div class='pic_product_display'>
        <a class="pro" href="detailpage2.php">
            <img class='pic' src="pics_nham/autumn2.jpg" alt="Autumn Collection" width="340" height="470" >
            <p>Brown Jacket</p> <br>
            <p class='price'>350.000 VNĐ</p>
        </a>
    </div>
    <div class='pic_product_display'>
        <a class="pro" href="detailpage2.php">
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
    
<?php include(SHARED_PATH . "/mall_footer.php"); ?>


</body>
<button id="up-arrow" onclick="topfunction()" title="Go to top"><i class="fa fa-arrow-circle-up"></i></button>
<script type="text/javascript" src="shared.js"></script>

