<?php 

include_once('include/db.php');

if(isset($_POST['submit'])){
	$sname = $_POST['student_name'];
	$sgender = $_POST['student_gender'];
	$cid= $_POST['class_id'];
	$scourse= $_POST['s_course'];

	$sql = "INSERT INTO student (student_name, student_gender, class_id, s_course)
VALUES ('$sname', '$sgender', '$cid', '$scourse')";

if($result=mysqli_query($conn,$sql)){
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
 	<title>Edit Student</title>
 </head>
 <body>
 <div class="container">
		<form action="edit_student.php" method="post" style="margin-top: 20px;">
			<table>
				<tr>
					<td><label>Name: </label></td>
					<td><input type="text" name="student_name" required></td>
				</tr>
				<tr>
					<table>
					   <td>
				       <label for="student_gender">Gender: </label>
                       <select name="student_gender" id="student_gender">
	                   <option value="male">Male</option>
	                   <option value="female">Female</option>
                       </select>
				       </td>
				    </table>
				</tr>
				<tr>
					<td><label>Class: </label></td>
					<td>
					<input type="text" name="class_id" required></td>
				</tr><br>
				<tr>
					<td><label>Course: </label></td>
					<td><input type="text" name="s_course" required></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
	</div>
 </body>