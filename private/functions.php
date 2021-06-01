<?php

function url_for($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}

?>

<?php
  function all_stores(){
    $file_name = 'csv_files/stores.csv';
    $file_reading = fopen($file_name, 'r');
    $first = fgetcsv($file_reading);
    $stores = [];
    while ($row = fgetcsv($file_reading)){
      $count = 0;
      $product = [];
      foreach ($first as $col_name) {
        $store[$col_name] = $row[$count];
        $count++;
      }
        $stores[] = $store;
    }
      return $stores;
  }

  function get_store($store_id) {
    $stores = all_stores();
    foreach ($stores as $s) {
      if ($s['featured'] == 'TRUE') {
        return $s;
      }
    }
    return false;
  }
?>

<?php
  function all_products(){
    $file_name = 'csv_files/products.csv';
    $file_reading = fopen($file_name, 'r');
    $first = fgetcsv($file_reading);
    $products = [];
      while ($row = fgetcsv($file_reading)){
        $count = 0;
        $product = [];
        foreach ($first as $col_name) {
          $product[$col_name] = $row[$count];
          $count++;
        }
          $products[] = $product;
      }
        return $products;
  }   

  function get_product($product_id) {
    $products = all_products();
    foreach ($products as $p) {
      if ($p['id'] == $product_id){
        return $p;
      }
        
    }
    return false;
  }
?>