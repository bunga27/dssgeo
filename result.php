<html>
<title>Result</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style type="text/css">
</style>
</head>

<body>
    <?php
    error_reporting(0);
    include "sidebar.php";
    include "koneksi.php";
    include "footer.php";
    $metode = $_GET['metode'];
    if ($metode == 'SAW') {
    ?>
        <div class="col-md-10 p-5 pt-2 mt-3" >
            <h4>Result SAW<h4>

                    <h5 style="text-align:center">Detail Matrix Keputusan</h5>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Id Matrix</th>
                                <th>Id Alternatif</th>
                                <th>Nama Alternatif</th>
                                <th>Id Kriteria</th>
                                <th>Nama Kriteria</th>
                                <th>Jenis</th>
                                <th>Id Bobot</th>
                                <th>Value</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $a = "SELECT * FROM vmatrixkeputusan";
                            $b = $koneksi->query($a);
                            while ($c = $b->fetch_row()) {
                            ?>

                                <tr>
                                    <td class="center"><?php echo $c[0]; ?></td>
                                    <td class="center"><?php echo $c[1]; ?></td>
                                    <td class="center"><?php echo $c[2]; ?></td>
                                    <td class="center"><?php echo $c[3]; ?></td>
                                    <td class="center"><?php echo $c[4]; ?></td>
                                    <td class="center"><?php echo $c[5]; ?></td>
                                    <td class="center"><?php echo $c[6]; ?></td>
                                    <td class="center"><?php echo $c[7]; ?></td>
                                    <td class="center"><?php echo $c[8]; ?></td>
                                    <td class="center"><?php echo $c[9]; ?></td>
                                    
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                    <hr class="bg-dark">

                    <h5 style="text-align:center">Normalisasi</h5>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Id Matrix</th>
                                <th>Id Alternatif</th>
                                <th>Nama Alternatif</th>
                                <th>Id Kriteria</th>
                                <th>Nama Kriteria</th>
                                <th>Jenis</th>
                                <th>Id Bobot</th>
                                <th>Value</th>
                                <th>Nilai</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $a = "SELECT * FROM vnormalisasi";
                            $b = $koneksi->query($a);
                            while ($c = $b->fetch_row()) {
                            ?>

                                <tr>
                                    <td class="center"><?php echo $c[0]; ?></td>
                                    <td class="center"><?php echo $c[1]; ?></td>
                                    <td class="center"><?php echo $c[2]; ?></td>
                                    <td class="center"><?php echo $c[3]; ?></td>
                                    <td class="center"><?php echo $c[4]; ?></td>
                                    <td class="center"><?php echo $c[5]; ?></td>
                                    <td class="center"><?php echo $c[6]; ?></td>
                                    <td class="center"><?php echo $c[7]; ?></td>
                                    <td class="center"><?php echo $c[8]; ?></td>
                                    <td class="center"><?php echo $c[9]; ?></td>
                                    <td class="center"><?php echo $c[10]; ?></td>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                    <hr class="bg-dark">

                    <h5 style="text-align:center">Ranking</h5>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Id Alternatif</th>
                                <th>Nama Alternatif</th>
                                <th>Ranking</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $a = "SELECT * FROM vrangking";
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
                    </table>
        </div>
    <?php
    } elseif ($metode == 'WP') {
    ?>
        <div class="col-md-10 p-5 pt-2 mt-3" >
            <h4>Result WP<h4>

                    <h5 style="text-align:center">Detail Matrix Keputusan</h5>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Id Matrix</th>
                                <th>Id Alternatif</th>
                                <th>Nama Alternatif</th>
                                <th>Id Kriteria</th>
                                <th>Nama Kriteria</th>
                                <th>Jenis</th>
                                <th>Id Bobot</th>
                                <th>Value</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $a = "SELECT * FROM vmatrixkeputusan";
                            $b = $koneksi->query($a);
                            while ($c = $b->fetch_row()) {
                            ?>

                                <tr>
                                    <td class="center"><?php echo $c[0]; ?></td>
                                    <td class="center"><?php echo $c[1]; ?></td>
                                    <td class="center"><?php echo $c[2]; ?></td>
                                    <td class="center"><?php echo $c[3]; ?></td>
                                    <td class="center"><?php echo $c[4]; ?></td>
                                    <td class="center"><?php echo $c[5]; ?></td>
                                    <td class="center"><?php echo $c[6]; ?></td>
                                    <td class="center"><?php echo $c[7]; ?></td>
                                    <td class="center"><?php echo $c[8]; ?></td>
                                    <td class="center"><?php echo $c[9]; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                    <hr class="bg-dark">

                    <h5 style="text-align:center">Normalisasi Bobot</h5>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Id Bobot</th>
                                <th>Id Kriteria</th>
                                <th>Value</th>
                                <th>Jumlah</th>
                                <th>Normalisasi_w</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $a = "SELECT * FROM wp_normalisasiterbobot";
                            $b = $koneksi->query($a);
                            while ($c = $b->fetch_row()) {
                            ?>

                                <tr>
                                    <td class="center"><?php echo $c[0]; ?></td>
                                    <td class="center"><?php echo $c[1]; ?></td>
                                    <td class="center"><?php echo $c[2]; ?></td>
                                    <td class="center"><?php echo $c[3]; ?></td>
                                    <td class="center"><?php echo $c[4]; ?></td>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                    <hr class="bg-dark">

                    <h5 style="text-align:center">Nilai S</h5>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Id Alternatif</th>
                                <th>Nama Alternatif</th>
                                <th>Nilai S</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $a = "SELECT * FROM wp_nilais";
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
                    </table>

                    <hr class="bg-dark">

                    <h5 style="text-align:center">Nilai V</h5>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Id Alternatif</th>
                                <th>Nama Alternatif</th>
                                <th>Nilai V</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $a = "SELECT * FROM wp_nilaiv";
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
                    </table>

                    <hr class="bg-dark">
        </div>

    <?php

    } elseif ($metode == 'TOPSIS') {
    ?>
        <div class="col-md-10 p-5 pt-2 mt-3" >
            <h4>Result TOPSIS<h4>

                    <h5 style="text-align:center">Detail Matrix Keputusan</h5>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Id Matrix</th>
                                <th>Id Alternatif</th>
                                <th>Nama Alternatif</th>
                                <th>Id Kriteria</th>
                                <th>Nama Kriteria</th>
                                <th>Id Bobot</th>
                                <th>Value</th>
                                <th>Nilai</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $a = "SELECT * FROM vmatrixkeputusan";
                            $b = $koneksi->query($a);
                            while ($c = $b->fetch_row()) {
                            ?>

                                <tr>
                                    <td class="center"><?php echo $c[0]; ?></td>
                                    <td class="center"><?php echo $c[1]; ?></td>
                                    <td class="center"><?php echo $c[2]; ?></td>
                                    <td class="center"><?php echo $c[3]; ?></td>
                                    <td class="center"><?php echo $c[4]; ?></td>
                                    <td class="center"><?php echo $c[5]; ?></td>
                                    <td class="center"><?php echo $c[6]; ?></td>
                                    <td class="center"><?php echo $c[7]; ?></td>
                                    <td class="center"><?php echo $c[8]; ?></td>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                    <hr class="bg-dark">

                    <h5 style="text-align:center">Pembagi</h5>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Id Kriteria</th>
                                <th>Nama Kriteria</th>
                                <th>Bagi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $a = "SELECT * FROM topsis_pembagi";
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
                    </table>

                    <hr class="bg-dark">

                    <h5 style="text-align:center">Matrix Ternormalisasi</h5>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Id Matrix</th>
                                <th>Id Alternatif</th>
                                <th>Nama Alternatif</th>
                                <th>Id Kriteria</th>
                                <th>Nama Kriteria</th>
                                <th>Id Bobot</th>
                                <th>Value</th>
                                <th>Nilai</th>
                                <th>Keterangan</th>
                                <th>Normalisasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $a = "SELECT * FROM topsis_normalisasi";
                            $b = $koneksi->query($a);
                            while ($c = $b->fetch_row()) {
                            ?>

                                <tr>
                                    <td class="center"><?php echo $c[0]; ?></td>
                                    <td class="center"><?php echo $c[1]; ?></td>
                                    <td class="center"><?php echo $c[2]; ?></td>
                                    <td class="center"><?php echo $c[3]; ?></td>
                                    <td class="center"><?php echo $c[4]; ?></td>
                                    <td class="center"><?php echo $c[5]; ?></td>
                                    <td class="center"><?php echo $c[6]; ?></td>
                                    <td class="center"><?php echo $c[7]; ?></td>
                                    <td class="center"><?php echo $c[8]; ?></td>
                                    <td class="center"><?php echo $c[9]; ?></td>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                    <hr class="bg-dark">

                    <h5 style="text-align:center">Matrix Ternormalisasi Terbobot <h5>
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>Id Matrix</th>
                                        <th>Id Alternatif</th>
                                        <th>Nama Alternatif</th>
                                        <th>Id Kriteria</th>
                                        <th>Nama Kriteria</th>
                                        <th>Id Bobot</th>
                                        <th>Value</th>
                                        <th>Nilai</th>
                                        <th>Keterangan</th>
                                        <th>Normalisasi</th>
                                        <th>Terbobot</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $a = "SELECT * FROM topsis_terbobot";
                                    $b = $koneksi->query($a);
                                    while ($c = $b->fetch_row()) {
                                    ?>

                                        <tr>
                                            <td class="center"><?php echo $c[0]; ?></td>
                                            <td class="center"><?php echo $c[1]; ?></td>
                                            <td class="center"><?php echo $c[2]; ?></td>
                                            <td class="center"><?php echo $c[3]; ?></td>
                                            <td class="center"><?php echo $c[4]; ?></td>
                                            <td class="center"><?php echo $c[5]; ?></td>
                                            <td class="center"><?php echo $c[6]; ?></td>
                                            <td class="center"><?php echo $c[7]; ?></td>
                                            <td class="center"><?php echo $c[8]; ?></td>
                                            <td class="center"><?php echo $c[9]; ?></td>
                                            <td class="center"><?php echo $c[10]; ?></td>
                                            </td>
                                        </tr>
                                    <?php


                                    }
                                    ?>
                                </tbody>
                            </table>


                            <hr class="bg-dark">

                            <h5 style="text-align:center">Matrix Solusi Ideal Positif (A+) dan Matrix Solusi Ideal Negatif (A-) <h5>
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th>Id Matrix</th>
                                                <th>Id Kriteria</th>
                                                <th>Nama Kriteria</th>
                                                <th>Maximum</th>
                                                <th>Minimum</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $a = "SELECT * FROM topsis_maxmin";
                                            $b = $koneksi->query($a);
                                            while ($c = $b->fetch_row()) {
                                            ?>

                                                <tr>
                                                    <td class="center"><?php echo $c[0]; ?></td>
                                                    <td class="center"><?php echo $c[1]; ?></td>
                                                    <td class="center"><?php echo $c[2]; ?></td>
                                                    <td class="center"><?php echo $c[3]; ?></td>
                                                    <td class="center"><?php echo $c[4]; ?></td>
                                                    </td>
                                                </tr>
                                            <?php


                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                    <h5 style="text-align:center">Jarak Solusi Ideal Positif (D+) dan Solusi Ideal Negatif (D-)<h5>
                                            <table class="table ">
                                                <thead>
                                                    <tr>
                                                        <th>Id Alternatif</th>
                                                        <th>D(+)</th>
                                                        <th>D(+)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $a = "SELECT * FROM topsis_sipsin";
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
                                            </table>

                                            <h5 style="text-align:center">Nilai Preferensi Setiap Alternatif<h5>
                                                    <table class="table ">
                                                        <thead>
                                                            <tr>
                                                                <th>Id Alternatif</th>
                                                                <th>D(+)</th>
                                                                <th>D(+)</th>
                                                                <th>Nilai V</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $a = "SELECT * FROM topsis_nilaiv";
                                                            $b = $koneksi->query($a);
                                                            while ($c = $b->fetch_row()) {
                                                            ?>

                                                                <tr>
                                                                    <td class="center"><?php echo $c[0]; ?></td>
                                                                    <td class="center"><?php echo $c[1]; ?></td>
                                                                    <td class="center"><?php echo $c[2]; ?></td>
                                                                    <td class="center"><?php echo $c[3]; ?></td>
                                                                    </td>
                                                                </tr>
                                                            <?php


                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>

                                                    <hr class="bg-dark">
        </div>
    <?php

    } elseif ($metode == 'MULTIMOORA') {
    ?>
        <div class="col-md-10 p-5 pt-2 mt-3">
            <h4>Result MULTIMOORA<h4>

                    <h5 style="text-align:center">Detail Normalisasi</h5>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Id Matrix</th>
                                <th>Id Alternatif</th>
                                <th>Nama Alternatif</th>
                                <th>Id Kriteria</th>
                                <th>Nama Kriteria</th>
                                <th>Id Bobot</th>
                                <th>Value</th>
                                <th>Nilai</th>
                                <th>Keterangan</th>
                                <th>Pra</th>
                                <th>Normalisasi</th>
                                <th>Normalisasi Bobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $a = "SELECT * FROM multimoora_3";
                            $b = $koneksi->query($a);
                            while ($c = $b->fetch_row()) {
                            ?>

                                <tr>
                                    <td class="center"><?php echo $c[0]; ?></td>
                                    <td class="center"><?php echo $c[1]; ?></td>
                                    <td class="center"><?php echo $c[2]; ?></td>
                                    <td class="center"><?php echo $c[3]; ?></td>
                                    <td class="center"><?php echo $c[4]; ?></td>
                                    <td class="center"><?php echo $c[5]; ?></td>
                                    <td class="center"><?php echo $c[6]; ?></td>
                                    <td class="center"><?php echo $c[7]; ?></td>
                                    <td class="center"><?php echo $c[8]; ?></td>
                                    <td class="center"><?php echo $c[9]; ?></td>
                                    <td class="center"><?php echo $c[10]; ?></td>
                                    <td class="center"><?php echo $c[11]; ?></td>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                    <hr class="bg-dark">

                    <h5 style="text-align:center">Multimoora</h5>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Id Alternatif</th>
                                <th>Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $a = "SELECT * FROM multimoora_4";
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
                    </table>

                    

                                                    <hr class="bg-dark">
        </div>
    <?php

    } else {
    ?>
        <div class="col-md-10 p-5 pt-2 mt-3" >
            <h5>Pilih menu result yang telah disediakan di sidebar! <h5>
        </div>
    <?php
    }
    ?>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>

</html>