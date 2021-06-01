<?php require_once("../private/initialize.php"); ?>

<?php include(SHARED_PATH . "/mall_header.php"); ?>
<button id="up-arrow" onclick="topfunction()" title="Go to top"><i class="fa fa-arrow-circle-up"></i></button>
<style>
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
</style>


    <div class='time_filter'>
    <h1> All Products in TaoHu </h1>
    <label for="time">Choose time:</label>
    <select id="compare_by" name="compare_by">
    <option value="newest">Newest Time</option>
    <option value="oldest">Oldest Time</option>
    </select>
</div>

<?php 
 function created_time_oldest_cmp($p1, $p2) {
    // Convert date/time string to Unix timestamp
    return strtotime($p1['created_time']) - strtotime($p2['created_time']);
  }

  function created_time_newest_cmp($p1, $p2) {
    // Convert date/time string to Unix timestamp
    return strtotime($p2['created_time']) - strtotime($p1['created_time']);
  }

  $mapping = [
    'newest' => 'created_time_newest__cmp',
    'oldest' => 'created_time_oldest_cmp',
  ];


  $selected_func = 'created_time_newest_cmp';
  if (isset($_GET['compare_by']) && !empty($_GET['compare_by'])) {
    $selected_func = $mapping[$_GET['compare_by']];
  }


$products = read_all_products();
$count = 0;
usort($products, $selected_func);


echo "<ul class = 'browse'>";
foreach ($products as $p) {
    $id = $p['id'];
    $name = $p['name'];
    $price = $p['price'];
    $date = $p['created_time'];
    
    echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/rmitogo.png' alt='logo'></a></li>";
    echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\">$name</a></li>";
    echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/winter.jpg'></a></li>";
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
?>
<script>
  let select_ele = document.querySelector("#compare_by");
  select_ele.addEventListener("change", function() {
    let selected_value = select_ele.value;
    location.href = "product_by_time.php?compare_by=" + selected_value;
  });
</script>



