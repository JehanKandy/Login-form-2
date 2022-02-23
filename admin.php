<?php
    session_start();
    if(empty($_SESSION['login'])){
        header('location:index.php');
    }

                /*

                use folloeing username and password for test

                Username : kamal123
                Password : 123456789

                Username : jehankandy
                Password : 123456789



            */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <h1>
        <?php
            echo ($_COOKIE['loginDemo']);

        ?>
    </h1>
</body>
</html>