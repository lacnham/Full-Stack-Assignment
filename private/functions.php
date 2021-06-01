<?php

function url_for($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}
function read_all_products(){
  $file_name = 'prodata/products.csv';
  $fp = fopen($file_name, 'r');
  $first = fgetcsv($fp);
  $products = [];
  while ($row = fgetcsv($fp)){
      $i = 0;
      $product = [];
      foreach ($first as $colname){
          $product[$colname] = $row[$i];
          $i++;
          echo '<pre>';
      }
      $products[] = $product;
  }
  return $products;
}

function read_all_stores(){
  $file_name = 'prodata/stores.csv';
  $fp = fopen($file_name, 'r');
  $first = fgetcsv($fp);
  $stores = [];
  while ($row = fgetcsv($fp)){
      $i = 0;
      $store = [];
      foreach ($first as $colname){
          $store[$colname] = $row[$i];
          $i++;
          echo '<pre>';
      }
      $stores[] = $store;
  }
  return $stores;
}

function get_product($product_id) {
  $products = read_all_products();
  foreach ($products as $p) {
    if ($p['id'] == $product_id) {
      return $p;
    }
  }
  return false;
};

function u($string="") {
  return urlencode($string);
}

function raw_u($string="") {
  return rawurlencode($string);
}

function h($string="") {
  return htmlspecialchars($string);
}

function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request() {
  return $_SERVER['REQUEST_METHOD'] == 'GET';
}

function redirect_to($location){
  header('Location: ' . $location);
  exit();
}

function remove_special_char($string){
  return preg_replace("/\/|-|\.|\\|,|/","");
}

// function detect_identicals($file_path, $email, $phone){
//   $fp = fopen($file_path);
//   $row = count(file($fp));

//   if (count($row)>= 1){
//     foreach ($row as $data_col){
//       $tel = remove_special_char($phone);
//       $form_tel = remove_special_char($data_col["phone"]);
//     }
//       $row ++ ;
//   }
//     if (
//       $email == $data_col["email"] ||
//       $tel === $form_tel ||
//       ){
//         return false;
//       }
    
  
// return true;
// }


?>
