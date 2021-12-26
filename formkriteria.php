<html>

<head>
	<title>Kriteria</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
	<?php
	include "koneksi.php";
	include "sidebar.php";
	include "footer.php";
	?>

	<div class="col-md-10 p-5 pt-2">
		<h3>Form Kriteria</h3>
		<hr class="bg-secondary">

		<div class="panel-body ">
			<form action="insertkriteria.php" method="POST">

				<div class="form-group">
					<input class="form-control" type="text" name="kriteria" placeholder="Masukkan Nama Kriteria" autocomplete="off" required>
				</div>

				<div class="form-group">
					<div class="input-group">
						<select class="form-control" name="jenis">
							<option class="dropdown-item" value="" disabled selected>Pilih Jenis</option>
							<option class="dropdown-item" value="benefit">Benefit</option>
							<option class="dropdown-item" value="cost">Cost</option>
						</select>
					</div>
				</div>

				<br>
				<a href="dtkriteria.php">
					<button type="submit" name="Tambah" class="btn btn-info">Tambah</button>
				</a>
			</form>
		</div>
	</div>

	<script src="js/bootstrap.min.js"></script>
	<script src="js/all.min.js"></script>
</body>

</html>