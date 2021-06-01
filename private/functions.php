<?php

function url_for($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}


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
}

function remove_special_char($string){
  return preg_replace("/\/|-|\.|\\|,|/","", $string);
}

function replace_special_char($string){
  return preg_replace("/\//","\\", $string);
}

function read_accounts(){
  $file_path = PRIVATE_PATH . '/database/registered_account.csv';
  $fp = fopen($file_path, 'r');
  $first = fgetcsv($fp);
  $acc_array = [];
  while ($row = fgetcsv($fp)){
    $i = 0;
    $acc = [];
    foreach ($first as $col_name) {
      $acc[$col_name] = $row[$i];
      $i++;
    }
    $acc_array[] = $acc;
  }
  return $acc_array;
} 

function get_account($a_info){
  $acc_array = read_accounts();
  foreach ($acc_array as $a){
    if (($a_info == remove_special_char($a['PhoneNumber'])) || ($a_info == $a['Email'])){
      return $a;
    }
  }
  return false;
}

function detect_identicals($file_path, $email, $phone){
  $fp = fopen($file_path, 'r');
  $row_num = count(file($file_path));
  $tel = remove_special_char($phone);
  
  $acc_array = read_accounts();

  foreach ($acc_array as $a){
    $stored_tel = remove_special_char($a["PhoneNumber"]); 
    $stored_email = $a["Email"];
    if (
      $email == $stored_email ||
      $tel == $stored_tel
    ){
    return false;
    }      
  }
      
return true;
}

function login_validation($loginKey, $password){
  // Login successfully = FALSE
  $acc_array = read_accounts();
    foreach ($acc_array as $a){
        $stored_tel = remove_special_char($a["PhoneNumber"]); 
        $stored_email = $a["Email"];
        $stored_pass = $a["Password"];

        if (
          ($loginKey == $stored_email || $loginKey == $stored_tel) 
          && (password_verify($password, $stored_pass))
        ){
          return false;
        }
      }
  return true;
}

?>
