<!DOCTYPE html>
<html>
<head>
	<title>Pink Highschool | Add New Student</title>
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
		} 
		.form-control { 
			background-color: white; 
			color: #333; 
			border: none; 
		} 
		.form-check-input { 
			background-color: #444; 
			color: #fff; 
			border: none; 
		} 
		.form-check-label-custom { 
			color: #fff; /* Dark text color */
			font-weight: normal; /* Regular font weight */
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
		/* New CSS rule for the "Add New Student" heading */
		.mt-5 {
			margin-left: 0px; /* Adjust the indentation as needed */
			color: #7d58a3;
			font-weight: bold;
		}

		/* New CSS rule for labels */
		.form-group label {
			font-weight: bold;
			color: #7d58a3; /* Purple color */
		}

		.form-check-label-gender {
			color: #333; /* Change the color to your desired color */
			font-weight: normal; /* Regular font weight */
		}

	</style>
</head>
<body>
	<div class="container">
		<h1 class="mt-5">🎒 Add New Student</h1>
		<form method="post" action="proses_simpan.php" enctype="multipart/form-data">
			<div class="form-group">
				<label for="SIN">SIN</label>
				<input type="text" class="form-control" id="SIN" name="SIN" placeholder="Enter Student Identification Number (11 digits)">
			</div>
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
			</div>
			<div class="form-group">
				<label for="gender">Gender</label>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="gender" id="Male" value="Male">
					<label class="form-check-label form-check-label-gender" for="Male">Male</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="gender" id="Female" value="Female">
					<label class="form-check-label form-check-label-gender" for="Female">Female</label>
				</div>
			</div>
			<div class="form-group">
				<label for="telp">Phone Number</label>
				<input type="text" class="form-control" id="telp" name="telp" placeholder="Write down your phone number">
			</div>
			<div class="form-group">
				<label for="address">Address</label>
				<textarea class="form-control" id="address" name="address" placeholder="Type here your address"></textarea>
			</div>
			<div class="form-group">
				<label for="photo">Photo</label>
				<input type="file" class="form-control-file" id="photo" name="photo">
			</div>
			<hr>
			<button type="submit" class="btn btn-primary">Save</button>
			<a href="index.php" class="btn btn-secondary">Cancel</a>
		</form>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
