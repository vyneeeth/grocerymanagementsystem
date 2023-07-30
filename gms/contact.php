<?php
    include "dbconnection.php";
    session_start();
?>

<html>
<head>
    <title>Contact/Feedback</title>
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
        <form action="" onsubmit="return haha()" style="display: flex; flex-direction: column; font-family: Poppins; font-weight: 600; font-size: 20px;">
            <div style="margin: 10px;">
            <label for="name">Name: </label>
            <input id="name" type="text">
            </div>
            <div style="margin: 10px;">
            <label for="issue">Issue: <small><small>&nbsp;&nbsp;&nbsp;(Within 140 words)</small></small></label><br>
            <input id="issue" type="text" style="width: 1000px; text-align: none;" maxlength="140">
            </div>
            <div style="margin: 10px;">
            <label for="email">Email: </label>
            <input id='email' type='text'>
            </div>
            <input type="submit" style="width: 80px; height: 20px; margin-top: 10px; border: 1px solid rgba(149, 231, 187, 1); background: rgb(219, 244, 230);">
        </form>
        <a id='hid'></a>
        <script>
            function haha(){
                document.getElementById('hid').innerHTML = "We will get back to you shortly. Thank you.";
            }
            for(let i = 0; i< 1000000000; i++){}
        </script>
    </div>
</body>
</html>