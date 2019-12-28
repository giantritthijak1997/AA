<?php
   include '../config/connection.php';
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   		$file_type_id = $_POST['file_type_id'];
   		$file_title = $_POST['file_title'];

   		$file_picture_type = substr(strrchr($_FILES["file_picture"]['name'], '.'), 1); // ประเภทไฟล์
   		$file_picture = 'file_picture_'.time().'.'.$file_picture_type; // เปลี่ยนชื่อ
		$file_picture_tmp_file = $_FILES['file_picture']['tmp_name']; // temp ไฟล์

		$upload_pic = move_uploaded_file($file_picture_tmp_file, PAHT_UPLOAD_PIC.$file_picture); // upload ไฟล์ to folder

   		$file_name_type = substr(strrchr($_FILES["file_name"]['name'], '.'), 1); // ประเภทไฟล์
   		$file_name = 'file_picture_'.time().'.'.$file_name_type; // เปลี่ยนชื่อ
		$file_name_tmp_file = $_FILES['file_name']['tmp_name']; // temp ไฟล์

		$upload_doc = move_uploaded_file($file_name_tmp_file, PAHT_UPLOAD_DOC.$file_name); // upload ไฟล์ to folder

		$status = 1;

		if ($upload_pic && $upload_doc) {
			$sql = "INSERT INTO files (file_type_id, file_title, file_picture, file_name, status)VALUES ('".$file_type_id."', '".$file_title."', '".$file_picture."', '".$file_name."', '".$status."')";
			if ($conn->query($sql) === TRUE) {
			    echo "<script type='text/javascript'>alert('อัพโหลดสำเร็จ'); window.location.href='index.php';</script>";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
		} else {
			echo 'อัพโหลดไม่สำเร็จ';
		}
}
?>
<!DOCTYPE html>
<html lang="en">
	
<head>
<title>Bootstrap Example</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="AA/css/Button.css">

</head>
<center>
<body>

	<h2>Form upload</h2> <a href="index.php">Back</a>
	<form action="form.php" method="post" enctype="multipart/form-data">
		<label>เลือกหมวดหมู่หนังสือ</label>
		<select name="file_type_id">
			<option value="1"><li><a href="#">มาตรฐานการรายงานทางการเงิน</a></li></option>
			<option value="2"><li><a href="#">มาตรฐานการสอบบัญชี</a></li></option>
			<option value="3"><li><a href="#">มาตรฐานการควบคุมคุณภาพ</a></li></option>
			<option value="4"><li><a href="#">มาตรฐานการศึกษา</a></li></option>
		</select>
		<br>
		<label>Title</label>
		<input type="text" name="file_title">
		<br>
		<label>Picture</label>
		<input type="file" name="file_picture">
		<br>
		<label>File</label>
		<input type="file" name="file_name">
		<br>
		<button type="submit" class="btn btn-success">Success</button>
		
	</form>
</body>
</center>
</html>

