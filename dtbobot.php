<?php
include "sidebar.php";
include "koneksi.php";
include "footer.php";


?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 p-5 pt-2 mt-3">
            <h3>Data Bobot</h3>
            <hr class="bg-secondary">
            <a href="formbobot.php">
                <button type="button" class="btn btn-success">Tambah Data Bobot</button>
            </a>

            <table class="table">
                <thead>
                    <tr>
                        <th>Id Bobot</th>
                        <th>Id Kriteria</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = "SELECT * FROM bobot";
                    $b = $koneksi->query($a);
                    while ($c = $b->fetch_row()) {
                    ?>

                        <tr>
                            <td class="center"><?php echo $c[0]; ?></td>
                            <td class="center"><?php echo $c[1]; ?></td>
                            <td class="center"><?php echo $c[2]; ?></td>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
        </div>
    </div>
</div>