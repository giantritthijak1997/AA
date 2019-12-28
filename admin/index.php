<?php
	include '../config/connection.php';
	$sql = "SELECT file_id, file_type_id, file_title, file_picture, file_name FROM files WHERE status = 1";
	$result = $conn->query($sql);
	$numrows = $result->num_rows;
	/*$rows = $result->fetch_assoc();

	print_r($rows);*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Upload List batabase</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>
<center>
	<h2>Upload List batabase</h2> 
</center>

	<table border="1">
	<div class="container">
    <table id="example" class="table">
		<thead>
			<tr>
				<th>NO</th>
				<th>Category</th>
				<th>Title</th>
				<th>Picture</th>
				<th>File</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php if($numrows === 0):?>
			<tr>
				<td colspan="6">No data</td>
			</tr>
			<?php else: ?>
				<?php $i=1; while($row = $result->fetch_assoc()) {?>
				<tr>
					<td><?=$i;?></td>
					<td><?=$row['file_type_id'];?></td>
					<td><?=$row['file_title'];?></td>
					<td><a href="../uploads/pic/<?=$row['file_picture'];?>" target="_blank"><?=$row['file_picture'];?></a></td>
					<td><a href="../uploads/doc/<?=$row['file_name'];?>" target="_blank"><?=$row['file_name'];?></a></td>
					<td>-</td>
				</tr>
				<?php $i++; } ?>	
			<?php endif;?>
		</tbody>
	</table>
	<center>
	<a href="form.php"><button type="button" class="btn btn-primary">Add items</button></a>
	</center>
</body>
</html>