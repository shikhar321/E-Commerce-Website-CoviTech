<?php 
include('server.php');

$id=$_GET['rn'];
$query="DELETE FROM testing WHERE id='$id'";
$info=mysqli_query($db,$query);

if($info)
{
   echo 
    "<script>
    alert('Item succesfully removed from cart');
    window.location.href='mycart.php';
    </script>
    ";
}
else
{
	echo
	"<script>
    alert('Sorry,item couldn't be removed from record');
    </script>";
 }
 ?>


