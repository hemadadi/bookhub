<?php
session_start();
$connection=mysqli_connect("localhost","root","","set");
$data="SELECT * FROM `book_data`";
$result=mysqli_query($connection,$data);

?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="./assets/css/index.css">
</head>

<body> 
    <header>
        <h2>Welcome !</h2>
    <h3> <?php if(isset($_SESSION['emailid'])){
echo $_SESSION['emailid'];

    }
else{
    echo "User";
}

    ?></h3>
        <h1> BOOK-WARNS</h1>
    </header>

 
    <div class="navbar">
      
        <a href="#home">Home</a>
       
        <div class="dropdown">
          <button class="dropbtn">Genres
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
          <form action="genres.php" method="GET" >
              <div class="dropdown-buttons">
            <button value="action and adventures" name="category">Actions and Adventures</button>

            <button value="Science Fiction" name="category">Science fiction</button>
            <button value="Classic" name="category">Classics</button>
            <button value="Comic" name="category">Comics</button>
            <button value="Cook Books" name="category">Cookbooks</button>
            <button value="Detective & Mystery" name="category">Detective and Mystery</button>
            <button value="Fantasy" name="category">Fantasy</button>
            <button value="Historical fiction" name="category">Historical Fiction</button>
            <button value="graphic novel" name="category">Graphic Novel</button>
            <button value="Autobiography" name="category">Autobiography</button>
            <button value="Romance" name="category">Romance</button>
            
            </div>
            </form>
          </div>
        </div> 
        <a href="#">About</a>
        <a href="login.php">Login</a>
        <a href="logout.php" style="float:right">Logout</a>
     

      </div>
    </div>

     <br><br>

    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="./assets/images/battle.png" style="width:100%">
            <div class="text">
                <strong>ACTION</strong></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="./assets/images/horrorgallery.jpg" style="width:100%; height:100%";">
            <div class="text"><strong>HORROR</strong></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="./assets/images/scifi7.jpg" style="width:100%">
            <div class="text">
                <strong>SCIFI</strong></div>
        </div>
        

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }

     </script>
     <div class="font">
         <h1><strong>Book Gallery</strong></h1>
     </div>
<div class="row">
    <div class="field-content">
    <form action="book-description.php" method="get">
    <?php
$number=1;
$number_row=mysqli_num_rows($result);
do{
    $row=mysqli_fetch_array($result);
    $number++;
?>

<button name="id"class="books-gallery" value="<?php echo $row['book_id'];?>" type="submit">

   <div class="column">
        <img src="<?php echo $row['image_url'];?>" alt="Snow"  width="147" height="220">
        
       <h4> <?php echo $row['book_title'];?></h4>

    
    </div>
    </button>

            
          <?php
}while($number<=$number_row);
?>
  </form>
  </div>

  <footer>
            <div class="pagination">
             
              <a href="#">&laquo;</a>
              <a  href="index.php">1</a>
              
              <a href="index-1.php"class="active">2</a>
              <a href="index-1.php">3</a>
              <a href="index.php">4</a>
              
              <a href="index-1.php">&raquo;</a>
           
            </div>
          </footer>
</body>

</html>