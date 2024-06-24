<?php
$logged=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'SERVER1.php';
    $name=$_POST['name'];//form input tag
    $password=$_POST['password'];
    $sql="SELECT * FROM userinfo WHERE name='$name' AND password='$password'";
    $result=mysqli_query($con,$sql);
    
  if($result)
  {$num=mysqli_num_rows($result);
            if($num>0)
            {
              //echo '<center><p style="color: green;">account verified</p></center>';
            session_start();
            $logged=1;
            $_SESSION['name']=$name;
            header('location: HOME1.php');
            }
            else
      {
            $invalid=1;
            echo '<center><p style="color: #FFFFFF;background-color:#F30D0F">Your Username and Password are Incorrect<br>Do not Have an Account Create it</p></center>';
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
<script>
  function formvalidation(){
    let x=document.forms['sinform']['name'].value;
    let z=document.forms['sinform']['password'].value;

    if(x=="")
    {
      alert("username must be filled out");
      return false;
    }

    if(z=="")
    {
      alert("password must be filled out");
      return false;
    }
    function newfunction(){
        document.getflementById("sinform").reset();
    }
  }</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Resume Me</title>
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
<div class="container-fluid cont-login d-flex flex-column justify-content-center" id="signinsection">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form action="LOGIN1.php" method="POST" name="sinform" id="sinform" onsubmit="return formvalidation()" class="row g-3">
                        <h4 style="color:#2E9DF7;"><i>Login</i></h4>
                        <div class="col-12">
                            <label style="color:#2E9DF7;"><i>USER NAME:</i></label>
                            <input type="text" name="name" class="form-control" placeholder="user name">
                        </div>
                     
                        <div class="col-12">
                            <label style="color:#2E9DF7;"><i>ENTER PASSWORD:</i></label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="col-12">
                            <div class="form-con">
                                <input class="form-con-input" type="checkbox" id="rememberMe">
                                <label class="form-con-label" for="rememberMe" style="color:#2E9DF7;"> Remember me</label>
                            </div>
                        </div><br>
                        <div class="col-12 d-flex flex-row">
                             <button type="submit" class="btn btn-dark float-end" style="color:#2E9DF7;">LOGIN</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        <hr><div class="footer">
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