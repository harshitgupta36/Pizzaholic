<?php 
session_start();
if(!isset($_SESSION['email']))
	header("Location:aloginform.html");

$email=$_SESSION['email'];
$con=mysqli_connect("localhost","root","","useractivity");
$q="select * from asignin where email='$email'";
$query=mysqli_query($con,$q);
$row=mysqli_fetch_array($query);
?>


<?php 
echo "hye";
$opassword=$_POST['opassword'];
$npassword=$_POST['npassword'];
?>
<?php
if($opassword==$row['password'])
{
	$qur="update asignin set password='$npassword' where email='$email'";
	$res=mysqli_query($con,$qur);
	
	?>
<script>
alert("Password is Changed");
</script>
<?php
}
else
{
?>
<script>
alert("Old Password is incorrect");
</script>
<?php
}

?>
<script>
window.location="aprofiledetail.php";
</script>