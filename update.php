<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body style="background-color: #AED6F1">
<form action="update2.php" method="POST">
	<table  width="30%" cellpadding="10" style="background-color: #FCF3CF">
	<tr>
		<td style="font-size: 120%">Name*</td>
		<td><input type="text" name="fname" placeholder="Full Name" size="25" required="required" style="font-size: 120%" value="<?php echo $_GET['nm'];  ?>"></td>
	</tr>
	<tr>
		<td style="font-size: 120%">ID*</td>
		<td><input type="text" name="fid"size="25" placeholder="Enter ID" required="required" style="font-size: 120%" value="<?php echo $_GET['id'];  ?>"></td>
	</tr>
	<tr>
		<td style="font-size: 120%">Address*</td>
		<td><input type="text" name="faddress" placeholder="Present Address" size="25" required="*" style="font-size: 120%" value="<?php echo $_GET['add'];  ?>"></td>
	</tr>
	<tr>
		<td style="font-size: 120%">E-Mail*</td>
		<td><input type="E-Mail" name="fmail" placeholder="Mail Address" size="25" required="*" style="font-size: 120%" value="<?php echo $_GET['em'];  ?>"></td>
	</tr>
	<tr>
		<td style="font-size: 120%">Gander*</td>
		<td><input type="text" name="fgander" placeholder="Male/Female/Others" size="25" required="*" style="font-size: 120%" value="<?php echo $_GET['gander'];  ?>"></td>
	</tr>
	
	<tr>
		<td style="font-size: 120%">Date od Birth*</td>
		<td><input type="Date" name="fdob" style="font-size: 120%" value="<?php echo $_GET['dob'];  ?>"></td>
	</tr>
	
	
	
	<tr>
		<td style="font-size: 120%">Department</td>
		<td><input type="text" name="fdept" placeholder="Department" size="25" required="*" style="font-size: 120%" value="<?php echo $_GET['dept'];  ?>"></td>
	</tr>
	<tr>
		<td style="font-size: 120%">Section*</td>
		<td><input type="text" name="fsec" placeholder="Section" size="25" required="*" style="font-size: 120%" value="<?php echo $_GET['sec'];  ?>"></td>
	</tr>
	<tr>
		<td style="font-size: 120%">Contact No*</td>
		<td><input type="text" name="fcont" placeholder="Contact Number" size="25" required="*" style="font-size: 120%" value="<?php echo $_GET['cn'];  ?>"></td>
	</tr>
	<tr>
		<td>
			<input type="submit" name="submit" value="Update">
		</td>
	</tr>
</table>
</form>
</body>
</html>





