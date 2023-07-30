<?php
    include "dbconnection.php";
?>

<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&family=Poppins:wght@100&display=swap" rel="stylesheet">
</head>
<body background= "111.png">
    <div class = "main_container">
    <div class = "top">
        <h1>Grocery Store Management</h1>
    </div>
    <div class="content" style="padding-left: 24%;">
    <p style="padding-top: 50px; padding-bottom: 20px; font-family: Lato; font-size: 25px; text-decoration: underline rgb(149, 231, 187) 3px;"><strong>Login to your account here:</strong></p>
    <div class="login_input">
            <form action="firstpage.php", method="post" onsubmit="checking()">
                <div class = "UID">
                <label for="uid">&nbsp;&nbsp;User ID:&nbsp;&nbsp;&nbsp;</label>
                <input type="text" id="uid" name="uid" placeholder="User ID">
                </div>
                <div class = "PWD">
                <label for="pwd">Password:&nbsp;</label>
                <input type="password" id="pwd" name="pwd" placeholder="Password">
                </div>
                <div class = "SUBMIT_IG" style="padding-left: 10%;">
                    &nbsp;&nbsp;&nbsp;<button type="Submit">Login</button>
                </div>
            </form>
            <script>
                function checking(){
                    <?php
                        $val = $_POST['uid'];
                        $command = "select pwd from user where userid = $val;";
                        $table = mysqli_query($conn, $command);
                        $row = mysqli_fetch_assoc($table);
                        $pwd = $row['pwd'];
                        if($pwd == $_POST['pwd']){
                            $command = "select role from user where userid = $val;";
                            $table = mysqli_query($conn, $command);
                            $row = mysqli_fetch_assoc($table);
                            $rol = $row['role'];
                            session_start();
                            $_SESSION['auth'] = $rol;
                            $_SESSION['uid'] = $val;
                            $_SESSION['items'] = array();
                            $_SESSION['costs'] = array();
                            $_SESSION['no_of_rows'] = 0;
                            $_SESSION['xyz'] = 0;
                            $newURL = "dashboard.php";
                            header('Location: '.$newURL);
                        }
                        else{
                            $newURL = "na.php";
                            header('Location: '.$newURL);
                        }
                    ?>
                }
            </script>
    </div>
    </div>
</body>
</html>
