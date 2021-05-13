<?php require_once("../private/initialize.php"); ?>

<?php include(SHARED_PATH . "/mall_header.php"); ?>

<body>
    <div class="acc-whole-content">
        <div class="acc-column">
            <div class="prof-pic-nav">
            <div class="prof-pic-name">
            <img src="image/linh.jpg" alt="Avatar">
            <p>Linh Vu</p>
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
                <form action="my-account.php">
                <div class="form-row">
                    <div class="col-label">
                    <label for="fname">First name:</label>
                    </div>
                    <div class="col-input">
                    <input type="text" id="fname" name="fname" value="Linh" class="form-control" readonly><br><br></div>
                </div>

                <div class="form-row">
                    <div class="col-label">
                    <label for="lname">Last name:</label>  
                    </div>
                    <div class="col-input">
                    <input type="text" id="lname" name="lname" value="Vu Bui Khanh" class="form-control" readonly><br><br></div>
                </div>

                <div class="form-row">
                    <div class="col-label">
                    <label for="email">Email:</label>  
                    </div>
                    <div class="col-input">
                    <input type="text" name="email" class="form-control"><br><br>
                    <span id="DisplayEmail" class="AccountEmail">s3864120@rmit.edu.vn</span></div><br><br>
                </div>

                <div class="form-row">
                    <div class="col-label">
                    <label for="phone-number">Phone number:</label> 
                    </div> 
                    <div class="col-input">
                    <input type="tel" id="phone-number" name="phone-number" value="08170*****" class="form-control" readonly><br><br></div>
                </div>

                <div class="form-row">
                    <div class="col-label">
                    <label for="password">Password:</label>  
                    </div>
                    <div class="col-input">
                    <input type="password" id="showpassword" name="password" value="123456" class="form-control" readonly><br><br></div>
                </div>      

                <div class="form-row">
                    <div class="col-label">
                    <label for="country">Country:</label>  
                    </div>
                    <div class="col-input">
                    <input type="text" id="country" name="country" value="Vietnam" class="form-control" readonly><br><br></div>
                </div>

                <div class="form-row">
                    <div class="col-label">
                    <label for="shop-name">Shop name:</label>  
                    </div>
                    <div class="col-input">
                    <input type="text" id="shop-name" name="shop-name" value="Uniqlo" class="form-control" readonly><br><br></div>
                </div>
                </form>
            </div>
        </div>
    </div>  
</body>

<?php include(SHARED_PATH . "/mall_footer.php"); ?>

<script type="text/javascript" src="shared.js"></script>
<script type="text/javascript" src="my-account.js"></script>

