<?php

$id=$_GET['id'];
include('../dbcon.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Product Page</title>
  <!--google font-->
 <link rel="preconnect" href="https://fonts.googleapis.com">


  <style>
   
 

 .mul{
  width: 90%;
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 10px;
 }
.mul div{
  border: 2px solid #d3cccc;
  border-radius: .2rem;
}
.pro-txt img{
  width: 100%;
  cursor: pointer;
  
}
.pro-txt{
  border: 2px solid ##e3e3e3;
  padding: 0.7rem;
  padding-top: 0.1rem;
  padding-bottom: 0.2rem;
}
.pro-txt .lair0{
  font-size: .85rem;
  font-weight: 400;
  margin-top: .1rem;
}

.pro-txt .lair1{
  font-size: .85rem;
  font-weight: 400;
  margin-top: -0.5rem;
}

.pro-txt .lair{
  font-size: .85rem;
  font-weight: 400;
  margin-top: -0.5rem;
}

.pro-txt a{
  text-decoration: none;
}

/*popup image*/

.popup-image{
  
  position: fixed;
  top: 0;
  left: 0;
   width: 100%;
   height: 100%;
  background: rgba(0, 0, 0, .9);
  display: none;
  
}
.popup-image .popim{
  width: 90%;
  margin: 10rem auto;
}
.popup-image img{
  width: 100%;
  height: 100%;
  border: 5px solid grey;
}

.popup-image .spr{
  position: absolute;
  top: 0;
  right: 1rem;
  font-size: 1.7rem;
  font-weight: bolder;
  color: #fff;
  cursor: pointer;
  z-index: 100;
  margin-top: 7rem;
  
}


/*Media Query*/

@media(min-width: 448px){
.popup-image .popim{
  width: 70%;
  margin: 10rem auto;
}
}

@media(min-width: 600px){
  .mul{
    grid-template-columns: repeat(3, 1fr);
   
  }
}


@media(min-width: 700px){
  .mul{
    grid-template-columns: repeat(4, 1fr);
   
  }
}


@media(min-width: 750px){
.popup-image .popim{
  width: 50%;
  margin: 10rem auto;
}
}


@media(min-width: 850px){
  .mul{
    grid-template-columns: repeat(4, 1fr);
   
  }
}

@media(min-width: 1027px){
  .mul{
    grid-template-columns: repeat(5, 1fr);
   
  }
}



@media(min-width: 1114px){
.popup-image .popim{
  width: 50%;
  margin: 10rem auto;
}
}

@media(min-width: 1100px){
  .mul{
    grid-template-columns: repeat(5, 1fr);
   
  }
}


@media(min-width: 1162px){
.popup-image .popim{
  width: 50%;
  margin: 10rem auto;
}
}


@media(min-width: 1219px){
.popup-image .popim{
  width: 40%;
  margin: 10rem auto;
}
}



@media(min-width: 1300px){
  .mul{
    grid-template-columns: repeat(6, 1fr);
   
  }

.popup-image .popim{
  width: 50%;
  margin: 10rem auto;
}
}

@media(min-width: 1340px){
.popup-image .popim{
  width: 27%;
  margin: 10rem auto;
}
}

@media(min-width: 1366px){
.popup-image .popim{
  width: 27%;
  margin: 10rem auto;
}
}

@media(min-width: 1437px){
.popup-image .popim{
  width: 40%;
  margin: 10rem auto;
}
}


@media(min-width: 1564px){
.popup-image .popim{
  width: 30%;
  margin: 10rem auto;
}
}







 </style>

  


</head>
<body>


<section>
  <div class="mul">
    
 
      <?php
$run="select * from product where id=$id";
$ran=mysqli_query($link,$run);
while($row=mysqli_fetch_array($ran)){
  ?>

  <div class="pro-txt">
      <img src="images/<?php echo $row['img']; ?>">
   
    <h2 class="lair0">Size : XL</h2>
    <h2 class="lair1">Type : Cotton</h2>
    
      

    
    <h2 class="lair">Price : <?php echo $row['price']; ?></h2>
    
    <a  href="">Order</a>
  
   
    
   </div>

  


 <?php
  }
  ?>
   </div>
</section>


  <div class="popup-image">
    <div class="spr">
      &times;
    </div>
    
    <div class="popim">
       <img src="images/saiful.jpg">
    </div>
   
  </div>

 


  <script>
  document.querySelectorAll('.pro-txt img').forEach(image=>{
    image.onclick=()=>{
      document.querySelector('.popup-image').style.display='block';
      document.querySelector('.popup-image .popim img').src=image.getAttribute('src');
    }
  });

 document.querySelector('.popup-image .spr').onclick=()=>{
  document.querySelector('.popup-image').style.display='none';
 }

</script>
</body>
</html>