<?php
    //Initialize session
    session_start();

    //Set ADMIN default login status to False (not logged in)
    if (!isset($_SESSION["admin_login"])) {
        $_SESSION["admin_login"] = false;
    }

    //Set seller/user login status to False
    if (!isset($_SESSION["login"])) {
        $_SESSION["login"] = false;
    }

    //__FILE__ :return the current path to this file
    //dirname: return the path to the parent directory
    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_PATH", dirname(PRIVATE_PATH));
    define("PUBLIC_PATH", PROJECT_PATH.'/pubilc');
    define("SHARED_PATH", PRIVATE_PATH.'/shared');

    // * Do not need to include the domain
    // * Use same document root as webserver
    // * Can dynamically find everything in URL up to "/public"
    $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
    $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
    define("WWW_ROOT", $doc_root);

    require_once('functions.php');
    require_once('validation_functions.php');

    // Display ErrorMessage and Stop executing all other files when install.php exists
    $file_pointer = "../public/admin/install.php";
    if (file_exists($file_pointer)){
        redirect_to(url_for('/error.php'));
    }
?>

