<?php 
include('server.php');
$id=$_GET['mo'];
$query="DELETE FROM orders WHERE id='$id'";
$inf=mysqli_query($db,$query);

if($inf)
{
   echo 
    "<script>
    alert('order cancelled');
   window.location.href='myorders.php';
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