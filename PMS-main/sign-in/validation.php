<?php
$conn = mysqli_connect("localhost","root", "", "pharmacy");
if (!$conn){
    die("connect error".mysqli_connect_error());
}


if(isset($_POST['submit'])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
      
    if(( $email == 'admin@gmail.com' and $password == 'admin') ||  ( $email == 'owner@gmail.com' and $password == 'owner')){ 
    
        $sql = "select * from `users` where `email` = '$email' AND `password` = '$password' ";
        $result1 = mysqli_query($conn, $sql);
        if(!$result1){
            die("unsuccessful" . mysqli_error());
        }
        if($result1){ 
            echo "Successful";
            header("location: /PMS-main/admin-dashboard/dashboard.php");
           
        }
    } 
    else{
        $sql1 = "SELECT * FROM `users` WHERE users.email = '$email' and users.password = '$password'";
        $result2 = mysqli_query($conn, $sql1);
        
        if(mysqli_num_rows($result2)>0){
            header("location: /PMS-main/userDashboard/dashboard1.php");
        }
        else{
            header("location: /PMS-main/sign-in/signin.html");
        }
        
    }
}
?>
 