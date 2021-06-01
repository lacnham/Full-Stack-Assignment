<?php require_once("../private/initialize.php"); ?>

<?php include(SHARED_PATH . "/mall_header.php"); ?>

<style>
    .background-img{
        background-image: url(../image/tofu-wallpaper.webp);
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
</style>
</head>

<body>
<?php include(PRIVATE_PATH . "/pages_editor/pages_content/about_us.php"); ?>
</body>

<?php include(SHARED_PATH . "/mall_footer.php"); ?>

<button id="up-arrow" onclick="topfunction()" title="Go to top"><i class="fa fa-arrow-circle-up"></i></button>

<script type="text/javascript" src="./js/shared.js"></script>
<script type="text/javascript" src="./js/about_us.js" ></script>
