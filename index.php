<!DOCTYPE html>
<html>
<head>
	<title>Pink Highschool</title>
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
			margin-top: 50px;
		}
		
		h1 {
			margin-bottom: 30px;
			color: #693c72; /* Purple heading color */
			font-weight: 700;
		}
		
		.table td,
		.table th {
			vertical-align: middle;
			text-align: center;
			color: #333; /* Dark text color */
		}
		
		.table th {
			background-color: rgba(169, 116, 188, 0.7); /* Purple background with transparency */
			color: #fff; /* White text color */
		}
		
		.table tbody tr:nth-child(even) {
			background-color: #f9f5fc; /* Light purple background for even rows */
		}
		
		.table tbody tr:nth-child(odd) {
			background-color: #f6e8f9; /* Light pink background for odd rows */
		}
		
		.btn {
			margin-right: 5px;
			border-radius: 10px; /* Adjust the value to control the roundness of the button */
		}

		.btn-warning,
		.btn-danger {
			background: #F4CEE8;
			border: 2px solid #DEA5CC;
			color: #693c72;
			transition: background-color 0.3s, color 0.3s;
		}

		.btn-warning:hover,
		.btn-danger:hover {
			background-color: #693c72;
			color: white;
		}

		.btn-primary {
		background-color: rgba(219, 184, 227, 0.7); /* Light pink with transparency */
		border: 2px solid #693c72; /* Updated border color */
		color: #6F5266;
		display: inline-block;
		text-align: center;
		backdrop-filter: blur(10px); /* Glassmorphism effect */
		transition: background-color 0.3s, color 0.3s;
}


		.btn-primary:hover {
			background-color: rgba(211, 166, 219, 0.9); /* Darker pink with transparency on hover */
			border-color: transparent;
			color: white;
			box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.5); /* Glassmorphic effect */
		}

		.add-btn {
			margin-bottom: 20px;
		}

	</style>
</head>
<body>
	<div class="container">
		<h1>🏫 Pink Highschool Students List</h1>
		<div class="text-right">
		<div class="text-right">
    <div class="btn-group" role="group" aria-label="Button group">
        <form action="export_pdf.php" method="post" class="text-right">
            <button type="submit" name="export_pdf" class="btn btn-primary">Export to PDF</button>
        </form>

        <span style="margin-right: 15px;"></span> <!-- Add space between the buttons -->

        <a href="form_tambah.php" class="btn btn-primary">Add New Student</a>
    </div>
    <br><br>
</div>


		<table class="table table-bordered">
			<thead>
				<tr>
					<th>SIN</th>
					<th>Photo</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Phone Number</th>
					<th>Address</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				include "config.php";

				$sql = $pdo->prepare("SELECT * FROM student");
				$sql->execute();

				$rowCount = 0;
				while($data = $sql->fetch()){ 
					$rowCount++;
					$rowColor = $rowCount % 2 == 0 ? '#f9f5fc' : '#f6e8f9';
					echo "<tr style='background-color: ".$rowColor."'>";
					echo "<td>".$data['SIN']."</td>";
					echo "<td><img src='img/".$data['photo']."' width='100' height='100'></td>";
					echo "<td>".$data['name']."</td>";
					echo "<td>".$data['gender']."</td>";
					echo "<td>".$data['telp']."</td>";
					echo "<td>".$data['address']."</td>";
					echo "<td><a href='form_ubah.php?id=".$data['id']."' class='btn btn-warning'>Edit</a></td>";
					echo "<td><a href='proses_hapus.php?id=".$data['id']."' class='btn btn-danger'>Delete</a></td>";
					echo "</tr>";
				}
				?>
			</tbody>
		</table>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
