<?php
include 'db.php';



if(isset($_POST['savedata']))
{


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$uid = $_POST['uid'];

//$query = mysqli_query($db,"select * from users");
//if(!mysqli_num_rows($query))

$query = mysqli_query($db,"update users set name='".$fname."',lname= '".$lname."',address='".$address."' where uid='".$uid."' 	");
//echo 'Done';
echo header("Location: view.php");
exit;

 
}






if(isset($_GET['id']))
{
$uid = $_GET['id']
 
?>

<table border="1">
<form method="post" action="">

<?php
$query = mysqli_query($db,"select * from users where uid='".$uid."' 	");
if(mysqli_num_rows($query))
{

while($row = mysqli_fetch_array($query))
{
echo '<tr><td>First Name</td><td><input type="text" name="fname" placeholder="Enter your name:" value="'.$row['name'].'"></td></tr>
<tr><td>Phone</td><td><input type="text" name="lname" placeholder="Enter your Phone:"  value="'.$row['lname'].'"></td></tr>
<tr><td>Address</td><td><input type="text" name="address" placeholder="Enter your address:"  value="'.$row['address'].'"></td></tr>
<tr><td> </td><td>
<input type="hidden" name="uid" placeholder="Enter your address:"  value="'.$row['uid'].'">
<input type="submit" value="Save Changes" name="savedata"></td></tr>
';
}



}
}
?>




</form>
</table>
