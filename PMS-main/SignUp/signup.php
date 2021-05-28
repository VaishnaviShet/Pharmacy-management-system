<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>SIGN-In</title>
</head>
<body>
    <div class="layer">
       
        <form class="form-box" action="sign_upValid.php" method="post">
            
            <h1>Sign Up Now</h1><br>
            <input type="text" placeholder="First Name" name="first_name" id="first_name"  autocomplete="off"maxlength="15"required > <br> <br>
            
            <input type="text" placeholder="Last Name" name="last_name" id="last_name"  autocomplete="off"maxlength="15"required > <br> <br>
            
            <input type="text" placeholder="Gender" name="gender" id="gender"  autocomplete="off"maxlength="15"required > <br> <br>
            
            <input type="email" placeholder="Email" name="email"id="email" maxlength="20" autocomplete="off" required><br> <br> 
            
            <input type="password" placeholder="Password" name="password"id="password" maxlength="15"  required><br> <br>
            
            <input type="date" placeholder="Date of birth" name="dob" id="dob"  autocomplete="off" maxlength="5"required > <br><br>
            
            <input type="number" placeholder="Mobile Number" name="phone" id="phone"  autocomplete="off" maxlength="10"required > <br><br>
            
           <input type="submit" name="submit" id="submit" placeholder="Submit"> <br> <br> 
            
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label> 
            <div>
                <br><br>
                <p>Already have account?? Then Login.</p>
                <button><a href="../sign-in/signin.html">Login</a></button>
            </div>
            
            
        </form>
    </div>

    
</body>
</html>