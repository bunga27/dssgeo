<html>

<head>
	<title>Alternatif</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
	<?php
	include "koneksi.php";
	include "sidebar.php";
	include "footer.php";

	?>

	<div class="col-md-10 p-5 pt-2" >
		<h3>Form Alternatif</h3>
		<hr class="bg-secondary">

		<div class="panel-body ">
			<form action="insertalternatif.php" method="POST">

				<div class="form-group">
					<input class="form-control" type="text" name="alternatif" placeholder="Masukkan Nama Alternatif" autocomplete="off" required>
				</div>

				<br>
				<a href="dtalternatif.php">
					<button type="submit" name="Tambah" class="btn btn-info">Tambah</button>
				</a>
			</form>
		</div>
	</div>

	<script src="js/bootstrap.min.js"></script>
	<script src="js/all.min.js"></script>
</body>

</html>