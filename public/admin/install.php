<?php require_once("../../private/initialize.php"); ?> 
<?php
// Turn off unnecessary notices
error_reporting(0);

if (isset($_POST['submit'])) {
    //collect form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cPassword = $_POST['cPassword'];
    $error = '';

    if ($password != $cPassword){
        // Add text to $error
        $error .= '<label class="text-failure">Please Check your Password!</label>';
    } else {
        //Hash Password
        $hash = password_hash($password, PASSWORD_BCRYPT);
    }

    if($error == ''){
        //admin account will be saved in admin_account.csv
        $file_open = fopen(PRIVATE_PATH . "/database/admin_account.csv", "a");
        $num_rows = count(file(PRIVATE_PATH . "/database/admin_account.csv"));
        if($num_rows > 1){
            $num_rows = $num_rows - 1 + 1;
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

        body{
            margin-top: 30px;
            text-align: center;
            font-size: 18px;
        }

        .admin_reg input[type="text"], .admin_reg input[type="password"]{
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
    <h2>Create your Admin Account</h2>
    <?php echo $error; ?>
    <form class="admin_reg" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" required><br><br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required><br><br>
        <label for="cPassword">Re-type Password</label>
        <input type="password" name="cPassword" required><br><br>
        <input type="submit" class="submit_btn" name="submit" value="Submit"></input>
</body>

