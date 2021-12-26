<?php
    include "koneksi.php";
    $alt = $_POST['alternatif'];
    $bobot = $_POST['bobot'];
    $skala = $_POST['skala'];
    $sql = "INSERT INTO matrixkeputusan (idalternatif, idbobot, idskala) VALUES ('".$alt."', '".$bobot."', '".$skala."')";
    $a = $koneksi->query($sql);
        if($a === true){
            ?>
            <script language="javascript">
            alert("Matrix telah ditambahkan!")
            document.location="dtmatrix.php";
            </script>
            <?php
        }else{
            echo "Terjadi error!";
        }
    ?>