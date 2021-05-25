<?php
session_start();
$connection=mysqli_connect("localhost","root","","set");
if ($connection){
    
    if(isset($_POST['signup'])){
        header("Location:signup.php");
    }
    echo 'connected';
    if (isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
                                    
         
             $query    = "SELECT * FROM `users-1` WHERE `email` = '$email' AND `password` = '$password'";
             $result   = mysqli_query($connection, $query);



       $num_rows =mysqli_num_rows($result);

       if($num_rows > 0){

        echo 'loggedin';
        $_SESSION['emailid'] = $email;
        header("Location:index.php");
       }
       else{

        echo 'login failed';
       }
    }
       
}

?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="./assets/css/login.css">

</head>

<body>



    <header>
        <hgroup>
            <h1> BOOK-WARNS
                <div class="imgcontainer">
            </H1>



        </hgroup>


    </header>
    <section>



        <div class="container">
            <h1 class="hea"> Sign-in</h1>
            <h4>
<?php if (isset($_SESSION['emailid'])){

    echo "You have already logged in as ".$_SESSION['emailid']; 
} else{
        echo '';
    }
    ?>



            </h4>
            <form action="#" method="post">
            <label for="uname"><b></b></label><br>
            <input type="email" placeholder="Enter Email" name="email" required><br>

            <label for="psw"><b></b></label><br>
            <input type="password" placeholder="Enter Password" name="password" required><br>
            <div>
               
                    <button type="submit" name="login">Login</button><br>
                </form>
            </div>
            <div>
               
                  <a href="signup.php">  <button type="submit " value="signup">New User</button></a>
                </form>

            </div>
    </section>


    <footer id="about ">
        <p>for any queries:www.ebookstore.com</p>
    </footer>


</body>
</html>