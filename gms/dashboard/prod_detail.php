<?php
    include "../dbconnection.php";
    session_start();
?>

<html>
<head>
    <title>Product Details</title>
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
        <table>
        <tr><th>ID</th><th>Name</th><th>Qty</th><th>Price</th><th>Categ.</th></tr>
        <?php
            $command = "select * from product;";
            $table = mysqli_query($conn, $command);
            $res_check = mysqli_num_rows($table);
            $i = $res_check;
            if($i > 0){
                while($i > 0){
                    $row = (mysqli_fetch_assoc($table));
                    echo "<tr><td>$row[productid]</td><td>$row[productname]</td><td>$row[quantity]</td><td>$row[price]</td><td>$row[category]</td></tr>";
                    $i -= 1;
                }
            }
        ?>
        </table>
    </div>
</body>
</html>