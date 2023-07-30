<?php
    include "../dbconnection.php";
    session_start();
    $_SESSION['items'] = array();
    $_SESSION['costs'] = array();
?>

<html>
<head>
    <title>Cart</title>
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
        <form action="cart.php" onsubmit='somefunc()' method='GET'>
            <table>
            <tr><th>Name</th><th>Price</th><th>Categ.</th><th>Add Item</th></tr>
            <?php
                $command = "select * from product;";
                $table = mysqli_query($conn, $command);
                $res_check = mysqli_num_rows($table);
                $_SESSION['no_of_rows'] = $res_check;
                $i = 0;
                if($res_check > 0){
                    while($i < $res_check){
                        $row = (mysqli_fetch_assoc($table));
                        echo "<tr><td>$row[productname]</td><td>$row[price]</td><td>$row[category]</td><td><input class='ip' max=$row[quantity] min=0 type='number' name='$row[productid]' value='0'></td></tr>";
                        $i += 1;
                    }
                }
            ?>
            </table>
            <input type="Submit" class='chk' value="Proceed to Order">
        </form>
        <p id='hid'></p>
        <script>
            function somefunc() {
                document.getElementById('hid').innerHTML = "Success!";
                <?php
                    $i = 0;
                    $tot_items = 0;
                    while($i < $_SESSION['no_of_rows']){
                        $_SESSION['items'][$i] = $_GET[$i+1];
                        $i += 1;
                    }
                    $i = 0;
                    $command = "select price from product;";
                    $table = mysqli_query($conn, $command);
                    while($i < $_SESSION['no_of_rows']){
                        $row = (mysqli_fetch_assoc($table));
                        $_SESSION['costs'][$i] = $row['price'];
                        $i += 1;
                    }
                    $i = 0;
                    $amt = 0;
                    while($i < $_SESSION['no_of_rows']){
                        $amt = $amt + $_SESSION['costs'][$i] * $_SESSION['items'][$i];
                        $tot_items += $_SESSION['items'][$i];
                        $i += 1;
                    }
                    $date1 = strval(date('Y-m-d'));
                    $minute1 = strval(date('H:i:s',strtotime("+330 minutes")));
                    $sql = "insert into orders (amt, userid, totalitems, date_time, timee) values (?, ?, ?, ?, ?)";
                    $stmt= $conn->prepare($sql);
                    $stmt->bind_param("iiiss", $amt, $_SESSION['uid'], $tot_items, $date1, $minute1);
                    $stmt->execute();
                ?>
            }
        </script>
    </div>
</body>
</html>