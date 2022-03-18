<?php 

include_once('include/db.php');

if(isset($_POST['submit']) && isset($_GET['id'])){
	$sname = $_POST['student_name'];
	$sgender = $_POST['student_gender'];
	$cid= $_POST['class_id'];
	$scourse= $_POST['s_course'];

	$sql = "UPDATE student SET student_name ='$sname',student_gender ='$sgender',class_id ='$cid',s_course ='$scourse' WHERE student_id='".$_GET['id']."'";

if($result=mysqli_query($conn,$sql)){
		echo "<script>alert('edit Successfully.')
		window.location.href='tables.php';
		</script>";
	}else{			
		echo "<script>alert('Edit Fails')</script>";
	}
}

$qry = "SELECT * FROM student WHERE student_id = '".$_GET['id']."'";
$abc = mysqli_query($conn,$qry);
$row = mysqli_fetch_array($abc);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Edit Student</title>
 </head>
 <body>
 <div class="container">
		<form action="edit_student.php?id=<?=$_GET['id']?>" method="post" style="margin-top: 20px;">
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