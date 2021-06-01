<?php

//*validate data presence
//*trim so spaces don't count
//* === to avoid false positives
function is_blank($value){
    // TRUE if value is blank, otherwise FALSE
    return !isset($value) || trim($value) === '';
}

//*validate data presence
function has_presence($value){
    //presence is TRUE, not presence FALSE
    return !is_blank($value);
}

//validate string length (include spaces)
function has_length_greater_than($value, $min){
    $length = strlen($value);
    return $length > $min;
}

function has_length_less_than($value, $max){
    $length = strlen($value);
    return $length > $max;
}

function has_length_exactly($value, $exact){
    $length = strlen($value);
    return $length > $exact;
}



// has_valid_email_format('nobody@nowhere.com')
// * format: [chars]@[chars].[2+ letters]
//    returns 1 for a match, 0 for no match
//    http://php.net/manual/en/function.preg-match.php
function has_valid_email_format($value) {
  $email_regex = '/[a-zA-Z0-9]+@[a-zA-Z0-9]+(\.[a-zA-Z0-9]+)*\.[a-zA-Z0-9]{2,4}/i';
  return preg_match($email_regex, $value) === 1;
}

?>