<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Foody</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
    
<?php
include("dbcon.php");
include("header.php");


?>
     <!-- end header inner -->

     <!-- end header -->
     <section class="slider_section">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-bg">
                     <span>Foody out there</span>
                      <h1>Your test , our preferance</h1>
                      <p>Some Featured food that got high impression last week , do you like it? </p>
                     <button class="btn btn-secondary">Buy</button>
                      
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="images_box">
                      <figure><img src="images/food6.jpg" style="height: 600px;"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">

                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-bg">
                       <span>Foody out there</span>
                      <h1>Your test , our preferance</h1>
                      <p>Some Featured food that got high impression last week , do you like it? </p>
                     <button class="btn btn-secondary">Buy</button>
                    </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="images_box">
                      <figure><img src="images/food7.jpg" style="height: 600px;"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</section>
</div>
</header>



<!-- about  -->
<div id="about" class="about">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <h2>About us</h2>
          <p>Foody started in 2021 .Foody is an Food derving  platform . Our customer can choice his/her desired food from our website and buy it . Customer satisfaction is our main goal . we will try our level best to provide high quality food.</p>
          
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_rl">
        <div class="about-box_img">
          <figure><img src="images/food1.jpg" alt="#" /></figure>
        </div>
      </div>
    </div>

  </div>
</div>












<div class="cont">
<?php
      $j = 0;
      $k = 0;
      $i = 0;
$qr="SELECT * FROM `product` WHERE category IN ('Men', 'Women', 'Children') order by category desc;";
  $qp=mysqli_query($link,$qr);
   if(mysqli_num_rows($qp)>0){
    while($raw=mysqli_fetch_assoc($qp)){
      
      
    ?>
<?php

if($raw['category'] == 'Women'){
  
  //   if($i==0){
  //   echo"<div width='100%' class='hdt'><h1 class='ch'>Women</h1></div>";
    
    
  // }
 
?>
  <div class="card">
      <img src="img/women/<?php echo $raw['img']; ?>" width="100%" alt="">
    <p>
      <?php echo $raw['title']; ?>
    </p>
    <!-- <h5>Category :<?php echo $raw['category']; ?></h5> -->
    <h4><?php echo $raw['price']; ?></h4>
    <button><a href="cart.php?no=".<?php echo $raw['no']; ?>>Add to Cart</a></button>
  </div>
  <?php  
// $i++;
// if($i==6){echo"<div width='100%'></div>";}

}  ?>

<?php
if($raw['category'] == 'Men'){
  //    if($j==0){
  //   echo"<h1 class='ch'>Men</h1>";
    
    
  // }

?>
  <div class="card">
      <img src="img/men/<?php echo $raw['img']; ?>" width="100%" alt="">
    <p>
      <?php echo $raw['title']; ?>
    </p>
    <!-- <h5>Category :<?php echo $raw['category']; ?></h5> -->
    <h4><?php echo $raw['price']; ?></h4>
    <button><a href="cart.php?no=".<?php echo $raw['no']; ?>>Add to Cart</a></button>
  </div>
  <?php  
// $j++;
// if($j==6){echo"<div width='100%'></div>";}

} ?>



  <?php
if($raw['category'] == 'Children'){
  // if($k==0){
  //   echo"<div width='100%' class='hdt'><h1 class='ch'>Children</h1></div>";
    
    
  // } 
  
?>
  <div class="card">
      <img src="img/child/<?php echo $raw['img']; ?>" width="100%" alt="">
    <p>
      <?php echo $raw['title']; ?>
    </p>
    <!-- <h5>Category :<?php echo $raw['category']; ?></h5> -->
    <h4><?php echo $raw['price']; ?></h4>
    <button><a href="cart.php?no=".<?php echo $raw['no']; ?>>Add to Cart</a></button>
  </div>
  <?php  
// $k++;
// if($k==6){echo"<div width='100%'></div>";}

} ?>
  
<?php
}
  }

?>



</div>

<!--  footer -->
    <footer>
      <div class="footer ">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
             <a href="developed_by.php" class="logo_footer"> <button class="btn btn-primary">Developed By</button></a>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 ">
                  <div class="address">
                    <h3>Address </h3>
                    <ul class="loca">
                      <li>
                        <a href="#"></a>You can communicate with us
                        <br>through the given medium  </li>
                        <li>
                          <a href="#"></a>(call: 01848315008) </li>
                          <li>
                            <a href="#"></a>gmail: saifulislamraihan64@gmail.com</li>
                            
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="address">
                          <h3>Social Link</h3>
                          <ul class="Menu_footer">
                            <li class="active"> <a href="#">Twitter</a> </li>
                            <li><a href="https://www.facebook.com/AlakarDokan">Facebook</a> </li>
                            <li><a href="#">Instagram</a> </li>
                            <li><a href="#">Linkdin</a> </li>
                          </ul>
                        </div>
                      </div>
                     

                      <div class="col-lg-4 col-md-6 col-sm-6 ">
                        <div class="address">
                          <h3>Newsletter</h3>
                           <form class="news">
                           <input class="newslatter" placeholder="Enter your email" type="text" name=" Enter your email">
                            <button class="submit">Subscribe</button>
                            </form>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
              <div class="copyright">
                <div class="container">
                  <p>Copyright © 2021 by AlakarDokan</p>
                </div>
              </div>
            </div>
          </footer>
          <!-- end footer -->
          <!-- Javascript files-->
          <script src="js/jquery.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.bundle.min.js"></script>
          <script src="js/jquery-3.0.0.min.js"></script>
          <script src="js/plugin.js"></script>
          <!-- sidebar -->
          <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="js/custom.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


          <script>
// This example adds a marker to indicate the position of Bondi Beach in Sydney,
// Australia.
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 11,
    center: {
      lat: 40.645037,
      lng: -73.880224
    },
  });

  var image = 'images/maps-and-flags.png';
  var beachMarker = new google.maps.Marker({
    position: {
      lat: 40.645037,
      lng: -73.880224
    },
    map: map,
    icon: image
  });
}
</script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->



</body>

</html>