<!DOCTYPE html>
<html>
<head>
	<title>Pink Highschool | Edit Student Data</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="icon" href="img/logo.ico" type="image/png"> <!-- Link to your icon image -->

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');
		
		body {
			background-image: linear-gradient(to top, #c9c99f, #e4c29e, #f7bbae, #fbb9c9, #ecbee8);
			color: #333; /* Dark text color */
			font-family: 'Poppins', sans-serif;
		}

		.container {
			/* From https://css.glass */
			background: rgba(245, 245, 245, 0.45);
			border-radius: 16px;
			box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
			backdrop-filter: blur(4.6px);
			-webkit-backdrop-filter: blur(4.6px);
			border: 1px solid rgba(245, 245, 245, 0.38);
			margin-top: 50px;
			padding: 20px;
		}

		h1 {
			margin-bottom: 30px;
			color: #fff; /* White text color */
		}

		.form-control {
			background-color: #f9f5fc; /* Light purple background */
			color: #333; /* Dark text color */
			border: none;
		}

		.form-check-input {
			background-color: #f9f5fc; /* Light purple background */
			color: #333; /* Dark text color */
			border: none;
		}

		.form-check-label {
			color: #333; /* Dark text color */
		}

		.form-control-file {
			background-color: #f9f5fc; /* Light purple background */
			color: #333; /* Dark text color */
			border: none;
		}

		.btn-primary {
			background: #D6DF8C;
			border: 2px solid #999F63;
			color: #693c72;
			transition: background-color 0.3s, color 0.3s;
			border-radius: 20px;
		}

		.btn-primary:hover {
			background-color: #78C667;
			border-color: #693c72;
			color: white;
			box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.5);
		}

		.btn-secondary {
			background: #F4CEE8;
			border: 2px solid #DEA5CC;
			color: #693c72;
			transition: background-color 0.3s, color 0.3s;
			border-radius: 20px;
		}

		

		.btn-secondary:hover {
			background-color: #D678CF; /* Darker pink on hover */
			border-color: #693c72;
			color: white;
			box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.5);
		}

		.label-bold-purple {
			font-weight: bold;
			color: #7d58a3;
		}

		
	</style>
</head>
<body>
	<div class="container">
		<h1 class="mt-5" style="text-align: left; color: #7d58a3; font-weight: bold;">🧑‍🎓 Edit Student Page </h1>
		<?php
		include "config.php";
		$id = $_GET['id'];
		$sql = $pdo->prepare("SELECT * FROM student WHERE id=:id");
		$sql->bindParam(':id', $id);
		$sql->execute();
		$data = $sql->fetch();
		?>
		<form method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nis" class="label-bold-purple">SIN</label>
				<input type="text" class="form-control" id="SIN" name="SIN" value="<?php echo $data['SIN']; ?>">
			</div>
			<div class="form-group">
				<label for="nama" class="label-bold-purple">Name</label>
				<input type="text" class="form-control" id="name" name="name" value="<?php echo $data['name']; ?>">
			</div>
			<div class="form-group">
				<label for="gender" class="label-bold-purple">Gender</label>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="gender" id="Male" value="Male" <?php if($data['gender'] == "Male") echo "checked"; ?>>
					<label class="form-check-label" for="Male-laki">Male</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="gender" id="Female" value="Female" <?php if($data['gender'] == "Female") echo "checked"; ?>>
					<label class="form-check-label" for="Female">Female</label>
				</div>
			</div>
			<div class="form-group">
				<label for="telp" class="label-bold-purple">Phone Number</label>
				<input type="text" class="form-control" id="telp" name="telp" value="<?php echo $data['telp']; ?>">
			</div>
			<div class="form-group">
				<label for="address" class="label-bold-purple">Address</label>
				<textarea class="form-control" id="address" name="address"><?php echo $data['address']; ?></textarea>
			</div>
			<div class="form-group">
				<label for="photo" class="label-bold-purple">Photo</label>
				<input type="file" class="form-control-file" id="photo" name="photo">
			</div>
			<hr>
			<button type="submit" class="btn btn-primary">Edit</button>
			<a href="index.php" class="btn btn-secondary">Cancel</a>
		</form>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
