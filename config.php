<?php
    //name of the server
    $server = "localhost";

    //username of the server
    $user = "root";

    //password of the server (default is empty)
    $pass = "";

    //name of the databes ---> it will change according to your databese name
    $db = "login";



    //make connection 
    $con = mysqli_connect($server,$user,$pass,$db);

    //if database not connected.......!!!!
if(!$con){
    die("Couldn't be connect with database".mysqli_connect_error());
}

/*
or you can use for 
!$con as mysqli_connect_errno()
!$con = mysqli_connect_errno()


if(mysqli_connect_errno()){
    die("Couldn't be connect with database".mysqli_connect_error());
}
*/


            /*

                use folloeing username and password for test

                Username : kamal123
                Password : 123456789

                Username : jehankandy
                Password : 123456789



            */

?>