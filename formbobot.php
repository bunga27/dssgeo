<html>

<head>
    <title>Bobot</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
    <?php
    include "koneksi.php";
    include "sidebar.php";
    include "footer.php";

    $query = "SELECT * FROM kriteria";
    $dt_query = $koneksi->query($query);
    ?>

    <div class="col-md-10 p-5 pt-2">
        <h3>Form Bobot</h3>
        <hr class="bg-secondary">

        <div class="panel-body ">
            <form action="insertbobot.php" method="POST">

                <div class="form-group">
                    <div class="input-group">
                        <select class="form-control" name="kriteria">
                            <option value="" disabled selected>Pilih Kriteria</option>
                            <?php
                            while ($data = $dt_query->fetch_array()) {
                            ?>
                                <option class="dropdown-item" value="<?php echo $data['idkriteria']; ?>">
                                    <?php echo $data['nmkriteria']; ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <input class="form-control" type="text" name="value" placeholder="Masukkan Valuenya" autocomplete="off" required>
                </div>

                <br>
                <a href="dtbobot.php">
                    <button type="submit" name="Tambah" class="btn btn-info">Tambah</button>
                </a>
            </form>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>

</html>