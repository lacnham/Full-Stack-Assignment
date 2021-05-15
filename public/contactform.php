<?php require_once("../private/initialize.php"); ?>

<?php include(SHARED_PATH . "/mall_header.php"); ?>

<style>
    <?php include("stylesheet/product_page.css"); ?>
    <?php include("stylesheet/test.css")?>
</style>

<?php $page_title="Contact Us"; ?>

<body>
<div class='smallcontainer contactus'>
    <div class='rowwf'>
        <div class="col2">
            <h1 class='hcu'> Contact Us </h1>
            <form class='contact' id='contact' name ='contact' >
                <div class='cpurpose'>
                    <label class='line' for='purpose'>Contact Purpose</label>
                    <select class='purpose' name='purpose'>Contact Purpose
                        <option value='quality'>Quality Issue</option>
                        <option value='delivery'>Delivery Issue</option>
                        <option value='security'>Lack of security</option>
                        <option value='charges'>Additional charges</option>
                        <option value='difference'>Difference Issue</option>
                    </select><br>
                </div>
                
                    <label class='line' class='fullnamebox' for='fullname' >Full Name</label><br>
                    <input class='textcontact' type='text' id = "fullname" name = "fullname" required>
                    <small id='errorfullname'></small>
                    <small id='successfullname'></small>
                    <br>
                
                <div class = 'contactgroup'>
                    <label class='line' for='email'>Email</label><br>
                    <input class='textcontact' type='text' id = "email" name = "email" required>  
                    <small id='erroremail'></small>
                    <small id='successemail'></small>
                <br>
                </div>
                
                <div class = 'contactgroup'>
                    <label class='line' for='phone'>Phone</label><br>
                    <input class='textcontact' type='text' id = "phone" name = "phone" type='number'required>
                    <small id='errorphone'></small>
                    <small id='successphone'></small>
                <br>
                </div>
                <div class='coption contactgroup'>
                    <label id='line1' class='line' for="preferred">Preferred contact method</label>                       
                    <input type="radio" id="cemail" name="preferred" value="cemail" required >
                    <label for="mail">Email</label>
                    <input type="radio" id="cphone" name="preferred" value="cphone">
                    <label for="cphone">Phone</label>
                    <br>
                    <small id='errorradio'></small>
                    <small id='successradio'></small>
                </div>
                <div class='cday contactgroup'>
                    <div class='colday'>
                        <label class='line' for="preferred">Contact Days</label> <br>
                        <input type="checkbox" id="mon" name="day" value="mon">
                        <label class='day' class='day' for="mon">Monday</label><br>
                        <input type="checkbox" id="tue" name="day" value="tue">
                        <label class='day'for="tue">Tuesday</label><br>
                        <input type="checkbox" id="wed" name="day" value="wed">
                        <label class='day' for="wed">Wednesday</label> <br>                 
                        <input type="checkbox" id="thu" name="day" value="thu">
                        <label  class='day' for="thu">Thursday</label><br>
                    </div>
                    <div class='colday colday2 contactgroup'>
                        <input type="checkbox" id="fri" name="day" value="fri">
                        <label class='day' for="fri">Friday</label><br>
                        <input type="checkbox" id="sa" name="day" value="sa">
                        <label class='day' for="sa">Saturday</label><br>
                        <input type="checkbox" id="sun" name="day" value="sun">
                        <label class='day' for="sun">Sunday</label><br>
                    </div>

                    
                </div>
                
                <div>
                <label class='line' for="description">Message</label>
                <textarea style="height:200px" onkeyup="countletter();" minlength = '50' maxlength = "500" class='textcontact' id = "description" name = "description" ></textarea>
                <small id='characterremaining'>50 characters needed</small>
                <br>
                <small id ='errordescription'></small>
                    </div>
                <br>                   
                <p id='preparesubmit'></p>
                <input class ='contactbtn' type="button" value="Clear">
                <input  class ='contactbtn' type="button" name='submit' id ='submit'value="Submit" onclick="return contactform()">
                </form>
            </form>
        </div>  
        <div class="col2 pix">              
            <img  src="pics_nham/contact5.png" alt="Contact picture" class= 'contactpic' >               
        </div>
    </div>
</div>
</body>

<?php include(SHARED_PATH . "/mall_footer.php"); ?>

<script src="nham.js"></script>