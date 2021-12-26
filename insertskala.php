<?php
    include "koneksi.php";
    $value = $_POST['value'];
    $ket = $_POST['keterangan'];
    $sql = "INSERT INTO skala (value, keterangan) VALUES ('".$value."', '".$ket."')";
    $a = $koneksi->query($sql);
        if($a === true){
            ?>
            <script language="javascript">
            alert("Skala telah ditambahkan!")
            document.location="dtskala.php";
            </script>
            <?php
        }else{
            echo "Terjadi error!";
        }
    ?>