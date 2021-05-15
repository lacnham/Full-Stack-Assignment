<?php require_once("../../private/initialize.php"); ?> 
<?php
if (isset($_POST['submit'])) {
    //collect form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cPassword = $_POST['cPassword'];
    $error = '';

    if ($password != $cPassword){
        // $status = "Invalid Password";
        $error .= '<label class="text-failure">Please Check your Password!</label>';
    } else {
        //Hash Password
        $hash = password_hash($password, PASSWORD_BCRYPT);
    }

    if($error == ''){
        //admin account will be saved in admin_account.csv
        $file_open = fopen(PRIVATE_PATH . "/database/admin_account.csv", "a");
        $no_rows = count(file(PRIVAE_PATH . "/database/admin_account.csv"));
        if($no_rows > 1){
            $no_rows = ($no_rows - 1) + 1;
        }

        $form_data = array(
            'Username' => $username,
            'Password' => $hash
        );

        // Formats a line as CSV and writes it to an open file
        fputcsv($file_open, $form_data);
        $error = '<label class="text-success">Successfully Created</label>';
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Admin Account</title>
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
    <h2>Create your Admin Account</h2>
    <?php echo $error; ?>
    <form method="post">
        <label for="username">Username</label>
        <input type="text" name="username" required><br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required><br>
        <label for="cPassword">Re-type Password</label>
        <input type="password" name="cPassword" required><br>
        <input type="submit" name="submit" value="Submit"></input>
</body>

</html>