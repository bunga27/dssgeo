<?php
include "sidebar.php";
include "koneksi.php";
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 p-5 pt-2 mt-3">
                <h3>Data Alternatif</h3>
                <hr class="bg-secondary">
                <a href="formalternatif.php">
                    <button type="button" class="btn btn-success">Tambah Data Alternatif</button>
                </a>

                <table class="table ">
                    <thead>
                        <tr>
                            <th>Id Alternatif</th>
                            <th>Nama Alternatif</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $a = "SELECT * FROM alternatif";
                        $b = $koneksi->query($a);
                        while ($c = $b->fetch_row()) {
                        ?>

                            <tr>
                                <td class="center"><?php echo $c[0]; ?></td>
                                <td class="center"><?php echo $c[1]; ?></td>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    <?php
                    include "footer.php";
                    ?>
            </div>
        </div>
    </div>