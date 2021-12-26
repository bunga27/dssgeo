<?php
    include "koneksi.php";
    $idk = $_POST['kriteria'];
    $value = $_POST['value'];
    $sql = "INSERT INTO bobot (idkriteria, value) VALUES ('".$idk."', '".$value."')";
    $a = $koneksi->query($sql);
        if($a === true){
            ?>
            <script language="javascript">
            alert("Bobot telah ditambahkan!")
            document.location="dtbobot.php";
            </script>
            <?php
        }else{
            echo "Terjadi error!";
        }
    ?>