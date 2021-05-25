<?php include("../private/initialize.php") ?>

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

        <form id="loginform" action="my-account.php">
            <div class="data">
                <div class="username-login">
                    <input type="text" placeholder="Email/Phone" id="email" class="form-control" name="loginKey" pattern="(^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$)" title="Invalid emaill address!" required>
                </div>
                <!-- <div class="email_error">Unvalid email address</div> -->
            </div>

            <div class="data">
                <div class="password-login">
                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                    <span>
                        <i class="fa fa-eye" aria-hidden="true" id="eye3" onclick="toggleEye3()"></i>
                    </span>
                </div>
                <div class="pass_error">Wrong Password</div>
            </div>

            <div class="forgot-pass-login">
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

<script type="text/javascript" src="./js/Login.js"></script>
<script type="text/javascript" src="./js/shared.js"></script>
</body>
