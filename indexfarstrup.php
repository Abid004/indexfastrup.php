<?php
include("./function.php");
include("./controlle.php");
?>
<hr>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width. initial-scale=1.0">
        <title>Prototype(Farstrup Furniture A/S)</title>

</head>
<style>
  p { 
    text-align: center;
  }
  img { 
   
    position: relative;
    top: -1999px;
    width: 250px;
    border-radius: 40PX;
    float: right;
  
  }
  </style>
 <img1 src="images/pp.jpeg",>
 <img2 src="images/aa.jpeg",>
 <img3 src="images/ss.jpeg",>
 <img4 src="images/bear 6510.jpeg",>
 <img5 src="images/Cantate 6000.jpeg",>
 <img6 src="images/Cantate 6010.jpeg",>
 <img7 src="images/plus 5900.jpeg",>
 <img8 src="images/Plus5980.jpeg",>
 <img9 src="images/Plus 5060.jpeg",>
 <img10 src="images/Casa5197.jpeg",>
 <img11 src="images/edge 7900.jpeg",> 
 <img12 src="images/scala 5411.jpeg",>
 <img13 src="images/Senator5390&5391.jpeg",>
 <img14 src="images/Armstol182.jpeg",>
 <img15 src="images/Gyngestol183.jpeg",>


<body bgcolor="#008000">
  <form method="post">
    <input type="text" name="product">
    <butto type="submit">Add</button>

  <form>


  <ul>
    <?php foreach(getFromFile() as $i => $product) { ?>
        <li><?php echo $product;?>
        <a href="?i=<?php echo $i; ?>">delete</a>
        </li>
          <?php } print_r($_GET);
          ?>
  <ul>
 </body>
 </html>




        


    
