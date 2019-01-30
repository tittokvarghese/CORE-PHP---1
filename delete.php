<?php
include 'db.php';

if(isset($_GET['id']))
{


$uid = $_GET['id'];
$query = mysqli_query($db,"select * from users where uid='".$uid."' 	");
if(mysqli_num_rows($query))
{
mysqli_query($db,"delete from users where uid='".$uid."' 	");
echo header("Location: view.php");
exit;

}


}

?>