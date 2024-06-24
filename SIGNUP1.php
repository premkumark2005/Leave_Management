<?php 
$registered=0;
$userexsists=0;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'SERVER1.php';
    $name=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $number=$_POST['mob-num'];
    $sql="SELECT * FROM userinfo WHERE name='$name'";
    $result=mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);
    
    if($num>0)
    {
        $userexsists=1;
        echo '<center><p style="color: #cc2900;">User Already exists ,Try With different username.</p></center>';
    }


    else{
       
        $sql="INSERT INTO userinfo (name,password,gmail,number) VALUES ('$name','$password','$email','$number')";
        $result=mysqli_query($con,$sql);
        if($result)
        {
            echo '<center><p style="color: green;background-color: #99ff99">You are Now Resume Me User</p></center>';
           $registered=1;
        }
        else{
            die(mysqli_error($con));
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" href="my2style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
ul {
  list-style-type: none;
  overflow: hidden;
  background-color: #333;
}
.carousel-inner img {
  margin: auto;
}

li {
  float: left;
 }

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"> </script>
    <title>Resume Me</title>
    <script>
    function formvalidation(){
    let x=document.forms['supform']['username'].value;
    let y=document.forms['supform']['mob-num'].value;
    let e=document.forms['supform']['email'].value;
    let z=document.forms['supform']['password'].value;

    if(x=="")
    {
      alert("username must be filled out");
      return false;
    }

    if(y=="")
    {
      alert("mobile-number must be filled out");
      return false;
    }
    if(e=="")
    {
      alert("E-Mail must be filled out");
      return false;
    }
    if(z=="")
    {
      alert("password must be filled out");
      return false;
    }
    function newfunction(){
        document.getflementById("supform").reset();
    }
  }</script>
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container">
  <img src="logoo.jpeg.png" class="rounded-pill" width="60px" <i class="fa fa-align-center" aria-hidden="true"></i>></li>
   <ul>
  <li><a class="active" href="Index.php">Home</a></li>
  <li><a href="LOGIN1.php">login</a></li>
  <li><a href="SIGNUP1.php">Signup</a></li>
  <li><a href="ABOUT.php">About</a></li>
</ul>
<a class="navbar-brand" href="#">
      <img src="nio.png" alt="nio" style="width:40px;" class="rounded-pill"></li>
</nav><br>

<div class="container-fluid login-form" id="signinsection">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="bg mt-4 p-4" id="signinsection">
                    <form action="SIGNUP1.php" method="POST" id="supform" onsubmit="return formvalidation()" class="row g-3 form-text">  <!--sign up form-->
                        <h4 style="color:red;"><i>SIGN UP</i></h4>
                        <div class="col-12">
                            <label style="color:red;">NAME:</label>
                            <input type="text" name="username" class="form-control" placeholder="Enter Your Username">
                        </div>
                        <div class="col-12">
                            <label style="color:red;">ENTER MOBILE NUMBER:</label>
                            <input type="number" name="mob-num" class="form-control" placeholder="Enter Your Mobilenumber">
                        </div>
                        <div class="col-12">
                            <label style="color:red;">ENTER EMAIL:</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Your Email Address">
                        </div>
                        <div class="col-12">
                            <label style="color:red;">CREATE PASSWORD:</label>
                            <input type="password" name="password" class="form-control" placeholder="Create Your Password">
                        </div>
                       
                        <div class="col-12">
                            <div class="form-con">
                                <input class="form-con-input" type="checkbox" id="rememberMe">
                                <label class="form-con-label" for="rememberMe" style="color:red;"> Remember me</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark float-center" style="color:red;">SIGN UP</button>
                        </div>
                    </form>
                    <hr class="mt-4">
                    <div class="col-12">
                        <p class="text-center mb-0 form-text" style="color:red;"> Already Have an account? <a href="login.php"><b>log in</b></a></p>
                    </div>
                </div>
            </div>
        </div><hr><div class="footer">
    <center><img src="logoo.jpeg.png" class="rounded-pill"  width="60px" <i class="fa fa-align-center" aria-hidden="true" style="align:left;"></i></li>
    <figcaption><pre>Download the App 
      for free in Play Store</pre></figcaption>
      <pre>   For further details 
  
  Contact: +917598612001
  
  Email:resumeme2006@gmail.com
</pre>
<a href="#"><h2>Terms and Conditions</h2></a>
<a href="#"><h2>Privacy Policy</h2></a></center>
    </div>
  </body>
  </html>