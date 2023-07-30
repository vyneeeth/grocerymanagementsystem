<?php
    include "../dbconnection.php";
    session_start();
    if($_SESSION['auth'] != 'admin'){
        header("Location: "."../na.php");
    }
?>

<html>
<head>
    <title>Orders</title>
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
    <div class="pdc" style="overflow-y:auto; width: 700px;">
        <table style="height: 100vh; overflow: scroll;">
        <tr><th>OrderID</th><th>UserID</th><th>Total Items</th><th>Amount</th><th>Date</th><th>Time</th></tr>
        <?php
            $command = "select * from orders;";
            $table = mysqli_query($conn, $command);
            $res_check = mysqli_num_rows($table);
            $i = $res_check;
            if($i > 0){
                while($i > 0){
                    $row = (mysqli_fetch_assoc($table));
                    if($row['totalitems'] == 0){
                        $i -= 1;
                        continue;
                    }
                    echo "<tr><td>$row[orderid]</td><td>$row[userid]</td><td>$row[totalitems]</td><td>$row[amt]</td><td>$row[date_time]</td><td>$row[timee]</td></tr>";
                    $i -= 1;
                }
            }
        ?>
        </table>
    </div>
</body>
</html>