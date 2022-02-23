<?php
    //developer : Jehankandy


    //call for config.php file for make connecting with database and php files
    include('config.php');

    //start session for login
    session_start();

    //catch the username and password
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    //remove backslash added by addcslashes() 
    $user = stripcslashes($user);
    $pass = stripcslashes($pass);
    
    //remove special characters in a string for use sql
    $user = mysqli_real_escape_string($con,$user);
    $pass = mysqli_real_escape_string($con,$pass);

    //get username add password from database
    $sql = "select * from login_test where username = '$user' and pass = '$pass'";

    //accept string vlaue represnting a query as one of the parameters
    $result = mysqli_query($con,$sql);

    //fetch the result row as an associative or numaric array or both
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    //returns the number of rows in a result set
    $count = mysqli_num_rows($result);
    
    
    //velidetion of correct username and password
    if($count == 1){
        setcookie('loginDemo',$user,time()+60*60);
        $_SESSION['login'] =  $user;
        header('location:admin.php');
    }
    else{
        echo('Check Your Username and Password');
    }
            /*

                use folloeing username and password for test

                Username : kamal123
                Password : 123456789

                Username : jehankandy
                Password : 123456789



            */


?>