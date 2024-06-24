<?php 
$registered=0;
$userexsists=0;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'server.php';
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];
    $Mobilenumber=$_POST['Mobilenumber'];
    $City=$_POST['City'];
    $sql="SELECT * FROM userinfo WHERE Username='$Username'";
    $result=mysqli_query($check,$sql);
    if($result)
    {
        $num=mysqli_num_rows($result);
    }
    if($num>0)
    {
        $userexsists=1;
        echo '<p style="color: red;">User already exists. Please choose a different username.</p>';
    }
    else{
        $sql="INSERT INTO userinfo (Username,Password,Mobilenumber,City) VALUES ('$Username','$Password','$Mobilenumber','$City')";
        $result=mysqli_query($check,$sql);
        if($result)
        {
           $registered=1;
        }
        else{
            die(mysqli_error($con));
        }
    }
}
?>