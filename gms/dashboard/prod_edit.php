<?php
    include "../dbconnection.php";
    session_start();
?>

<html>
<head>
    <title>Edit Products</title>
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
        <form action='prod_edit.php' method='post' onsubmit='return edit1()' style="display: flex; flex-direction: column; font-family: Poppins; font-weight: 600;">
            <div style="margin: 10px;">
            <label for='id'>ID:</label>
            <input type='text' name='id' >
            </div>
            <div style="margin: 10px;">
            <label for='Name'>Name:</label>
            <input type='text' name='Name'>
            </div>
            <div style="margin: 10px;">
            <label for='qty'>Quantity: </label>
            <input type='number' name='qty'>
            </div>
            <div style="margin: 10px;">
            <label for='price'>Price: </label>
            <input type='text' name='price'>
            </div>
            <div style="margin: 10px;">
            <label for='cat'>Category: </label>
            <input type='text' name='cat'>
            </div>
            <input type="submit" style="width: 80px; height: 20px; margin-top: 10px; border: 1px solid rgba(149, 231, 187, 1); background: rgb(219, 244, 230);">
        </form>
        <p id='hid'></p>
        <script>
            function edit1(){
            <?php
                $nam = $_POST['Name'];
                $id = $_POST['id'];
                $qty = $_POST['qty'];
                $price = $_POST['price'];
                $cat = $_POST['cat'];
                $sql = "UPDATE product SET productname=?, quantity=?, price=?, category=? WHERE productid=?";
                $stmt= $conn->prepare($sql);
                $stmt->bind_param("sidsi", $nam, $qty, $price, $cat, $id);
                $stmt->execute();
            ?>
            }
            document.getElementById('hid').innerHTML = "SUCCESS!";
        </script>
    </div>
</body>
</html>