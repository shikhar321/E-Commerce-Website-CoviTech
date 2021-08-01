<?php 
include('server.php');
$id=$_GET['mn'];
$query="DELETE FROM orders WHERE id='$id'";
$inf=mysqli_query($db,$query);

if($inf)
{
   echo 
    "<script>
    alert('order cancelled');
   window.location.href='cart1.php';
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