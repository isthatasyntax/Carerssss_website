<?php
    //session_start():

    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "select * from carer_details where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if ($result -> num_rows > 0) {
          header("Location:home_page.php");
          exit();
        } else {
          header("Location:index.php");
          exit();
        }    
    }
    ?>