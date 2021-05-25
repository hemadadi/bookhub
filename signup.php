<?php

$connection=mysqli_connect("localhost","root","","set");
if (isset($_POST['register'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password_repeat=$_POST['password_repeat'];
    if($password==$password_repeat){

        $data="INSERT INTO `users-1`(`email`, `password`) VALUES ('$email','$password')";
        $result=mysqli_query($connection,$data);
        if($result){
            echo "registration successful";
            header("Location:login.php");
            $_SESSION['emailid'] = $email;
            
        }
       
   

}
}

?>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="./assets/css/signup.css">
</head>

<body>

    <div class="container">
        <h1>Registration Form</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <div class="con">
        <form action="#" method="post">
            <label for="email"><b>Email</b></label><br>
            <input type="text" placeholder="Enter Email" align="left" name="email" id="email" required><br>

            <label for="psw"><b>Password</b></label><br>
            <input type="password" placeholder="Enter Password" align="left" name="password" id="psw" required><br>

            <label for="psw-repeat"><b>Repeat Password</b></label><br>
            <input type="password" placeholder="Repeat Password" name="password_repeat" id="psw-repeat" required><br>
            <hr>
        </div>
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        
            <button type="submit" name="register" class="registerbtn">Register</button>
           
        </form>
    </div>

    <div class="container-1 signin">
        <p>Already have an account? <a href="login.php">Sign in</a>.</p>
    </div>
</body>

</html>