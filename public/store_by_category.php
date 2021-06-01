<?php require_once("../private/initialize.php"); ?>

<?php include(SHARED_PATH . "/mall_header.php"); ?>

<style>
    <?php include("stylesheet/browse.css")?>
.browse{
    padding: 3%;
    height: 5400px;
}
.pro_by_category_title{
    margin-top: 150px;
    text-align: center;
}
.line {
  display:inline-block;
  font-size: 15px;
  margin-right: 35px;
}
.browse_a{
    display: inline-block;
    width: 70px;
    text-decoration: none;
}
img{
    margin-right: 50px;
    margin-left: 60px;
    width: 50px;
}
.CATEGORIES{
    display: none;
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
#department{
    height: 300px;
}
#grocery{
    height: 350px;
}
#res {
    height: 550px;
}
#clothes, #tech{
    height: 350px;
}
#access{
    height: 450px;
}
#Pharmacies{
    height: 850px;
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

<div class='pro_by_category_title'><h1>Store by categories</h1></div>
<div class='categories-box'>
    <button class='btn_categories' onclick='showdepartment()'>Department Store
    </button>
    <div ID="department" style="display:none">
    <?php
    $stores = read_all_stores();
    $count = 0;
    echo "<ul class = 'browse'>";
    foreach ($stores as $p) {
        $id = $p['Id'];
        $name = $p['Name'];
        $date = $p['created_time'];
        $categories = $p['category_id'];
        if($categories == 1){
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/rmitogo.png' alt='logo'></a></li>";
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\">$name</a></li>";
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/winter.jpg'></a></li>";
        echo  "<li class = 'line description'>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>";
        echo "<li class='time line'>$date</li>";
        echo "<br>";
        $count++;
        if ($count == 20) {
            break;
        }}
    }
    echo '</ul>';
?>
</div>
<div class='categories-box'>
    <button class='btn_categories' onclick='showgrocery()'>Grocery stores
    </button>
    <div ID="grocery" style="display:none">
    <?php
    $stores = read_all_stores();
    $count = 0;
    echo "<ul class = 'browse'>";
    foreach ($stores as $p) {
        $id = $p['Id'];
        $name = $p['Name'];
        $date = $p['created_time'];
        $categories = $p['category_id'];
        if($categories == 2){
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/rmitogo.png' alt='logo'></a></li>";
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\">$name</a></li>";
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/winter.jpg'></a></li>";
        echo  "<li class = 'line description'>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>";
        echo "<li class='time line'>$date</li>";
        echo "<br>";
        $count++;
        if ($count == 20) {
            break;
        }}
    }
    echo '</ul>';
?>
</div>
<div class='categories-box'>
    <button class='btn_categories' onclick='showres()'>Restaurants
    </button>
    <div ID="res" style="display:none">
    <?php
    $stores = read_all_stores();
    $count = 0;
    echo "<ul class = 'browse'>";
    foreach ($stores as $p) {
        $id = $p['Id'];
        $name = $p['Name'];
        $date = $p['created_time'];
        $categories = $p['category_id'];
        if($categories == 3){
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/rmitogo.png' alt='logo'></a></li>";
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\">$name</a></li>";
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/winter.jpg'></a></li>";
        echo  "<li class = 'line description'>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>";
        echo "<li class='time line'>$date</li>";
        echo "<br>";
        $count++;
        if ($count == 20) {
            break;
        }}
    }
    echo '</ul>';
?>
</div>
<div class='categories-box'>
    <button class='btn_categories' onclick='showclothes()'>Clothing stores
    </button>
    <div ID="clothes" style="display:none">
    <?php
    $stores = read_all_stores();
    $count = 0;
    echo "<ul class = 'browse'>";
    foreach ($stores as $p) {
        $id = $p['Id'];
        $name = $p['Name'];
        $date = $p['created_time'];
        $categories = $p['category_id'];
        if($categories == 4){
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/rmitogo.png' alt='logo'></a></li>";
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\">$name</a></li>";
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/winter.jpg'></a></li>";
        echo  "<li class = 'line description'>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>";
        echo "<li class='time line'>$date</li>";
        echo "<br>";
        $count++;
        if ($count == 20) {
            break;
        }}
    }
    echo '</ul>';
?>
</div>
<div class='categories-box'>
    <button class='btn_categories' onclick='showaccess()'>Accessory stores
    </button>
    <div ID="access" style="display:none">
    <?php
    $stores = read_all_stores();
    $count = 0;
    echo "<ul class = 'browse'>";
    foreach ($stores as $p) {
        $id = $p['Id'];
        $name = $p['Name'];
        $date = $p['created_time'];
        $categories = $p['category_id'];
        if($categories == 5){
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/rmitogo.png' alt='logo'></a></li>";
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\">$name</a></li>";
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/winter.jpg'></a></li>";
        echo  "<li class = 'line description'>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>";
        echo "<li class='time line'>$date</li>";
        echo "<br>";
        $count++;
        if ($count == 20) {
            break;
        }}
    }
    echo '</ul>';
?>
</div>
<div class='categories-box'>
    <button class='btn_categories' onclick='showPharmacies()'>Pharmacies
    </button>
    <div ID="Pharmacies" style="display:none">
    <?php
    $stores = read_all_stores();
    $count = 0;
    echo "<ul class = 'browse'>";
    foreach ($stores as $p) {
        $id = $p['Id'];
        $name = $p['Name'];
        $date = $p['created_time'];
        $categories = $p['category_id'];
        if($categories == 6){
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/rmitogo.png' alt='logo'></a></li>";
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\">$name</a></li>";
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/winter.jpg'></a></li>";
        echo  "<li class = 'line description'>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>";
        echo "<li class='time line'>$date</li>";
        echo "<br>";
        $count++;
        if ($count == 20) {
            break;
        }}
    }
    echo '</ul>';
?>
</div>
<div class='categories-box'>
    <button class='btn_categories' onclick='showtech()'>Technology Stores
    </button>
    <div ID="tech" style="display:none">
    <?php
    $stores = read_all_stores();
    $count = 0;
    echo "<ul class = 'browse'>";
    foreach ($stores as $p) {
        $id = $p['Id'];
        $name = $p['Name'];
        $date = $p['created_time'];
        $categories = $p['category_id'];
        if($categories == 7){
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/rmitogo.png' alt='logo'></a></li>";
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\">$name</a></li>";
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/winter.jpg'></a></li>";
        echo  "<li class = 'line description'>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>";
        echo "<li class='time line'>$date</li>";
        echo "<br>";
        $count++;
        if ($count == 20) {
            break;
        }}
    }
    echo '</ul>';
?>
</div>
<div class='categories-box'>
    <button class='btn_categories' onclick='showpet()'>Pet stores
    </button>
    <div ID="pet" style="display:none">
    <?php
    $stores = read_all_stores();
    $count = 0;
    echo "<ul class = 'browse'>";
    foreach ($stores as $p) {
        $id = $p['Id'];
        $name = $p['Name'];
        $date = $p['created_time'];
        $categories = $p['category_id'];
        if($categories == 8){
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/rmitogo.png' alt='logo'></a></li>";
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\">$name</a></li>";
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/winter.jpg'></a></li>";
        echo  "<li class = 'line description'>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>";
        echo "<li class='time line'>$date</li>";
        echo "<br>";
        $count++;
        if ($count == 20) {
            break;
        }}
    }
    echo '</ul>';
?>
</div>
<div class='categories-box'>
    <button class='btn_categories' onclick='showtoy()'>Toy Stores
    </button>
    <div ID="toy" style="display:none">
    <?php
    $stores = read_all_stores();
    $count = 0;
    echo "<ul class = 'browse'>";
    foreach ($stores as $p) {
        $id = $p['Id'];
        $name = $p['Name'];
        $date = $p['created_time'];
        $categories = $p['category_id'];
        if($categories == 9){
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/rmitogo.png' alt='logo'></a></li>";
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\">$name</a></li>";
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/winter.jpg'></a></li>";
        echo  "<li class = 'line description'>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>";
        echo "<li class='time line'>$date</li>";
        echo "<br>";
        $count++;
        if ($count == 20) {
            break;
        }}
    }
    echo '</ul>';
?>
</div>
<div class='categories-box'>
    <button class='btn_categories' onclick='showspecialty()'>Specialty Stores
    </button>
    <div ID="specialty" style="display:none">
    <?php
    $stores = read_all_stores();
    $count = 0;
    echo "<ul class = 'browse'>";
    foreach ($stores as $p) {
        $id = $p['Id'];
        $name = $p['Name'];
        $date = $p['created_time'];
        $categories = $p['category_id'];
        if($categories == 10){
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/rmitogo.png' alt='logo'></a></li>";
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\">$name</a></li>";
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/winter.jpg'></a></li>";
        echo  "<li class = 'line description'>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>";
        echo "<li class='time line'>$date</li>";
        echo "<br>";
        $count++;
        if ($count == 20) {
            break;
        }}
    }
    echo '</ul>';
?>
</div>
<div class='categories-box'>
    <button class='btn_categories' onclick='showthrift()'>Thrift Stores
    </button>
    <div ID="thrift" style="display:none">
    <?php
    $stores = read_all_stores();
    $count = 0;
    echo "<ul class = 'browse'>";
    foreach ($stores as $p) {
        $id = $p['Id'];
        $name = $p['Name'];
        $date = $p['created_time'];
        $categories = $p['category_id'];
        if($categories == 11){
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/rmitogo.png' alt='logo'></a></li>";
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\">$name</a></li>";
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/winter.jpg'></a></li>";
        echo  "<li class = 'line description'>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>";
        echo "<li class='time line'>$date</li>";
        echo "<br>";
        $count++;
        if ($count == 20) {
            break;
        }}
    }
    echo '</ul>';
?>
</div>
<div class='categories-box'>
    <button class='btn_categories' onclick='showservices()'>Services
    </button>
    <div ID="services" style="display:none">
    <?php
    $stores = read_all_stores();
    $count = 0;
    echo "<ul class = 'browse'>";
    foreach ($stores as $p) {
        $id = $p['Id'];
        $name = $p['Name'];
        $date = $p['created_time'];
        $categories = $p['category_id'];
        if($categories == 12){
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/rmitogo.png' alt='logo'></a></li>";
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\">$name</a></li>";
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/winter.jpg'></a></li>";
        echo  "<li class = 'line description'>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>";
        echo "<li class='time line'>$date</li>";
        echo "<br>";
        $count++;
        if ($count == 20) {
            break;
        }}
    }
    echo '</ul>';
?>
</div>
<div class='categories-box'>
    <button class='btn_categories' onclick='showkiosks()'>Kiosks
    </button>
    <div ID="kiosks" style="display:none">
    <?php
    $stores = read_all_stores();
    $count = 0;
    echo "<ul class = 'browse'>";
    foreach ($stores as $p) {
        $id = $p['Id'];
        $name = $p['Name'];
        $date = $p['created_time'];
        $categories = $p['category_id'];
        if($categories == 13){
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/rmitogo.png' alt='logo'></a></li>";
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\">$name</a></li>";
        echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/winter.jpg'></a></li>";
        echo  "<li class = 'line description'>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>";
        echo "<li class='time line'>$date</li>";
        echo "<br>";
        $count++;
        if ($count == 20) {
            break;
        }}
    }
    echo '</ul>';
?>
</div>
<button id="up-arrow" onclick="topfunction()" title="Go to top"><i class="fa fa-arrow-circle-up"></i></button>
<script src="addtocart.js"></script>
<script type="text/javascript" src="shared.js"></script>
<script type="text/javascript" src="js/product_by_category.js"></script>

<?php include(SHARED_PATH . "/mall_footer.php"); ?>