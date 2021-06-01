<?php require_once("../private/initialize.php"); ?>

<?php include(SHARED_PATH . "/mall_header.php"); ?>

<style>
    <?php include("stylesheet/cookie-message.css"); ?>
</style>

<?php $page_title="Black Lotus| E-commerce Shopping Mall"; ?>

    <body>     
        <!----------------Cookie Message------------------------->
        <div class="container-cookie">
            <!-- <img src="/assets/cookie.webp" alt="cookie"> -->
            <div class="message-content">
                <header>I USE COOKIES</header>
                <p>Black Lotus uses cookies necessary for its basic functioning. By continuing browsing, you consent to its use of cookies and other technologies.</p>
            </div>
            <div class="buttons">
                <button class="item">I understand</button>
                <a href="copyright.php">Learn More</a>
            </div>
        </div>
        <script>
            const cookieBox = document.querySelector(".container-cookie"),
            acceptBtn = cookieBox.querySelector(".buttons button");
            // setting cookies for 1 day, after which time the cookie will automatically expire//
            acceptBtn.onclick = ()=>{
                document.cookie = "CookieBy=BlackLotus; max-age="+60*60*24;
                if(document.cookie){
                    //if the above cookie set
                    cookieBox.classList.add("hide"); //hide cookie box message once cookie is set
                }
                else{
                    alert("Cookie can't be set!"); //if cookie can't be set alert an error
                }
            }
            //Hide cookie box if cookie is set and not expired//
            let checkCookie = document.cookie.indexOf("CookieBy=BlackLotus"); // check Lotus' set cookies
            //if cookie is set then hide the cookie box else show it
            checkCookie != -1 ? cookieBox.classList.add("hide"): cookieBox.classList.remove("hide");
        </script>   

        <div class="header">
            <div class="header-container">
                <div class="row">
                    <div class="column-2">
                        <h1>The Lotus<br>has blossomed!</h1>
                        <p>Come try our new online mall with a variety of shops available.<br>From tech to fashion, all yours for the taking!</p>
                        <a href="store1.php" class="btn">Explore Now &#8594;</a>
                    </div>
                </div>
            </div>
        </div>

        <!---news slider-->
        <div class="container-news-roll">
            <div class="news-roll">
                <figure>
                    <img src="../assets/slider_image_1.webp" alt="slider_image_1">
                    <img src="../assets/slider_image_2.webp" alt="slider_image_2">
                    <img src="../assets/slider_image_1.webp" alt="slider_image_1">
                    <img src="../assets/slider_image_3.webp" alt="slider_image_3">
                    <img src="../assets/slider_image_1.webp" alt="slider_image_1">
                </figure>
            </div>
        </div>
        <!------------------------------------featured stores------------------------------------->
        <!-- open and read stores csv -->
        
        <div class="small-container-3">
            <div class="title-store">
                <h1>Featured Stores</h1>
            </div>
        <!-- Display featured stores based on true false value in csv file -->
        <?php
            echo "<div class=\"row-2\">";
            $stores = all_stores();
            $count = 0;
            foreach ($stores as $store) {
                if ($store['featured'] == 'TRUE') {
                    $name = $store['name'];
                    echo "<div class=\"column-3\">
                    <a class='hover-mouse' href=\"store1.php\">
                    <img src=\"../assets/amazon-logo-featured-stores.webp\" alt=\"amazon-logo-featured-stores\">
                    <h3>$name</h3>
                    </a>
                    </div>";
                    $count++;
                    if ($count == 10) {
                        break;
                    }
                }
            }
            echo "</div>";
        ?>
        </div>
        <!--------------------------------------featured categories--------------------------------------->
        <div class="categories">
            <div class="title-store">
                <h1>Features Categories</h1>
            </div>
            <div class="small-container">
                <div class="row-2">
                    <div class="column-3">
                        <a class='hover-mouse' href='spring.php'>
                        <img src="../assets/fashion-men-category-4.webp" alt="autumn-outfit-1">
                        <h3>FASHION</h3>
                        </a>
                    </div>
                    <div class="column-3">
                        <a class='hover-mouse' href='autumn.php'>
                        <img src="../assets/razer_category_2.webp" alt="gaming-mouse">
                        <h3>GAMING TECH</h3>
                    </a>
                    </div>
                    <div class="column-3">
                        <a class='hover-mouse' href='winter.php'>
                        <img src="../assets/shoes-category-3.webp" alt="shoes-category-3">
                        <h3>FOOTWEAR</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-----------------------------------------featured products---------------------------------------------->
        <!-- open and read products csv -->

        <div class="small-container-3">
            <div class="title-store">
                <h1>Featured Products</h1>
            </div>
            <!-- Display featured products based on true false value in csv file -->
            <?php
                echo "<div class=\"row-2\">";
                $products = all_products();
                $count = 0;
                foreach ($products as $product) {
                    if ($product['featured_in_mall'] == 'TRUE') {
                        $name = $product['name'];
                        $price = $product['price'];
                        echo "<div class=\"column-4\">
                        <a href='detailpage.php'>
                        <img src=\"../assets/autumn4.webp\" alt=\"autumn-outfit-4\">
                        <h4 class='hover-mouse'>$name</h4>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                            <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                            <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                            <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                            <i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
                        </a>
                        </div>
                        <p>$price</p>
                    </div>";
                        $count++;
                        if ($count == 10) {
                            break;
                        }
                    }
                }
            echo "</div>";
            ?> 
        </div>
<!-------------------------------------New Products------------------------------------------>

<!-- sort products from products csv and display them by created time -->
<div class="small-container-3">
    <div class="title-store">
        <h1>Latest Products</h1>
    </div>
    <?php
        function sort_products(){
            $products = all_products();
            $p_sort = $products;
            array_multisort(array_map('strtotime', array_column($p_sort, 'created_time')), SORT_DESC, $p_sort);
            return $p_sort;
        }
        echo "<div id=\"slider_1\" class=\"row-4\"";
        $p_sort = sort_products();
        $count = 0;
        foreach ($p_sort as $sort) {
            $name = $sort['name'];
            $price = $sort['price'];
            echo "<div id=\"slide_store_1\" class=\"column-5\">
            <a href=\"store1.php\">
                <img src=\"../assets/casual_black_1.webp\" alt=\"spring-outfit-1\">
                <h4 class=\"hover-mouse\">$name/h4>
                <div class=\"rating\">
                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                    <i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
                    <i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
                </div>
                <p>$price</p>
            </a>
            </div>";
            $count++;
            if ($count == 10) {
                break;
            }
        }
        echo "</div>";
    ?>
</div>
 <!---------------------------------------New Stores-------------------------------->
<?php

?>
<div class="small-container-3">
    <div class="title-store">
        <h1>New Stores</h1>
    </div>
    <?php
        function sort_stores(){
            $stores= all_stores();
            $s_sort = $stores;
            array_multisort(array_map('strtotime', array_column($s_sort, 'created_time')), SORT_DESC, $s_sort);
            return $s_sort;
        }
        echo "<div id=\"slider_2\" class=\"row-4\"";
        $s_sort = sort_products();
        $count = 0;
        foreach ($s_sort as $sort) {
            $name = $sort['name'];
            echo "<div id=\"slide_store_2\" class=\"column-6\">
            <a href=\"store1.php\">
                <img src=\"../assets/balenciaga.webp\">
                <h4 class=\"hover-mouse\"><strong>$name</strong></h4>
            </a>
            </div>";
            $count++;
            if ($count == 10) {
                break;
            }
        }
        echo "</div>";
    ?>
</div>
</body>

<?php include(SHARED_PATH . "/mall_footer.php"); ?>

<button id="up-arrow" onclick="topfunction()" title="Go to top"><i class="fa fa-arrow-circle-up"></i></button>
<script type="text/javascript" src="shared.js"></script>
<script src="auto-sliders.js" type="text/javascript"></script>