
<?php
  session_start();

//   if (!isset($_SESSION['loggedin'])) {
//     header('location: Login_box.php');
//   }

  if (isset($_POST['add'])) {
    $product = [
      'name' => 'Kaki Jacket',
      'price' => $_POST['finalprice'],
      'created_time' => date('Y-m-d h:i:s')
    ];
    $_SESSION['products'][] = $product;
  }
?>

<?php
  if (isset($_SESSION['products'])) {
    echo '<pre>';
    print_r($_SESSION['products']);
    echo '</pre>';
  }

?>