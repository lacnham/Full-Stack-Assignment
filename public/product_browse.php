<?php

require 'browseproduct.php';

$id = $_GET('id');
$product = get_product($id);

echo'<pre>';
echo print_r($product);
echo'<pre>';

?>