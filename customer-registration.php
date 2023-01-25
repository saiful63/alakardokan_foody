<?php

include('dbcon.php');




session_start();

if(isset($_POST['reg']))
{

 $name=$_POST['name'];
 $email=$_POST['email'];

 $password=$_POST['password'];
 $c_password=$_POST['c_password'];
 $check=$_POST['check'];
 

$input_error=array();
if(empty($name)){
    $input_error['name']="The Name field is required.";
}

if(empty($email)){
    $input_error['email']="The Email field is required.";
}



if(empty($password)){
    $input_error['password']="The password field is required.";
}


if(empty($c_password)){
    $input_error['c_password']="The Confirm password field is required.";
}

if(empty($check)){
    $input_error['check']="Checkbox should be marked";
}

if(count($input_error)==0){
  $name_chack=mysqli_query($link,"SELECT * FROM `registration` WHERE name='$name'");
  if(mysqli_num_rows($name_chack)==0){

     $email_chack=mysqli_query($link,"SELECT * FROM `registration` WHERE email='$email'");
    if(mysqli_num_rows($email_chack)==0){
         
         if(strlen($name)>7){
           

       if(strlen($password)>7){
    

     if($password==$c_password){
          


    $password=md5($password);
    $c_password=md5($c_password);

     $query="INSERT INTO `registration` (`id`, `name`, `email`, `password`, `c_password`) VALUES (NULL, '$name', '$email', '$password', '$c_password')";
    
     $result=mysqli_query($link,$query);

     if($result){
      $_SESSION['data_insert_success']="Data Insert Success!";
      

     }else{
      $_SESSION['data_insert_error']="Data Insert Error!";
     }

     }else{
       $password_not_match="Confirm Password Not Match!";
     }


       }else{
        $password_l="Password must be more than 8 character.";
       }

         }else{
          $name="Username must be More Than 8 character. ";
         }


    }else{
      $email_error="This Email Address Already Exists.";
    }

  }else{
    $name_error="This name Already Exist";
  }
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
<article class="card-body mx-auto" style="max-width: 400px;">
  <h4 class="card-title mt-3 text-center">Create Account  </h4>
  
  
  <form method="POST" action="customer-registration.php">
  <div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
     </div>
        <input class="form-control" placeholder="Full name" name="name"value="<?php if(isset($name)){echo $name;}?>"type="text">
        <label class="error">
        <?php
                if(isset($input_error['name'])){
                 echo $input_error['name'];
                }
        ?>  
        </label>

       <label class="error">
        <?php
                if(isset($name_error)){
                 echo $name_error;
                }
        ?>  
        </label>
    </div>
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
     </div>
        <input class="form-control" placeholder="Email address" name="email"value="<?php if(isset($email)){echo $email;}?>" type="email">
        <label class="error">
        <?php
                if(isset($input_error['email'])){
                 echo $input_error['email'];
                }
        ?>  
        </label>

        <label class="error">
        <?php
                if(isset($email_error)){
                 echo $email_error;
                }
        ?>  
        </label>

    </div> 
    
   
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
    </div>
        <input class="form-control" placeholder="Create password" name="password" type="password">
        <label class="error">
        <?php
                if(isset($input_error['password'])){
                 echo $input_error['password'];
                }
        ?>  
        </label>
        <label class="error">
        <?php
                if(isset($password_l)){
                 echo $password_l;
                }
        ?>  
        </label>
    </div> 
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
    </div>
        <input class="form-control" placeholder="Repeat password" name="c_password"type="password">
         <label class="error">
        <?php
                if(isset($input_error['c_password'])){
                 echo $input_error['c_password'];
                }
        ?>  
        </label>
        <label class="error">
        <?php
                if(isset($password_not_match)){
                 echo $password_not_match;
                }
        ?>  
        </label>
    </div> 

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="check" value="check" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"><a href="privacy.php" target="_blank">পড়ুন এবং গ্রহণ করুন</a></label>

   <label class="error">
        <?php
                if(isset($input_error['check'])){
                 echo $input_error['check'];
                }
        ?>  
        </label>
  </div>

    <div class="form-group">
        <button type="submit" name="reg"class="btn btn-primary btn-block"> Create Account  </button>
    </div>      
    <p class="text-center">Have an account? <a href="login.php">Log In</a> </p>                                                                 
</form>
</article>


</div> 
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


