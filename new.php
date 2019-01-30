<?php


include 'db.php';




if(isset($_POST['savedata']))
{


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];

//$query = mysqli_query($db,"select * from users");
//if(!mysqli_num_rows($query))

$query = mysqli_query($db,"insert into users (name,lname,address) values('".$fname."','".$lname."','".$address."')	");
//echo 'Done';
echo header("Location: view.php");
exit;

 
}


?>


<table border="1">
<form method="post" action="">
<tr><td>First Name</td><td><input type="text" name="fname" placeholder="Enter your name:"></td></tr>
<tr><td>Phone</td><td><input type="text" name="lname" placeholder="Enter your Phone:"></td></tr>
<tr><td>Address</td><td><input type="text" name="address" placeholder="Enter your address:"></td></tr>
<tr><td> </td><td><input type="submit" value="Save" name="savedata"></td></tr>
</form>
</table>

