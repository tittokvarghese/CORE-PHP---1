<?php
include 'db.php';

?>

<a href="new.php">ADD</a><br>

<table border="1">
<tr><td>FIRST NAME</td><td>PHONE NO</td><td>ADDRESS</td><td>EDIT</td><td>DELETE</td></tr>



<?php
$query = mysqli_query($db,"select * from users ");
if(mysqli_num_rows($query))
{


while($row = mysqli_fetch_array($query))
{
echo '<tr><td>'.$row['name'].'</td><td>'.$row['lname'].'</td><td>'.$row['address'].'</td>
<td><a href="edit.php?id='.$row['uid'].'">Edit</a></td><td><a href="delete.php?id='.$row['uid'].'">Delete</a></td></tr>';
}



}

?>
</table>








