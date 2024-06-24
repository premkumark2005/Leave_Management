<?php 
session_start();
if(!isset($_SESSION['name']))
{
  header("location= LOGIN1.php");
}
$name=$_SESSION['name'];
include 'SERVER1.php';
$result=mysqli_query($con,"SELECT number,gmail FROM userinfo WHERE name='$name'");
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
       $gmail=$row['gmail'];
       $number=$row['number'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="my2style.css">
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
  .center {
    text-align: center;
    float: center;
  }
  
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
  margin: 0 4px;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
  border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Resume Me</title>
</head>
<body>
<?php //important stuffs to show details (user)
echo "<br><br><br><br><h1 style='color:#0560A9;'>Welcome $name</h1><br><h3 style='color:#0560A9'>Email:  $gmail<br>Mobilenumber: $number</h3>"; 
?>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container">
  <img src="logoo.jpeg.png" class="rounded-pill"  width="60px" <i class="fa fa-align-center" aria-hidden="true"></i>></li>
   <ul>
  <li><a class="active" href="Index">Home</a></li>
  <li><a href="LOGIN1.php">login</a></li>
  <li><a href="SIGNUP1.php">Signup</a></li>
  <li><a href="ABOUT.php">About</a></li>
</ul>
<a class="navbar-brand" href="#">
      <img src="nio.png" alt="nio" style="width:40px;" class="rounded-pill"></li>
</nav><br>
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="taylor.png" alt="Los Angeles" class="d-block" style="width:70%; height:560px;">
    </div>
    <div class="carousel-item">
      <img src="ree.png" alt="Chicago" class="d-block" style="width:70%; height:560px;">
    </div>
    <div class="carousel-item">
      <img src="r1.avif" alt="New York" class="d-block" style="width:70%;height:560px;">
    </div>
  </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button><br><br>
</div><div class="row">
        <div class="col-md-4">
            <div class="card rounded-lg">
                <img class="card-img-top" src="r5.webp" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">$90</h5>
                    <p class="card-text">Professional Resume</p><br>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card rounded-lg">
                <img class="card-img-top" src="r3.webp" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">$60</h5>
                    <p class="card-text">Modern Compact Resume</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card rounded-lg">
                <img class="card-img-top" src="r2.avif" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">$70</h5>
                    <p class="card-text">Resume for Developer</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>

  <div class="center">
  <div class="pagination justify-content-center">
  <a href="Index.php">1</a>
  <a href="PAGE21.php">2</a>

  </div><br><br>
  <center><a href="PAGE21.php"><button type="submit" class="btn btn-dark float-center" style="color:#E4080A;">Click to Explore More</button></a></center><br><br>
  <div class="footer">
    <img src="logoo.jpeg.png" class="rounded-pill"  width="60px" <i class="fa fa-align-center" aria-hidden="true" style="align:left;"></i></li>
    <figcaption><pre>Download the App 
      for free in Play Store</pre></figcaption>
</div>

</body>
</html>

