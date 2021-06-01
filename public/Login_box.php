<?php include("../private/initialize.php") ?>
<?php
// Turn off unnecessary notices
error_reporting(0);

//LogOut
if(isset($_GET["do"])){
    if ($_GET["do"] == "logout"){
        $_SESSION["login"] = false;
        //unset $acc  
    }
}
    

//Redirect users back to my account page (if they already logged in)
if ($_SESSION["login"] == true){
    redirect_to(url_for("my-account.php"));
}

$loginKey = '';
$password = '';
$error = '';
if  (is_post_request()) {
    $loginKey = $_POST['loginKey'] ?? '';
    $password = $_POST['password'] ?? '';

    $acc_array = read_accounts();
    foreach ($acc_array as $a){
        $stored_tel = remove_special_char($a["PhoneNumber"]); 
        $stored_email = $a["Email"];
        $stored_pass = $a["Password"];
      }
      if (login_validation($loginKey, $password) == false){
            // Login successfully = FALSE
        $a_info = $loginKey;
        $_SESSION["login"] = true;
        $_SESSION["account"] = $a_info;
        $error = '<label class="text-success">Login Successfully. You will be redirected after 4 seconds</label>';
        header("refresh: 4, url= my-account.php");

        // echo "<script>
        // setTimeout(function () {
        // window.location.href= 'my-account.php';
        // }, 4000);
        // </script>";
      } else {
        $_SESSION["login"] = false;
        $error = '<label class="text-failed">Invalid Email/Phone or Password</label>';
      }

} else {
    //Just display page
}
?>
<head>
<meta charset="utf-08">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo url_for('stylesheet/css.css') ?>">
<link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<style>
    .pass_error{
        display: none;
        padding-top: 8px;
        padding-left: 15px;
        color: rgb(241, 13, 13);
        font-weight: bold;
    }

    .text-failed{
        font-size: 16px;
        color: red;
    }

    .text-success{
        font-size: 16px;
        color: green;
    }
</style>
</head>

<body>
    <div class="overflow-content">
    <header class="simple-header-container">
        <div class="black-logo"> 
            <a href="index.php">
                <img class="logo" src="../image/shop-logo.png" alt="TaoHu"></a>    
        </div>
        <p>Sign in</p>
        <div class="home-link">
            <a href="index.php">Home Page</a>
        </div>
    </header>

    <div class="login-container">
            <div class="header-login">Login</div>

        <form id="loginform" method="POST" action="Login_box.php">
            <div class="data">
                <div class="username-login">
                    <input type="text" placeholder="Email/Phone" class="form-control" name="loginKey" value="<?php echo $loginKey; ?>"required>
                </div>
            </div>

            <div class="data">
                <div class="password-login">
                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                    <span>
                        <i class="fa fa-eye" aria-hidden="true" id="eye3" onclick="toggleEye3()"></i>
                    </span>
                </div>
            </div>

            <div class="forgot-pass-login">
                <?php echo $error;?><br><br>
                <a href="forgotPass.php">Forgot your password</a>
            </div>

            <input type="submit" class="btn" name="" value="Login">
        </form>

        <hr>
        <div class="no-account">
            <p>No account? <a href="register_acc.php">Create one here</a></p>
        </div>
    </div> 
</div>

<?php include(SHARED_PATH . "/mall_footer.php"); ?>

<!-- <script type="text/javascript" src="./js/Login.js"></script> -->
<script type="text/javascript" src="./js/shared.js"></script>
</body>
