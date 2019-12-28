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
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2>Form upload</h2> <a href="index.php">Back</a>

<div class="container">
<form action="form.php" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="Category">Category</label>
    </div>
    <div class="col-75">
    <select name="file_type_id">
			<option value="1"><li><a href="#">ประเภท 1</a></li></option>
			<option value="2"><li><a href="#">ประเภท 2</a></li></option>
			<option value="3"><li><a href="#">ประเภท 3</a></li></option>
			<option value="4"><li><a href="#">ประเภท 4</a></li></option>
	</select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Subject</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
  <button type="submit" class="btn btn-success">Success</button>
  </div>
  </form>
</div>

</body>
</html>
