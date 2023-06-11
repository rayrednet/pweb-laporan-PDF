<?php
include "config.php";
$SIN = $_POST['SIN'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$telp = $_POST['telp'];
$address = $_POST['address'];
$photo = $_FILES['photo']['name'];
$tmp = $_FILES['photo']['tmp_name'];
$newPhoto = date('dmYHis').$photo;
$path = "img/".$newPhoto;

// Proses upload
if(move_uploaded_file($tmp, $path)){ 
	$sql = $pdo->prepare("INSERT INTO student(SIN, name, gender, telp, address, photo) VALUES(:SIN,:name,:gender,:telp,:address,:photo)");
	$sql->bindParam(':SIN', $SIN);
	$sql->bindParam(':name', $name);
	$sql->bindParam(':gender', $gender);
	$sql->bindParam(':telp', $telp);
	$sql->bindParam(':address', $address);
	$sql->bindParam(':photo', $newPhoto);
	$sql->execute();

	if($sql){
		header("location: index.php");
	}else{
		echo "Sorry an error occured when we're trying to save the data";
		echo "<br><a href='form_simpan.php'>Back to Form</a>";
	}
}else{
	echo "Sorry, the image can't be uploaded";
	echo "<br><a href='form_simpan.php'>Back to form</a>";
}
?>
