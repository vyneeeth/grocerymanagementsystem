<?php
    include "../dbconnection.php";
    session_start();
    if($_SESSION['auth'] != 'admin'){
        header("Location: "."../na.php");
    }
?>

<html>
<head>
    <title>Edit Stuff</title>
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
        <p style="font-family: Poppins; font-weight: 600; font-size: 20px; text-decoration: underline rgba(149, 231, 187, 0.904) 3px; padding-bottom: 15px;">User details:</p>
        <button onclick='rd7()' style="width: 150px; height: 20px; margin-top: 0px; border: 1px solid rgba(149, 231, 187, 1); background: rgb(219, 244, 230);">Edit User Details</button>
        <button onclick='rd8()' style="width: 150px; height: 20px; margin-top: 0px; border: 1px solid rgba(149, 231, 187, 1); background: rgb(219, 244, 230);">Add Users</button>
        <button onclick='rd9()' style="width: 150px; height: 20px; margin-top: 0px; border: 1px solid rgba(149, 231, 187, 1); background: rgb(219, 244, 230);">Delete Users</button>
        <button onclick='rd13()' style="width: 150px; height: 20px; margin-top: 0px; border: 1px solid rgba(149, 231, 187, 1); background: rgb(219, 244, 230);">Edit Address</button>
        <button onclick='rd14()' style="width: 150px; height: 20px; margin-top: 0px; border: 1px solid rgba(149, 231, 187, 1); background: rgb(219, 244, 230);">Add Address</button>
        <button onclick='rd15()' style="width: 150px; height: 20px; margin-top: 0px; border: 1px solid rgba(149, 231, 187, 1); background: rgb(219, 244, 230);">Delete Address</button>
        <script>
            function rd7(){
                window.location.href = "user_edit.php";
            }
            function rd8(){
                window.location.href = "user_add.php";
            }
            function rd9(){
                window.location.href = "user_del.php";
            }
            function rd13(){
                window.location.href = "adr_edit.php";
            }
            function rd14(){
                window.location.href = "adr_add.php";
            }
            function rd15(){
                window.location.href = "adr_del.php";
            }
        </script>

        <p style="font-family: Poppins; font-weight: 600; font-size: 20px; text-decoration: underline rgba(149, 231, 187, 0.904) 3px; padding-bottom: 15px; margin-top: 50px;">Product details:</p>
        <button onclick='rd10()' style="width: 150px; height: 20px; margin-top: 0px; border: 1px solid rgba(149, 231, 187, 1); background: rgb(219, 244, 230);">Edit Product Details</button>
        <button onclick='rd11()' style="width: 150px; height: 20px; margin-top: 0px; border: 1px solid rgba(149, 231, 187, 1); background: rgb(219, 244, 230);">Add Products</button>
        <button onclick='rd12()' style="width: 150px; height: 20px; margin-top: 0px; border: 1px solid rgba(149, 231, 187, 1); background: rgb(219, 244, 230);">Delete Products</button>
        <script>
            function rd10(){
                window.location.href = "prod_edit.php";
            }
            function rd11(){
                window.location.href = "prod_add.php";
            }
            function rd12(){
                window.location.href = "prod_del.php";
            }
        </script>