<?php


$category =$_GET['category'];
$connection=mysqli_connect("localhost","root","","set");
$data="SELECT * FROM `book_data` WHERE `category` LIKE '$category'";
$result=mysqli_query($connection,$data);




  

    
?>

<html>
<head>
<style>
.notes-card img{
    height: 100%;
    width: 120px;
}

.notes-form{
    position: absolute;
    right:10px;
    
    display:flex;
    
}
.download-button{
  margin-right:10px;
}
.Submit-button{
    position: absolute;
    right:10px;
}


.notes-card:hover{
       box-shadow: 0 0 8px #131212;
}
.notes-card{
    display: flex;
  transition-property: box-shadow;
  transition-duration: 0.3s;
  transition-delay: 0.1s;
    box-shadow: 0 0 1px #808080;
    padding-left: 0px;
    width: 100%;
    height: 180px;
    background-color: white;
    margin-bottom: 20px;
   
}
.notes-card .info-holder p{
    margin-right: 20px;
    
}
.notes-data{
    display: block;
    width: 100%;
    padding-left: 5px;
}
.notes-data h2{
    position: relative;
    top: 10px;
    font-size: 16px;
   
}
.notes-data p{
    padding-top: 0px;
    font-size: 10px;
    font-size: 16px;
    font-weight: 300;
     overflow: hidden;
}
.notes-data b{
    color: black;
}
.download-button, .view-button{
    height: 30px;
    border: none;
    width: 80px;
       bottom: 10px;
       background-color: #00a5ec;
       color: white;
       
}.notes-data .info-holder{
    display: flex;
    
}
.rating-holder img{
    height: 20px;
    width: 20px;
}
.button-holder{
    text-align: right;
    width: 100%;
    position: relative;
    bottom: 50px;

}
.rating-holder{
     margin-top: -15px
}
.view-button{
    position: relative;
    right: 10px;
    font-size: 10px;
}
.download-button{
     position: relative;
    right: 10px;
    font-size: 10px;
}

@media only screen and (max-width:575px){
    .notes-card{
        width: 100%;
    }
    #notes-section{
        width: 100%;
        padding-left: 0px;
    }
    .notes-data h2{
    
    font-size: 14px;
   
}
.button-holder{
    margin-top: 55px;
}
.notes-data p{
 
    font-size: 11px;
    
}
.info-holder{
    margin-top: -15px;
}
}
</style>
</head>
<body>

<div id="notes-section">

     
    <!--NOTES CARD START-->
    <?php

    
    $num_rows = 1;
    $total_rows = mysqli_num_rows($result);
      while ($num_rows <= $total_rows) {
$num_rows++ ;
$row = mysqli_fetch_array($result);
        ?>
    <div class="notes-card">
        
        <img src="<?php echo $row['image_url'];?>">
        <div class="notes-data"> 
        <h2><?php echo $row['book_title'];?></h2>
        <div>
            
            
        </div><p style="overflow-y: hidden;height: 60px;"><?php echo $row['Desciption'];?></p>
        <div class="rating-holder">
            <img src="./assets/images/star-orange.png">
            <img src="./assets/images/star-orange.png">
            <img src="./assets/images/star-orange.png">
            <img src="./assets/images/star-orange.png">
            <img src="./assets/images/star-orange.png">
            
        </div>
        <div class="info-holder">
            <p><?php echo $row['size'];?></p> 
            <p><?php echo $row['pages'];?></p>
            <p>Reviews:<?php echo $row['reviews'];?></p>
        </div>
         <div class="button-holder">
         <form action="book-description.php" method="GET" class="notes-form">
           <a href="<?php echo $row['book_pdf_url']; ?>">  <button class="download-button button-hover" type="button">Download</button></a>
          
             <BUTTON class="view-button button-hover" type="submit"  name="id" value="<?php echo $row['book_id'];?>">Read More</BUTTON>

          
             </form>
            
         </div>
    </div>  
    </div>

 <?php } ?>
    
    <!--NOTES CARD END-->
    

       
  

    
  
    
    
    
</div>

</body>
</html>