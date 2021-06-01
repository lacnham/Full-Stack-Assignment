<!-- Load the initialize.php file -->
<?php require_once("../../private/initialize.php"); ?>


<?php
//Turn off unnecessary notices
error_reporting(0);

//Direct Admin back to Admin_SignIn if they haven't logged in
if(isset($_SESSION['admin_login']) && $_SESSION['admin_login'] == false) {
  header("Location: ./admin_SignIn");
}

$linkpath = '';
if($_GET['page'] == 'policy'){
  // include(PRIVATE_PATH . '/pages_editor/policy.php');
  $linkpath = "<iframe src='../../private/pages_editor?page=policy'></iframe>";

} elseif ($_GET['page'] == 'about_us'){
  $linkpath = "<iframe src='../../private/pages_editor?page=about_us'></iframe>";
} 

?>

<head>
  <title>TaoHu Staff</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheet/admin_mainpage.css'); ?>"> 
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
  <header class="title_logo">
    <h1>Staff Area</h1>
    <a class="logout_logo" href="../admin/admin_SignIn?element=<?php echo 'LogOut'; ?>" title="Logout"><i class="fas fa-sign-in-alt"></i></a>
  </header>

<div class="big_container">
  <nav>
    <label for="btnMenu" class="drop-btn"><span class="fa fa-bars"></span>Dashboard</label>
    <input type="checkbox" name="btn" id="btnMenu">
      <ul class="menu-bar">
        <li>
          <a href="../admin/?page=<?php echo 'policy' ?>">Copyright, ToS and Privacy Policy</a>
        </li>
        <li>
          <a href="../admin/?page=<?php echo 'about_us' ?>">Team Members</a>
        </li>
      </ul>
  </nav>

  <div class="edit_content_container">
    <?php echo $linkpath; ?>
  </div>

</div>


</body>


