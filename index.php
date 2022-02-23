<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        fieldset{
            width: 15%;
        }
    </style>

</head>
<body>
    <center>
        <form action="login.php" method="POST" name="login" onsubmit="return validation()">
            <fieldset>
                <legend>Login</legend>

            <table border="0">
                <tr>
                    <td>
                        <label>Username : </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="user" id="user" placeholder="Username" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password : </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="pass" id="pass" placeholder="Password" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Login" class="btn btn-primary">
                    </td>
                </tr>

            </table>
            </fieldset>
        </form>
        <br><br>
        <table border="0">
            <tr>
                <td>
                        <h4>
                            Use following username and Password for test
                        </h4>
                        <p>
                            Username : jehankandy
                        </p>
                        <p>
                            Password : 123456789
                        </p>
                        <p>**************</p>
                        <p>
                            Username : kamal123
                        </p>
                        <p>
                            Password : 123456789
                        </p>
                </td>
            </tr>
        </table>
    </center>   
    
    <script>
        //validation for empty inputs submited

        function validation(){
            //get the value of username to user veriable
            var user = document.login.user.value;
            //get the value of passeword to pass veriable
            var pass = document.login.pass.value;

            //cheack all input feilds are empty
            if(user.length == "" && pass.length == ""){
                alert("request feild shouldn't be empty");
                return false;
            }else{
                //cheack Username input feild is empty
                if(user.length == ""){
                    alert("Username shouldn't be empty");
                    return false;
                }
                //cheack Password input feild is empty
                if(pass.length == ""){
                    alert("Password shouldn't be empty");
                    return false;
                }
            }
            /*

                use folloeing username and password for test

                Username : kamal123
                Password : 123456789

                Username : jehankandy
                Password : 123456789



            */
        }
    </script>


</body>
</html>