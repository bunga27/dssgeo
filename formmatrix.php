<html>

<head>
    <title>Matrix Keputusan</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
    <?php
    include "koneksi.php";
    include "sidebar.php";
    include "footer.php";
    $query = "SELECT * FROM alternatif";
    $dt_query = $koneksi->query($query);
    $query1 = "SELECT * FROM bobot";
    $dt_query1 = $koneksi->query($query1);
    $query2 = "SELECT * FROM skala";
    $dt_query2 = $koneksi->query($query2);
    ?>

    <div class="col-md-10 p-5 pt-2">
        <h3>Form Matrix Keputusan</h3>
        <hr class="bg-secondary">

        <div class="panel-body ">
            <form action="insertmatrix.php" method="POST">

                <div class="form-group">
                    <div class="input-group">
                        <select class="form-control" name="alternatif">
                            <option value="" disabled selected>Pilih Alternatif</option>
                            <?php
                            while ($data = $dt_query->fetch_array()) {
                            ?>
                                <option class="dropdown-item" value="<?php echo $data['idalternatif']; ?>">
                                    <?php echo $data['nmalternatif']; ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <select class="form-control" name="bobot">
                            <option value="" disabled selected>Pilih Bobotnya</option>
                            <?php
                            while ($data1 = $dt_query1->fetch_array()) {
                            ?>
                                <option class="dropdown-item" value="<?php echo $data1['idbobot']; ?>">
                                    <?php echo $data1['value']; ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <select class="form-control" name="ska  la">
                            <option value="" disabled selected>Pilih Nilai Skala</option>
                            <?php
                            while ($data2 = $dt_query2->fetch_array()) {
                            ?>
                                <option class="dropdown-item" value="<?php echo $data2['idskala']; ?>">
                                    <?php echo $data2['value']; ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <br>
                <a href="dtmatrix.php">
                    <button type="submit" name="Tambah" class="btn btn-info">Tambah</button>
                </a>
            </form>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>

</html>