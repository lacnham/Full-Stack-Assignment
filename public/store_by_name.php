<?php require_once("../private/initialize.php"); ?>

<?php include(SHARED_PATH . "/mall_header.php"); ?>
<button id="up-arrow" onclick="topfunction()" title="Go to top"><i class="fa fa-arrow-circle-up"></i></button>
<style>
.browse{
    padding: 4%;
    height: 5400px;
}
.store_title{
    margin-top: 150px;
    text-align: center;

}
.line {
  display:inline-block;
  font-size: 15px;
  margin-left: 45px;
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
 <h1 class="store_title"> All Stores in TaoHu </h1>

<?php 
 function name_cmp($p1, $p2) {
    // use the built-in string comparison
    return strcmp($p1['Name'], $p2['Name']);
  }


$stores = read_all_stores();
$count = 0;
usort($stores, "name_cmp");

echo "<ul class = 'browse'>";
foreach ($stores as $p) {
    $id = $p['Id'];
    $name = $p['Name'];
    $date = $p['created_time'];
    $categories = $p['category_id'];
    echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/rmitogo.png' alt='logo'></a></li>";
    echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\">$name</a></li>";
    echo "<li class='line'><a class='browse_a' href=\"product.php?id=$id\"><img src='../pics_nham/winter.jpg'></a></li>";
    echo  "<li class = 'line description'>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>";
    echo "<li class='time line'>$date</li>";
    echo "<br>";
    $count++;
    if ($count == 100) {
        break;
    }
}
echo '</ul>';
?>
<script>
  i = 0;
  let select_ele = document.querySelector("#compare_by");
  select_ele.addEventListener("change", function() {
    let selected_value = select_ele.value;
    location.href = "product_by_time.php?compare_by=" + selected_value;
  });

</script>


<button id="up-arrow" onclick="topfunction()" title="Go to top"><i class="fa fa-arrow-circle-up"></i></button>
<script src="addtocart.js"></script>
<script type="text/javascript" src="shared.js"></script>

<?php include(SHARED_PATH . "/mall_footer.php"); ?>