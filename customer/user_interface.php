<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Grid</title>
  <!--google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  
  <!--font aweasome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
<style>
  *{

    margin: 0;
    padding: 0;
    overflow-x: hidden;

  }

  body{

    font-family: 'Raleway', sans-serif;
  }
/*view shop card*/


  .contain{
    width: 90%;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
   justify-content: center;
   grid-gap: 15px;
   margin-top: .7rem;
  }

 .contain a{
  text-decoration: none;
 }

.contain .item{
  border: 1px #ccc solid;
  box-shadow: 1px 1px 2px #ccc;
  padding: 10px;
}

.sr{
  border: 1px solid grey;
  border-radius: 5px;
  margin: 2px 0;
  padding: 4px;
  font-size: 0.9rem;
  color:#606c38;
}
a.sr:hover{
  text-decoration: none;
}

.item h4{
  margin-bottom: .4rem;
  font-weight: 400;
}

.item p{
  font-size: 14px;
  color: var(--secodary-color);
  margin-bottom: 1.3rem;
}

/*hero Section*/
.jumbo-inner{
  width: 100%;
  background: #b5e48c;
}

.jumbo-inner h2{
  font-weight: 400;
  margin-bottom: 0.4rem;
}
.jumbo-inner .jumbo-txt{
  width: 90%;
  margin: 0 auto;
  padding: 0.6rem;
}

.jumbo-inner h2 .pl{
  margin-bottom: 0.4rem;
}

.jumbo-inner p{
  margin-top: 1rem;
  margin-bottom: 0.4rem;
}


.jumbo-inner .jumbo-btn{
  width: 90%;
  margin: 0 auto;
  padding: 1rem;
}

.jumbo-btn a{
  font-size: 1rem;
  text-decoration: none;
  border: 1px solid whitesmoke;
  border-radius: .2rem;
  padding: .3rem;
}

/*Search bar*/
.wrapper{
  width: 90%;
  margin: 0 auto;
  background: whitesmoke;
  margin-top: 1rem;
  padding: .6rem;
  margin-bottom: 1rem;
}

.wrapper-inpo{
  width: 90%;
  margin: 0 auto;
}
.wrapper-inpo input{
  width: 100%;
  padding: .1rem;
  border: none;
  outline: none;
  font-size: .8rem;
}

.wrapper-inpo input ::placeholder{
  font-size: .3rem;
}

.wrapper-inpo .fom{
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

/*sorry msg*/
.sorry{
  font-size: 20px;
  position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-60%,-50%);
}


/*alkar shop*/
.alakar_shop{
  width: 60%;
  margin: 0 auto;
  font-size: 0.96rem;
}

/*Media query*/

@media(min-width: 850px){
  .contain{
    grid-template-columns: repeat(3, 1fr);
   
  }

.alakar_shop{
  width: 60%;
  margin-left: 20rem;
}
}



@media(min-width: 1100px){
  .contain{
    grid-template-columns: repeat(4, 1fr);
   
  }

.alakar_shop{
  width: 60%;
  margin-left: 30rem;
}
}

@media(min-width: 1400px){


.alakar_shop{
  width: 60%;
  margin-left: 40rem;
}

}

</style>

<?php

session_start();

?>


    


</head>
<body>


<?php
include('../dbcon.php');
?>

<?php

if(!isset($_SESSION['name']))
{
  header("Location:../customer-registration.php");
}
?>
<section>
<div class="jumbo-inner">

 <div class="jumbo-txt">
   
 
  <h2>
    <?php
    echo"Welcome: ".$_SESSION['name'];
    ?>
  </h2>
  <h2 class="pl">Keep calm, Go outside , Buy good product.</h2> 
  <p>Search below to show your nearby shop.</p>
  
  </div>
  <div class="jumbo-btn">
    <a class="btn-one" href="logout.php">Logout</a>
  </div>

</div>
</section>





</div>

<!--search box-->
<section>
  <div class="wrapper">
<div class="wrapper-inpo">
   <form method="post" class="fom">
      <input type="text" placeholder="Search your nearby place.." name="search" class="searchbtn">
      <button type="submit" name="submit"class="but"><i class="fa fa-search"></i></button>
  </form>
</div>
 
</div>
</section>

<section>
  <div class="alakar_shop">
  <span>AlakarDokan shop is listed. </span>
  </div>

</section>
  

<section>

<div class="contain">

<?php
if(isset($_POST['submit'])){
  $st=mysqli_real_escape_string($link,$_POST['search']);
  $qr="select * from product where place like '%$st%'";
  $qp=mysqli_query($link,$qr);
  if(mysqli_num_rows($qp)>0){
    while($rw=mysqli_fetch_array($qp)){
    ?>

  <div class="item">
  <h4><?php echo $rw['shop']; ?></h4>
      <p>Address: <?php echo $rw['place']; ?></p>
      <a href="shop_product.php?id=<?php echo $rw['id'];?>" class="sr">View Product</a>
</div>


<?php
}
}
else{
  echo"<span class='sorry'>Sorry , No Shop is found</span>";
}
}
else{
?>


<?php
?>
<?php
$run="select * from product";
$ran=mysqli_query($link,$run);
while($row=mysqli_fetch_array($ran)){
  ?>


<div class="item">
  

 <h4><?php echo $row['shop']; ?></h4>
      <p>Address: <?php echo $row['place']; ?></p>
      <a href="shop_product.php?id=<?php echo $row['id'];?>" class="sr">View Product</a>

</div>

<?php
}
?>
<?php
}
?>
</div>


 
</section>


<script>
  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>


</body>
</html>









