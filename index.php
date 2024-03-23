<?php
        include ("connection.php");
        include("sql_login.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="login_page_stylesheet.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper">
        <form name="form" action="sql_login.php" onsubmit="return isvalid()" method="POST">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="user" id="user" value="JamSam" placeholder="Username" required>

            </div>
            <div class="input-box">
                <input type="password" name="pass" id="pass" value="pass432" placeholder="Password" required>

            </div>

            <button type="submit" id="btn" value="Login" name="submit" class="btn">Login</button>
        
    </div>
    </form>
    
    <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert(" Username and password field is empty!!!");
                    return false;
                }
                else if(user.length==""){
                    alert(" Username field is empty!!!");
                    return false;
                }
                else if(pass.length==""){
                    alert(" Password field is empty!!!");
                    return false;
                }
                
            }
        </script>
    </div>

</body>

</html>