<?php  
    $conn=mysqli_connect('localhost', 'root', '', 'pharmacy');
    if(!$conn){
            die("connection not done". mysqli_connect_error());  
    }
    if($conn){
        echo "Connection successful";
    }
    $success = false;

    if(isset($_POST['submit'])){  
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $email=$_POST['email'];  
        $phone = $_POST['phone'];
        $password=$_POST['password'];  
    
        $sql = "INSERT INTO `users` (`id`, `first_name`, `last_name`, `gender`, `dob`, `email`, `phone`, `address`, `password`, `roles_id`, `salary`, `time`) VALUES (NULL, '$first_name', '$last_name', '$gender', '$dob', '$email', '$phone', 'NA', '$password', '3', '0', current_timestamp())";
            
        $result = mysqli_query($conn, $sql);
            
        if (!$result){
            die("insert error". mysqli_query());
        }
        else{
            $success = true;

            echo "<script>alert('Welcome ".$first_name." Now please login ot get started!');</script>";
            header("Location: /PMS-main/sign-in/signin.html");
            
        }
        
    }
?> 

