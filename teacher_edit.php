<?php 

include_once('include/db.php');

if(isset($_POST['submit'])){
	$tname = $_POST['teacher_name'];
	$temail = $_POST['teacher_email'];
	$tgender= $_POST['teacher_gender'];
	$tstatus= $_POST['t_status'];

	$sql = "INSERT INTO teacher (teacher_name, teacher_email, teacher_gender, t_status)
VALUES ('$tname', '$temail', '$tgender', '$tstatus')";

if($result = mysqli_query($conn,$sql)){
		echo "<script>alert('edit Successfully.')
		window.location.href='tables.php';
		</script>";
	}else{			
		echo "<script>alert('Edit Fails')</script>";
	}
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Edit Teacher</title>
 </head>
 <body>
 <div class="container">
		<form action="teacher_edit.php" method="post" style="margin-top: 20px;">
			<table>
				<tr>
					<td><label>Name: </label></td>
					<td><input type="text" name="teacher_name" required></td>
				</tr>
				<tr>
					<td><label>Email:</label></td>
					<td><input type="text" name="teacher_email" required></td>
				</tr>
				<tr>
				<tr>
					<table>
					   <td>
				       <label for="teacher_gender">Gender: </label>
                       <select name="teacher_gender" id="teacher_gender">
	                   <option value="male">Male</option>
	                   <option value="female">Female</option>
                       </select>
				       </td>
				    </table>
				</tr>
				<tr>
					<td><label>Status: </label></td>
					<td>
					<input type="text" name="t_status" required></td>
                   
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
	</div>
 </body>