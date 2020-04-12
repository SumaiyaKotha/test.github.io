<?php
$servername="sql12.freemysqlhosting.net";
$username="sql12332981";
$password="ll3eYUQZYa";
$dbname="sql12332981";

$conn= mysqli_connect($servername,$username,$password,$dbname);

if ($conn) {
$name=$_POST['fname'];
$id=$_POST['fid'];
$address=$_POST['faddress'];
$email=$_POST['fmail'];
$gander=$_POST['fgander'];
$DOB=$_POST['fdob'];
$Dept=$_POST['fdept'];
$Sec=$_POST['fsec'];
$Cont=$_POST['fcont'];

$query= "UPDATE student_info SET Name='$name', Address='$address',Email='$email',Gander='$gander',Date_of_Birth='$DOB',Department='$Dept',Section='$Sec',Contact_no='$Cont' WHERE ID='$id'";

$data= mysqli_query($conn,$query);

if ($data) {
	echo "Updated. <a href='display.php'>Check updated table</a>";
}
}


?>