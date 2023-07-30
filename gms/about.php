<?php
    include "dbconnection.php";
    session_start();
?>

<html>
<head>
    <title>About</title>
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
    <div class = "sidebar">
        <ul>
            <a href="home_copy.php"><li>Home</li></a>
            <a href="dashboard.php"><li>Dashboard</li></a>
            <a href="firstpage.php"><li>Logout</li></a>
            <a href="about.php"><li>About</li></a>
            <a href="contact.php"><li>Feedback</li></a>
        </ul>
    </div>
    <div class="content">
        <p>This is a mini -project that aims to help with some aspects of managing a grocery store</p>
        <p>Techstack used: </p>
        <br>
        <div>
            <img src="html_logo.png" height="150" width="150">
            <img src="JS_logo.png" height="150" width="150">
            <img src="mysql_logo.png" height="150" width="250">
            <img src="css_logo.png" height="150" width="150">
            <img src="php_logo.png" height="150" width="250">
        </div>
    </div>
</body>
</html>