<?php require_once("../private/initialize.php"); ?>

<?php include(SHARED_PATH . "/mall_header.php"); ?>

<style>
    <?php include("stylesheet/browse.css")?>
.time_filter{
    margin-top:140px;
    text-align: center;
} 
.browse{
    display: flex;
    
  
}
.line {
  display:inline-block;
  font-size: 15px;
}
.browse_a{
    display: inline-block;
    width: 70px;
    text-decoration: none;
}
img{
    margin-right: 40px;
    width: 50px;
}
.pprice{
    margin-left: 40px;
    width: 100px;
}
.pro_by_category_title{
    margin-top: 120px;
    text-align: center;
}
.CATEGORIES{
    display: none;
}
#Food{
    height: 550px;
    text-align: center;
}
#Drink{
    height: 300px;
    text-align: center;
}
#Pizza{
    height: 400px;
    text-align: center;
}
#Market{
    height: 550px;
    text-align: center;
}
.categories-box{
    text-align:center;
}
.btn_categories{
    text-align:center;
    height: 50px;
    width: 500px;
    max-width: 100%;
    margin-top: 30px;
    margin-bottom: 10px;
    border-radius: 50px;
    border: none;
}
@media screen and (max-width: 733px){
    .description, .time{
        display:none;
    }
    .pro_category, .line{
        left: 0px;
    }
}
@media screen and (max-width: 400px){
    .description, .time, .pprice{
        display:none;
    }
    .pro_category, .line{
        left: 0px;
    }
}
</style>


<?php $page_title="Category"; ?>

<div class='pro_by_category_title'><h1>Product by categories</h1>
<div class='categories-box'>
    <button class='btn_categories' onclick='showfood()'>Food
    </button>
    <div ID="Food" style="display:none">
    <?php
    echo "<ul class='pro_category'>";
    $products = read_all_products();
    $count = 0;
    foreach ($products as $p) {
    $id = $p['id'];
    $name = $p['name'];
    $price = $p['price'];
    $date = $p['created_time'];
    $store = $p['store_id'];
    if($store == 91){
    echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/rmitogo.png' alt='logo'></a></li>";
    echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\">$name</a></li>";
    echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/winter.jpg'></a></li>";
    echo  "<li class = 'line description'>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>";
    echo "<li class='pprice line'>$price</li>";
    echo "<li class='line time'>$date</li>";
    echo "<br>";
    $count++;
    if ($count == 10) {
        break;
    }
    }}
    echo '</ul>';?>
    </div>
</div>

<div class='categories-box'>
    <button class='btn_categories' onclick='showdrink()'>Drink
    </button>
    <div ID="Drink" style="display:none">
    <?php
    echo "<ul class = 'browse'>";
    $products = read_all_products();
    $count = 0;
    foreach ($products as $p) {
    $id = $p['id'];
    $name = $p['name'];
    $price = $p['price'];
    $date = $p['created_time'];
    $store = $p['store_id'];
    if($store == 87){
    echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/rmitogo.png' alt='logo'></a></li>";
    echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\">$name</a></li>";
    echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/winter.jpg'></a></li>";
    echo  "<li class = 'line description'>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>";
    echo "<li class='pprice line'>$price</li>";
    echo "<li class='line time'>$date</li>";
    echo "<br>";
    $count++;
    if ($count == 10) {
        break;
    }
    }}
    echo '</ul>';
?>
</div>
</div>
<div class='categories-box'>
    <button class='btn_categories' onclick='showpizza()'>Pizza
    </button>
    <div ID="Pizza" style="display:none">
    <?php
    echo "<ul class = 'browse'>";
    $products = read_all_products();
    $count = 0;
    foreach ($products as $p) {
    $id = $p['id'];
    $name = $p['name'];
    $price = $p['price'];
    $date = $p['created_time'];
    $store = $p['store_id'];
    if($store == 39){
    echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/rmitogo.png' alt='logo'></a></li>";
    echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\">$name</a></li>";
    echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/winter.jpg'></a></li>";
    echo  "<li class = 'line description'>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>";
    echo "<li class='pprice line'>$price</li>";
    echo "<li class='line time'>$date</li>";
    echo "<br>";
    $count++;
    if ($count == 10) {
        break;
    }
    }}
    echo '</ul>';
?>
</div>
</div>
<div class='categories-box'>
    <button class='btn_categories' onclick='showmarket()'>Market
    </button>
    <div ID="Market" style="display:none">
    <?php
    echo "<ul class = 'browse'>";
    $products = read_all_products();
    $count = 0;
    foreach ($products as $p) {
    $id = $p['id'];
    $name = $p['name'];
    $price = $p['price'];
    $date = $p['created_time'];
    $store = $p['store_id'];
    if($store == 75){
    echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/rmitogo.png' alt='logo'></a></li>";
    echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\">$name</a></li>";
    echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/winter.jpg'></a></li>";
    echo  "<li class = 'line description'>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>";
    echo "<li class='pprice line'>$price</li>";
    echo "<li class='line time'>$date</li>";
    echo "<br>";
    $count++;
    if ($count == 10) {
        break;
    }
    }}
    echo '</ul>';
?>
</div>
</div>
</div>
<button id="up-arrow" onclick="topfunction()" title="Go to top"><i class="fa fa-arrow-circle-up"></i></button>
<script src="addtocart.js"></script>
<script type="text/javascript" src="shared.js"></script>
<script type="text/javascript" src="js/product_by_category.js"></script>

<?php include(SHARED_PATH . "/mall_footer.php"); ?>