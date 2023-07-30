<?php
    include "../dbconnection.php";
    session_start();
?>

<html>
<head>
    <title>PLEASE WORKK</title>
    <link rel="stylesheet" href="../home.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&family=Poppins:wght@100&display=swap" rel="stylesheet">
</head>
<body background= "../111.png">

    <div class = "main_container">
    <div class = "top">
        <h1>Grocery Store Management</h1>
    </div>
    <div class = "sidebar">
        <ul>
            <a href="../home_copy.php"><li>Home</li></a>
            <a href="../dashboard.php"><li>Dashboard</li></a>
            <a href="../firstpage.php"><li>Logout</li></a>
            <a href="../about.php"><li>About</li></a>
            <a href="../contact.php"><li>Feedback</li></a>
        </ul>
    </div>
    <div class="pdc">
        <h3>Order Successful!</h3>
        <?php
            $a = 0;
            $i = 0;
            while($i < $_SESSION['no_of_rows']){
                echo "<p>" . $_SESSION['items'][$i] . "</p>";
                $i += 1;
            }
        ?>
    </div>
</body>
</html>