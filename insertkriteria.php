<?php
    include "koneksi.php";
    $nmk = $_POST['kriteria'];
    $jenis = $_POST['jenis'];
    $sql = "INSERT INTO kriteria (nmkriteria, jenis) VALUES ('".$nmk."', '".$jenis."')";
    $a = $koneksi->query($sql);
        if($a === true){
            ?>
            <script language="javascript">
            alert("Kriteria telah ditambahkan!")
            document.location="dtkriteria.php";
            </script>
            <?php
        }else{
            echo "Terjadi error!";
        }
    ?>