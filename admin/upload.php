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
<html lang="TH">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Dropdowns</h2>
  <p>The .dropdown class is used to indicate a dropdown menu.</p>
  <p>Use the .dropdown-menu class to actually build the dropdown menu.</p>
  <p>To open the dropdown menu, use a button or a link with a class of .dropdown-toggle and data-toggle="dropdown".</p>                                          
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
    </ul>
  </div>
</div>

</body>
</html>