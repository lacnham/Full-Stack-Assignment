<?php 
require_once("../initialize.php"); 
?>

<style>
    <?php include(PUBLIC_PATH . "/stylesheet/admin_mainpage.css")?>
</style>


<?php
$filepath = '';
if($_GET['page'] == 'policy'){
  $filepath = PRIVATE_PATH . "/pages_editor/pages_content/policy.php";

} elseif ($_GET['page'] == 'about_us'){
  $filepath = PRIVATE_PATH . "/pages_editor/pages_content/about_us.php";

} else {
  $filepath = null;
}

if(is_post_request() && isset($_POST["update"])){
    file_put_contents($filepath, $_POST["page_textarea"]);
}
?>
<head>
<style>
  .page-edit-container{
      text-align: center;
  }
</style>
</head>

<body>
<div class="page-edit-container">
    <form id="editor_form" method="post" target="_self">
        <h2>Edit</h2>
        <textarea id="page_textarea" name="page_textarea" rows="100" cols="80">
            <?php echo file_get_contents($filepath); ?>
        </textarea><br><br>
        <input class="update_btn" type="submit" name="update" value="Update">
    </form>
</div>
</body>
