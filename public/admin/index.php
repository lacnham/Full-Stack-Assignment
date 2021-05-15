<!-- Load the initialize.php file -->
<?php require_once("../../private/initialize.php"); ?> 
<!doctype html>
<html lang="en">
  <head>
    <title>TaoHu_Staff</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheet/admin_mainpage.css'); ?>"> 
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  </head>

  <body>
    <header>
      <h1>Staff Area</h1>
    </header>

    <nav>
      <label for="btnMenu" class="drop-btn"><span class="fa fa-bars"></span>Dashboard</label>
      <input type="checkbox" name="btn" id="btnMenu">
        <ul class="menu-bar">
          <li>
            <a href="#">Copyright, ToS and Privacy Policy</a>
          </li>
          <li>
            <a href="#">Team Members</a>
          </li>
        </ul>
    </nav>



    <div id="content">
    </div>

  </body>

</html>

