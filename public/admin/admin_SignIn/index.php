<?php require_once("../../../private/initialize.php") ?>

<?php 
//Turn off unnecessary notices
error_reporting(0);

$failMsg = '';
$username = '';

//LogOut in admin page
if($_GET['element'] == "LogOut"){
    $_SESSION["admin_login"] = false;
}

if(isset($_POST["submit"])) {
    $success = false;
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $file_open = fopen(PRIVATE_PATH . '/database/admin_account.csv', "r");

    // print_r(fgetcsv($file_open));
    // $record = fgetcsv($file_open);
    // print_r($record[1]);

    while ($data = fgetcsv($file_open)) {
        if ($username == $data[0] && password_verify($password, $data[1])) {
            $success = true;
            break;
        }
    } 

    if ($success) {
        //logged in
        $_SESSION['admin_login'] = true;
        redirect_to(url_for("admin"));
    } else {
        //login failed
        //add message to $failMsg
        $failMsg .= '<label class="text-failure">Invalid Password/Username</label>';
    }
}


?>

<head>
    <title>Admin SignIn</title>
    <meta charset="utf-8">
    <style>
        .text-failure{
            color: red;
        }

        .text-success{
            color: green;
        }

        body{
            text-align: center;
            font-size: 18px;
        }

        .admin_form input[type="text"], .admin_form input[type="password"]{
            padding: 7px 25px;
            font-size: 16px;
        }

        .submit_btn{
            padding: 6px 15px;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <h2>Admin SignIn</h2>
    <?php echo $failMsg; ?>
    <form class="admin_form" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" required><br><br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required><br><br>
        <input class="submit_btn" type="submit" name="submit" value="Submit"></input>
</body>

</html>