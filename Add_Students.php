<?php
$servername="sql12.freemysqlhosting.net";
$username="sql12332981";
$password="ll3eYUQZYa";
$dbname="sql12332981";

$conn= mysqli_connect($servername,$username,$password,$dbname);

if ($conn) {
   		$Name= $_POST['fname'];
		$ID= $_POST['fid'];
		$Address=$_POST['faddress'];
		$Email=$_POST['fmail'];
		$Gander=$_POST['fgander'];
		$DOB=$_POST['fdob'];
		$Department=$_POST['fdept'];
		$Section=$_POST['fsec'];
		$Contact=$_POST['fcont'];
$sql = "INSERT INTO student_info (Name,ID,Address,Email,Gander,Date_of_Birth,Department,Section,Contact_no) VALUES ('$Name','$ID','$Address','$Email','$Gander','$DOB','$Department','$Section','$Contact')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully. <a href='display.php'>Check updated table</a>";
    
    echo "<a href='Form.html'>Click Here for Add more records</a>";
}

}


?>