<?php require_once("../private/initialize.php"); ?>
<?php
//Turn off unnecessary notices
error_reporting(0);

//Redirect users back to my login (if they isn't logged in)
if ($_SESSION["login"] == false){
    redirect_to(url_for("Login_box.php"));
}

if ($_SESSION["login"] == true){
    $a_info = $_SESSION['account'];
    $acc = get_account($a_info);
}

?>
<?php include(SHARED_PATH . "/mall_header.php"); ?>

<body>
    <div class="acc-whole-content">
        <div class="acc-column">
            <div class="prof-pic-nav">
            <div class="prof-pic-name">
            <img src="../private/database/account_avatar/<?php echo $acc['PicName']; ?>" alt="Profile Avatar">
            <p style="padding-top:7px; font-size:25px; font-weight:bold;"><?php echo $acc['FirstName']; ?></p>
            </div>
            
            <div class="acc-nav-container">
                <p>Account Information</p>
            </div>
        </div>
    </div>    

        <div class="acc-column">
            <div class="prof-detail-container">
            <div class="tab-container-wrap">
            <h2>Profile</h2>
            <form>
            <div class="form-row">
                <div class="col-label">
                <label for="fname">First name:</label>
                </div>
                <div class="col-input">
                <input type="text" id="fname" name="fname" value="<?php echo $acc['FirstName']; ?>" class="form-control" readonly><br><br></div>
            </div>

            <div class="form-row">
                <div class="col-label">
                <label for="lname">Last name:</label>  
                </div>
                <div class="col-input">
                <input type="text" id="lname" name="lname" value="<?php echo $acc['LastName']; ?>" class="form-control" readonly><br><br></div>
            </div>

            <div class="form-row">
                <div class="col-label">
                <label for="email">Email:</label>  
                </div>
                <div class="col-input">
                <input type="text" name="email" class="form-control" value="<?php echo $acc['Email']; ?>"><br><br></div>
                <!-- <span id="DisplayEmail" class="AccountEmail"></span></div><br><br> -->
            </div>

            <div class="form-row">
                <div class="col-label">
                <label for="phone-number">Phone number:</label> 
                </div> 
                <div class="col-input">
                <input type="tel" id="phone-number" name="phone-number" value="<?php echo $acc['PhoneNumber']; ?>" class="form-control" readonly><br><br></div>
            </div>

            <div class="form-row">
                <div class="col-label">
                <label for="password">Password:</label>  
                </div>
                <div class="col-input">
                <input type="password" id="showpassword" name="password" value="<?php echo $acc['Password']; ?>" class="form-control" readonly><br><br></div>
            </div>      

            <div class="form-row">
                <div class="col-label">
                <label for="country">Country:</label>  
                </div>
                <div class="col-input">
                <input type="text" id="country" name="country" value="<?php echo $acc['Country']; ?>" class="form-control" readonly><br><br></div>
            </div>

            <div class="form-row">
                <div class="col-label">
                <label for="shop-name">Shop name:</label>  
                </div>
                <div class="col-input">
                <input type="text" id="shop-name" name="shop-name" value="<?php echo $acc['StoreName']; ?>" class="form-control" readonly><br><br></div>
            </div>
            </form>
            </div>
            </div>
        </div>  
    
</body>

<?php include(SHARED_PATH . "/mall_footer.php"); ?>

<script type="text/javascript" src="./js/shared.js"></script>
<!-- <script type="text/javascript" src="./js/my-account.js"></script> -->

