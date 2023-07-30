<?php
    include "../dbconnection.php";
    session_start();
?>

<html>
<head>
    <title>Edit Address</title>
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
        <form action='adr_edit.php' method='post' onsubmit='return edit1()' style="display: flex; flex-direction: column; font-family: Poppins; font-weight: 600;">
            <div style="margin: 10px;">
            <label for='id'>ID:</label>
            <input type='text' name='id' >
            </div>
            <div style="margin: 10px;">
            <label for='Name'>Address:</label>
            <input type='text' name='Name'>
            </div>
            <div style="margin: 10px;">
            <label for='zip'>Zip: </label>
            <input type='number' name='zip'>
            </div>
            <div style="margin: 10px;">
            <label for='city'>City: </label>
            <input type='text' name='city'>
            </div>
            <div style="margin: 10px;">
            <label for='st'>State: </label>
            <input type='text' name='st'>
            </div>
            <input type="submit" style="width: 80px; height: 20px; margin-top: 10px; border: 1px solid rgba(149, 231, 187, 1); background: rgb(219, 244, 230);">
        </form>
        <p id='hid'></p>
        <script>
            function edit1(){
            <?php
                $adre = $_POST['Name'];
                $id = $_POST['id'];
                $zip = $_POST['zip'];
                $city = $_POST['city'];
                $st = $_POST['st'];
                $sql = "UPDATE address SET address=?, zip=?, city=?, state=? WHERE addressid=?";
                $stmt= $conn->prepare($sql);
                $stmt->bind_param("sissi", $adre, $zip, $city, $st, $id);
                $stmt->execute();
            ?>
            }
            document.getElementById('hid').innerHTML = "SUCCESS!";
        </script>
    </div>
</body>
</html>