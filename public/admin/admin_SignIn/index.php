<?php require_once("../../../private/initialize.php") ?>

<?php 
if(isset($_POST["submit"])) {
    $failMsg = '';
    $success = false;
    $username = $_POST['username'];
    $password = $_POST['password'];

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
        header("Location: ../../admin");
    } else {
        //login failed
        //add message to $failMsg
        $failMsg .= '<label class="text-failure">Invalid Password/Username</label>';
    }
}

//LogOut in admin page
if($_GET['element'] == "LogOut"){
    $_SESSION["admin_login"] = false;
}
?>

<!doctype html>
<html lang="en">
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
    </style>
</head>

<body>
    <h2>Admin SignIn</h2>
    <?php echo $failMsg; ?>
    <form method="post">
        <label for="username">Username</label>
        <input type="text" name="username" required><br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" name="submit" value="Submit"></input>
</body>

</html>