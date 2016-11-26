<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload</title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="uploadFile" />
		<input type="submit" />
	</form>
</body>
</html>
<pre>
<?php 
	if($_FILES){
		$archiveName=$_FILES['uploadFile']['name'];
		$name=explode(".", $archiveName)[0];
		$ext=explode(".", $archiveName)[1];
		echo $newName = md5($name.time()).'.'.$ext;
	if(!file_exists('uploads')){
	mkdir('uploads');
	chmod('uploads', 0777);
	}
		move_uploaded_file($_FILES['uploadFile']['tmp_name'],
		'uploads/'.$newName);
	}
?>