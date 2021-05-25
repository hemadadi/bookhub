<?php


$id = $_GET['id'];
    $connection=mysqli_connect("localhost","root","","set");
   
    
    $data="SELECT * FROM `book_data` WHERE `book_id` = $id";
    
    $result=mysqli_query($connection,$data);

    $row = mysqli_fetch_array($result);
    
 


?>
<html>
<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" type="text/css" href="./assets/css/books-description.css">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet">
<title>
book-description
</title>


</head>
<body>
    <div class="books">
 
        <div class="container-1">
    <div class="image-section">
   <a href="#"> <img src="<?php echo $row['image_url'];?>" alt=""></a>
   

    </div>
    <div class="content-box">
    <h1 class="heading-style"><strong>
   <?php echo $row['book_title'];?></strong>
    </h1>
<div class="rating">

 <div class="rating-start">
     <img src="./assets/images/star-orange.png">
            <img src="./assets/images/star-orange.png">
            <img src="./assets/images/star-orange.png">
            <img src="./assets/images/star-orange.png">
            <img src="./assets/images/star-orange.png">
     </div>
     <div class="share">
     <img src="./assets/images/share.png" alt="" class="share-image">
     <p>7569</p>
     </div>
     </div>
     <div class="description">
     <p ><?php echo $row['Desciption'];?></a>
     </p>
</div>
     <div class="copyrights">
     <div class="publish">
     <h4><strong>Author Name</strong></h4>
     <h3><?php echo $row['Author_name'];?></h3>
     </div>
     <div class="publish">
     <h4><strong>Language</strong></h4>
     <h3><?php echo $row['language'];?></h3>
     </div>
     <div class="publish">
     <h4><strong>Size</strong></h4>
     <h3><?php echo $row['size'];?></h3>

     </div>
     <div class="publish">
     <h4><strong>Pages</strong></h4>
     <h3><?php echo $row['pages'];?></h3>
     
     </div>
     
     <div class="publish">
     <h4><strong>Rating</strong></h4>
     <h3><?php echo $row['ratings'];?></h3>
     </div>
     
    
     </div>
   <div class="input-boxes">
       <div>
    <a href="<?php echo $row['book_pdf_url']; ?>" ><input type="submit" class="read" name="" id="" value="Download">
     </div>
     <div>
    
     </div>
     </div>
    </div>
</div>
    <div class="main-review-section">
        <div class="person-1">
            <h2>WRITE REVIEW</h2>
            <div class="icon">
                <img src="./assets/images/man.png"  class="person-2-image"alt="">
                <input type="text" class="text-comment" placeholder="Type Here">
            </div>
</div>
            <div class="submit-section">
            <div class="rating-star-1">
            <img src="./assets/images/star (1).png">
            <img src="./assets/images/star (1).png">
            <img src="./assets/images/star (1).png">
            <img src="./assets/images/star (1).png">
            <img src="./assets/images/star (1).png">
     </div>
     <input type="submit" class="review-submit" placeholder="Submit">
            </div>
        </div>
       
   
            </div>
    </div>

    </div>
    
</body>
</html>