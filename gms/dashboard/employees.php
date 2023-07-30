<?php
    include "../dbconnection.php";
    session_start();
    if($_SESSION['auth'] != 'admin'){
        header("Location: "."../na.php");
    }
?>

<html>
<head>
    <title>Employees</title>
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
        <tr><th>ID</th><th>Name</th><th>Shift</th><th>Salary</th></tr>
        <?php
            $command = "select * from employees;";
            $table = mysqli_query($conn, $command);
            $res_check = mysqli_num_rows($table);
            $i = $res_check;
            if($i > 0){
                while($i > 0){
                    $row = (mysqli_fetch_assoc($table));
                    echo "<tr><td>$row[employeeid]</td><td>$row[employeename]</td><td>$row[shift]</td><td>$row[salary]</td></tr>";
                    $i -= 1;
                }
            }
        ?>
        </table>
        <button style="width: 80px; height: 20px; margin-top: 10px; border: 1px solid rgba(149, 231, 187, 1); background: rgb(219, 244, 230);" onclick='edit()'>Edit</button>
        <button style="width: 80px; height: 20px; margin-top: 10px; border: 1px solid rgba(149, 231, 187, 1); background: rgb(219, 244, 230);" onclick='del()'>Delete</button>
        <button style="width: 80px; height: 20px; margin-top: 10px; border: 1px solid rgba(149, 231, 187, 1); background: rgb(219, 244, 230);" onclick='add()'>Add</button>
        <script>
            function edit(){
                window.location.href = "emp_edit.php"
            }

            function del(){
                window.location.href = "emp_del.php"
            }

            function add(){
                window.location.href = "emp_add.php"
            }
        </script>
    </div>
</body>
</html>