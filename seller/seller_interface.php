

<?php


//$link=mysqli_connect("localhost","root","","AlakarDokan");
include('../dbcon.php');

?>



<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
 
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<!--custom css-->
<link rel="stylesheet" href="styles/style.css">



<!--font-aweasome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
<title>AlakarDokan</title>
<style type="text/css">

/*upper part of header*/
#start{
  
  font-style: italic;
  
}

/*footer*/
  #meto{
    padding-left: 0;
    list-style: none;
  }

  #footer ul a{
  color: #999999;
  padding: 20px 0;
}

#footer .social{
  text-align: left;
}

#footer .social a{
  margin: 0 10px 0 0;
  color: #fff;
  display: inline-block;
  width: 30px;
  height: 30px;
  border-radius: 15px;
  line-height: 30px;
  font-size: 15px;
  text-align: center;
  transform: all 0.2s ease-out;
  vertical-align: bottom;
  background-color: #555555;

}

#lau{
  
  padding: 10px;
  padding-left: -20px;
 
}

/*copyright*/
#copyright{
  background: #333;
  color: #ccc;
  padding: 20px;
  font-size: 12px;
}

#moa{
   margin-bottom: 10px;
}

/*breadcrumb*/
.breadcrumb{
  padding: 8px 15px;
  margin-top: 20px;
  margin-bottom: 20px;
  background-color: #ffffff;
  border-radius: 0;
  box-shadow: 0 1px 5px rgba(0,0,0,0.5);
}
.breadcrumb >li + li:before{
  content: ">\00a0";
  color: #cccccc;
}

@media(max-media: 991px)
{
  .breadcrumb{
    padding: 8px 0;
    text-align: center;
  }
}
 
/*product*/
#issue{
  
  margin-left: 100px;
  margin-top: 20px;
  padding: 10px;
}

</style>
</head>
<body>
<?php

if(!isset($_SESSION['name']))
{
  header("Location:seller_registration.php");
}

?>


<div class="container-fluid">



<div class="container-fluid" style="background-color: black;color: white">





</div>


  







  <div class="container">
    
    <h1><font face="Centaur"><?php
echo"Welcome: ".$_SESSION['name'];
?></font></h1>
  </div>



  <div class="container">


     <nav class="navbar navbar-expand-lg navbar-red bg-dark sticky-top">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-collapse collapse show" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">


<li class="nav-item active">
  <a class="nav-link" href="ahome.php">Home</a>
</li>



<li class="nav-item active">
  <a class="nav-link" href="sell.php">Sell</a>
</li>

<li class="nav-item active">
  <a href="seller_logout.php" class="btn btn-primary">Logout</a>
</li>

  </ul>
</div>
 </nav>
    



  </div>



<div class="container">


<h1 align="center">Upload Product</h1><br><br>

<form action="seller_interface.php" method="post" enctype="multipart/form-data">
<table class="table">
  <tr>
    <td>Name</td>
    <td><input type="text" name="name" placeholder="Enter your Product Name" class="form-control" required=""></td>
  </tr>

  <tr>
    <td>Category</td>
    <td>
      <select name="cat">
      <option>Laptop</option>

      <option>TV</option>

      <option>Mobile</option>

      <option>Camera</option>
      <option>Belt</option>
      </select>
    </td>
  </tr>

 


  <tr>
    <td>img</td>
    <td><input type="file" name="img" required=""></td>
  </tr>


  <tr>
    <td>price</td>
    <td><input type="text" name="price" placeholder="Enter  price" class="form-control" required=""></td>
  </tr>


 <tr>
    <td>Discounted price</td>
    <td><input type="text" name="d_price" placeholder="Enter  discounted price if you want to give " class="form-control"></td>
  </tr>


 

  <tr>
    <td colspan="2"><input type="submit" name="sub" value="Save"></td>
  </tr>
</table>

</form>

<?php

if(isset($_POST['sub'])){
  $name=$_POST['name'];
  $cat=$_POST['cat'];

  $price=$_POST['price'];
  $d_price=$_POST['d_price'];
  $image=$_FILES['img']['name'];
  $image_tmp=$_FILES['img']['tmp_name'];

  move_uploaded_file($image_tmp,"imgr/$image");


  if(mysqli_query($link,"INSERT INTO `product` (`nmae`, `category`, `img`, `price`, `d_price`, `place`, `status`) VALUES ('$name', '$cat', '$image', '$price', '$d_price', 'narayanganj', 'inactive');")){

    echo"<script>alert('Data Save')</script>";
  }
  else{
    echo"<script>alert('Data Not Save')</script>";
  }
}


?>


  </div>
<br>

<div class="container" style="background-color:silver;color:white">

  <h1 align="center">AlakarDokan</h1>
  
</div>

</div>


</div>

<!--footer-->
<?php
include("../includes/footer.php");
?>


    


  
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <!--owl carousel-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--custom js-->
    <script type="text/javascript">
      
    </script>
</body>
</html>
