<?php
    include "koneksi.php";
    $nma = $_POST['alternatif'];
    $sql = "INSERT INTO alternatif (nmalternatif) VALUES ('".$nma."')";
    $a = $koneksi->query($sql);
        if($a === true){
            ?>
            <script language="javascript">
            alert("Alternatif telah ditambahkan!")
            document.location="dtalternatif.php";
            </script>
            <?php
        }else{
            echo "Terjadi error!";
        }
    ?>