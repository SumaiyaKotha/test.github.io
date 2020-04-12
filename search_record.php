<?php
$servername="sql12.freemysqlhosting.net";
$username="sql12332981";
$password="ll3eYUQZYa";
$dbname="sql12332981";

$conn= mysqli_connect($servername,$username,$password,$dbname);

if ($conn) {
$ID= $_POST['fid'];

$sql = "SELECT * FROM student_info WHERE ID='$ID'";
$records=mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: #AED6F1">
<table border="2" width="50%">
	
<tr>
	<th>Name</th>
	<th>ID</th>
	<th>Address</th>
	<th>Email</th>
	<th>Gander</th>
	<th>Date Of Birth</th>
	<th>Department</th>
	<th>Section</th>
	<th>Contact No</th>
	<th>Operations</th>


</tr>
<?php
 while ($students= mysqli_fetch_assoc($records)){
 	

 	echo "<tr>
 			<td>".$students['Name']."</td>
 			<td>".$students['ID']."</td>
 			<td>".$students['Address']."</td>
 			<td>".$students['Email']."</td>
 			<td>".$students['Gander']."</td>
 			<td>".$students['Date_of_Birth']."</td>
 			<td>".$students['Department']."</td>
 			<td>".$students['Section']."</td>
 			<td>".$students['Contact_no']."</td>

 			<td align='center'><a href='update.php?nm=$students[Name]&id=$students[ID]&add=$students[Address]&em=$students[Email]&gander=$students[Gander]&dob=$students[Date_of_Birth]&dept=$students[Department]&sec=$students[Section]&cn=$students[Contact_no]'>Edit</a></td>

 		</tr>";

 		

 }


?>


</table><br>
<a href='search.html'>Check for search again</a>
</body>
</html>