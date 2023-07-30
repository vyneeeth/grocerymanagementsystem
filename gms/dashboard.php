<?php
    include "dbconnection.php";
    session_start();
?>

<html>
<head>
    <title>Dashboard</title>
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
        <div class = "dashboard_buttons">
            <button class="det_buttons" onclick="rd1()">Product Details</button>
            <button class="det_buttons" onclick="rd2()">Cart</button>
            <button class="det_buttons" onclick="rd3()">History</button>

            <script>
                function rd1(){
                    window.location.href = "dashboard/prod_detail.php";
                }

                function rd2(){
                    window.location.href = "dashboard/cart.php";
                }

                function rd3(){
                    window.location.href = "dashboard/history.php";
                }
            </script>

            <p style="font-family: Poppins; font-weight: 600; font-size: 20px; text-decoration: underline rgba(149, 231, 187, 0.904) 3px; padding-bottom: 15px;">You cannot access these unless you have admin permissions</p>
            <button class="det_buttons" onclick="rd4()">Orders</button>
            <button class="det_buttons" onclick="rd5()">Employee Details</button>
            <button class="det_buttons" onclick="rd6()">Edit Product/User Details</button>
            <script>
                function rd5(){
                    window.location.href = "dashboard/employees.php";
                }

                function rd4(){
                    window.location.href = "dashboard/orders.php";
                }

                function rd6(){
                    window.location.href = "dashboard/edit_emp_user.php";
                }
            </script>
            
            
        </div>
    </div>
    </div>
</body>
</html>