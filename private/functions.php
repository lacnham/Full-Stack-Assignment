<?php

function url_for($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}


function read_all_products(){
  $file_name = 'products.csv';
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

function get_product($product_id){
  $products = read_all_products();
  foreach ($products as $p){
      if ($p['id']==$product_id){
          return $p;
      }
  }
  return false;
}


?>


