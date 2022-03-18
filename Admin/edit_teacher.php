<?php 

include_once('include/db.php');

if(isset($_POST['submit']) && isset($_GET['id'])){
	$tname = $_POST['teacher_name'];
	$temail = $_POST['teacher_email'];
	$tgender= $_POST['teacher_gender'];
	$tstatus= $_POST['t_status'];
	$sql = "UPDATE teacher SET teacher_name ='$tname',teacher_email='$temail',teacher_gender ='$tgender',t_status='$tstatus' WHERE teacher_id='".$_GET['id']."'";
if($result=mysqli_query($conn,$sql)){
		echo "<script>alert('edit Successfully.')
		window.location.href='tables.php';
		</script>";
	}else{			
		echo "<script>alert('Edit Fails')</script>";
	}
}
$qry = "SELECT * FROM teacher WHERE teacher_id = '".$_GET['id']."'";
$abc = mysqli_query($conn,$qry);
$row = mysqli_fetch_array($abc);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Edit Teacher</title>
 </head>
 <body>
 <div class="container">
		<form action="edit_teacher.php?id=<?=$_GET['id']?>" method="post" style="margin-top: 20px;">
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