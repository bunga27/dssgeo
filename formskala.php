<html>

<head>
	<title>Skala</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
	<?php
	include "koneksi.php";
	include "sidebar.php";
	include "footer.php";
	?>

	<div class="col-md-10 p-5 pt-2">
		<h3>Form Skala</h3>
		<hr class="bg-secondary">

		<div class="panel-body ">
			<form action="insertskala.php" method="POST">

				<div class="form-group">
					<input class="form-control" type="text" name="value" placeholder="Masukkan Value" autocomplete="off" required>
				</div>

				<div class="form-group">
					<input class="form-control" type="text" name="keterangan" placeholder="Masukkan Keterangan" autocomplete="off" required>
				</div>

				<br>
				<a href="dtskala.php">
					<button type="submit" name="Tambah" class="btn btn-info">Tambah</button>
				</a>
			</form>
		</div>
	</div>

	<script src="js/bootstrap.min.js"></script>
	<script src="js/all.min.js"></script>
</body>

</html>