<?php 
$HOSTNAME='wp.kongu.edu';
$USERNAME='mlb11';
$PASSWORD='mlb11';
$DATABASE='mlb11';//enter the name of your database
$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if($con)
{
    echo "Connection successful";
}
else {
    die(mysqli_error($con));
}
?>
