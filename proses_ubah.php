<?php
include "config.php";
$id = $_GET['id'];
$SIN = $_POST['SIN'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$telp = $_POST['telp'];
$address = $_POST['address'];
$photo = $_FILES['photo']['name'];
$tmp = $_FILES['photo']['tmp_name'];

if(empty($foto)){
	// Proses ubah data ke Database
	$sql = $pdo->prepare("UPDATE student SET SIN=:SIN, name=:name, gender=:gender, telp=:telp, address=:address WHERE id=:id");
	$sql->bindParam(':SIN', $SIN);
	$sql->bindParam(':name', $name);
	$sql->bindParam(':gender', $gender);
	$sql->bindParam(':telp', $telp);
	$sql->bindParam(':address', $address);
	$sql->bindParam(':id', $id);
	$execute = $sql->execute();

	if($sql){
		header("location: index.php");
	}else{
		echo "Sorry an occured when we're trying to save the data";
		echo "<br><a href='form_ubah.php'>Back to form</a>";
	}
}else{ 
	$newPhoto = date('dmYHis').$photo;
	$path = "images/".$fotobaru;

	// Proses upload (Insert)
	if(move_uploaded_file($tmp, $path)){ 
		$sql = $pdo->prepare("SELECT foto FROM siswa WHERE id=:id");
		$sql->bindParam(':id', $id);
		$sql->execute();
		$data = $sql->fetch();

		// Cek apakah file foto sebelumnya ada di folder images
		if(is_file("img/".$data['photo'])) 
			unlink("img/".$data['photo']);

		// Proses ubah data ke Database
		$sql = $pdo->prepare("UPDATE student SET SIN=:SIN, name=:name, gender=:gender, telp=:telp, address=:address, photo=:photo WHERE id=:id");
		$sql->bindParam(':SIN', $SIN);
		$sql->bindParam(':name', $name);
		$sql->bindParam(':gender', $gender);
		$sql->bindParam(':telp', $telp);
		$sql->bindParam(':address', $address);
		$sql->bindParam(':photo', $newPhoto);
		$sql->bindParam(':id', $id);
		$execute = $sql->execute();

		if($sql){ // Cek jika proses simpan ke database sukses atau tidak
			header("location: index.php"); // Redirect ke halaman index.php
		}else{
			echo "Sorry an error occured when we're trying to save the data";
			echo "<br><a href='form_ubah.php'>Back to form</a>";
		}
	}else{
		echo "Sorry the image failed to be uploaded";
		echo "<br><a href='form_ubah.php'>Back to form</a>";
	}
}
?>
