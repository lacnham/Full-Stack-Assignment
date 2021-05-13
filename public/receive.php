<?php require_once("../private/initialize.php"); ?>

<?php include(SHARED_PATH . "/mall_header.php"); ?>

<style>
    <?php include("stylesheet/test.css")?>
</style>

<?php $page_title="Successfully Purchased"; ?>

<body>
    <div class='smallcontainer'>
        <div class='rowwf'>
            <div class="col2">
                <h3 class='hf'>Your Contact Form has been received</h3>
                <p class='hf1'>We really apologize for the problems you might have now. 
                    Your Contact Form has been received. Please wait around 2 to 4 days for
                    us to handle it.
                </p>
            </div>
            <div class="col2">
                <img src='pics_nham/receive.png' alt="Apologize picture">
            </div>
        </div>
    </div>
</body>

<?php include(SHARED_PATH . "/mall_footer.php"); ?>
<button id="up-arrow" onclick="topfunction()" title="Go to top"><i class="fa fa-arrow-circle-up"></i></button>
<script type="text/javascript" src="shared.js"></script>
