
<?php
$name = $_FILES['file']['name'];

$tmp_name =$_FILES['file']['tmp_name'];

if (isset($name)) {
	if (!empty($name)) {
		
		$location  =  'uploads/';
		if (move_uploaded_file($tmp_name, $location.$name)) {
			echo "uploaded";
		}
	}else{

		echo "please choose files";
	}
}

?>

<form action="upload.php" method="POST" enctype="multipart/form-data">
<input type="file" name="file">
<input type="submit" value="SUBMIT">
</form>