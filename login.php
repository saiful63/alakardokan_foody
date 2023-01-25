<?php

include('dbcon.php');

session_start();

 if(isset($_POST['login'])){
  
  $email=$_POST['email'];
  $password=md5($_POST['password']);
  
  //$_SESSION['name']=$name;
     
  $sq=mysqli_query($link,"SELECT * FROM `registration` WHERE `email`='$email' AND password='$password'");
  if(mysqli_num_rows($sq)>0){
    $row=mysqli_fetch_assoc($sq);
 
 $_SESSION['name']=$row['name'];
if(isset($_SESSION['name']))
{
  header("Location:customer/user_interface.php");
}


  
  }else{
    $name_not_found="This email or passwaord is wrong";
  }
 }

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
 
/*customer-registration*/

.divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-facebook {
    background-color: #405D9D;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
}
</style>
</head>
<body>


<!--Navbar-->


<!--Sidebar and product-->
<div id="content">
  <div class="container-fluid">
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Cart</li>
  </ol>
</nav>


  <?php
   if(isset($_SESSION['data_insert_success'])){
    echo'<div class="alert alert-success">'.$_SESSION['data_insert_success'].'</div>';
   }

   
  ?>


  <?php
   if(isset($_SESSION['data_insert_error'])){
    echo'<div class="alert alert-warning">'.$_SESSION['data_insert_error'].'</div>';
   }
  


  ?>
 

<div class="container">
<br>  
<hr>

<div class="row">

  <div class="col-md-3">
    
  </div>
  <div class="col-md-6">
    <div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;height: 300px;">
  <h4 class="card-title mt-3 text-center">Login your Account</h4>
  
  
  <form method="POST">

   

  <div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
     </div>
        <input class="form-control" placeholder="Email" name="email"value="<?php if(isset($email)){echo $email;}?>"type="text">
        
    </div>
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
     </div>
        <input class="form-control" placeholder="Password" name="password"value="<?php if(isset($password)){echo $password;}?>" type="password">
        

    </div> 
    
   
    

    <div class="form-group">
        <button type="submit" name="login"class="btn btn-primary btn-block"> login</button>
    </div>      
                                                                    
</form>
</article>


</div> 




<center style="margin-left: 110px">

  <?php  if(isset($name_not_found)){echo '<div class="alert alert-danger col-sm-6">'.$name_not_found.'</div>';}?>

</center>


<center style="margin-left: 110px">

  <?php  if(isset($wrong_password)){echo '<div class="alert alert-danger col-sm-6">'.$wrong_password.'</div>';}?>

</center>


  </div>








</div>






</div> 


<br><br>







<!--footer-->
<?php
include("includes/footer.php");
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


