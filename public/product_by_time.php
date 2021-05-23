<?php require_once("../private/initialize.php"); ?>

<?php include(SHARED_PATH . "/mall_header.php"); ?>
<button id="up-arrow" onclick="topfunction()" title="Go to top"><i class="fa fa-arrow-circle-up"></i></button>
<style>
.time_filter{
    margin-top:140px;
    text-align: center;
} ;

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
</style>

<div class='time_filter'>
    <h1> All Products in TaoHu </h1>
<form>
    <label for="time">Choose time:</label>

    <select id="time" name="time">
    <option value="newest">Newest Time</option>
    <option value="oldest">Oldest Time</option>
    </select>
    <input type="submit" value="Submit">
</form>
</div>

<?php 
$products = read_all_products();

$count = 0;

echo "<ul class = 'browse'>";
foreach ($products as $p) {
    $id = $p['id'];
    $name = $p['name'];
    $price = $p['price'];
    $date = $p['created_time'];
    echo "<li class='line'><a class='browse_a' href=\'product.php?$id\'><img src='../pics_nham/rmitogo.png' alt='logo'></a></li>";
    echo "<li class='line'><a class='browse_a' href=\'product.php?$id\'>$name</a></li>";
    echo "<li class='line'><a class='browse_a' href=\'product.php?$id\'><img src='../pics_nham/winter.jpg'></a></li>";
    echo  "<li class = 'line description'>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>";
    echo "<li class='pprice line'>$price</li>";
    echo "<li class='line'>$date</li>";
    echo "<br>";
    $count++;
    if ($count == 1000) {
        break;
    }

}
echo '</ul>';

if (isset($_SESSION['visited_products']) && is_array($_SESSION['visited_products'])){

    echo 'Visited Products';
    echo '<ul>';
    foreach ($_SESSION['visited_products'] as $id){
        echo "<li>$id</li>";
    }
    echo '</ul>';
}

?>



