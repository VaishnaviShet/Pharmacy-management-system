<?php
session_start();
?>

<?php 
$conn = mysqli_connect("localhost","root","","pharmacy");

if(!$conn){
    die("Connection Error" . mysqli_connect_error());
}

?>

<?php

    $sql2 = "SELECT * FROM `medicine`";
    $result2 = mysqli_query($conn, $sql2);
    $count_med = mysqli_num_rows($result2);

    $sql3 = "SELECT * FROM `med_type`";
    $result3 = mysqli_query($conn, $sql3);
    $count_type = mysqli_num_rows($result3);
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <link rel="stylesheet" type="text/css" href="./dashboard1.css">
   
</head>
<body>
    <div class="grid-container">
        <header class="header">
            <div class="header__search">
                <h4>Pharmacy Management System</h4>
            </div>
            <h3>User panel</h3>
            <div class="dropdown">
                <button class="dropbtn">Profile</button>
                <div class="dropdown-content">
                    <a href="#">Employee</a>
                    <a href="../sign-in/signin.html">Sign Out</a>
    
                </div>
            </div>
        </header>
        <aside class="sidenav">
            <ul class="sidenav__list">
                
                <li class="sidenav__list-item"> <a href="dashboard1.php">Dashboard</a></li>
<!--                <li class="sidenav__list-item"><a href="/pms1/com/com.php">Company</a></li>-->
                <li class="sidenav__list-item"><a href="../pms1/med/med.php">Medicines</a></li>
                <li class="sidenav__list-item"><a href="../pms1/med_type/mtype.php">Medicine types</a></li>
<!--                <li class="sidenav__list-item"><a href="/pms1/emp/emp.php">Pharmacists</a></li>-->
    
            </ul>
        </aside>
        <main class="main">
    
            <div class="main-overview">
                
                <div class="overviewcard">
                    <div class="overviewcard__icon">Total Medicines</div>
                    <div class="overviewcard__info"><?php echo $count_med ;?></div>
                </div>
                <div class="overviewcard">
                    <div class="overviewcard__icon">Total types</div>
                    <div class="overviewcard__info"><?php echo $count_type ;?></div>
                </div>
            </div>
        </main>
        <footer class="footer">
    
            <div class="footer__signature"></div>
        </footer>
    </div>
</body>
</html>