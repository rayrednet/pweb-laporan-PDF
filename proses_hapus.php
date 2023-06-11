<?php
include "config.php";
$id = $_GET['id'];
$sql = $pdo->prepare("SELECT photo FROM student WHERE id=:id");
$sql->bindParam(':id', $id);
$sql->execute();
$data = $sql->fetch();

if(is_file("img/".$data['photo'])) 
	unlink("img/".$data['photo']); 

$sql = $pdo->prepare("DELETE FROM student WHERE id=:id");
$sql->bindParam(':id', $id);
$execute = $sql->execute(); 

if($execute){
	header("location: index.php");
}else{
	echo "Unable to delete data <a href='index.php'>Return</a>";
}
?>
