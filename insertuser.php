<?php
include "koneksi.php";
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$sql = "INSERT INTO pengguna (nama, username, password, level) VALUES ('" . $nama . "', '" . $username . "','" . $password . "','" . $level . "')";
$a = $koneksi->query($sql);
if ($a === true) {
?>
    <script language="javascript">
        alert("User telah ditambahkan!")
        document.location = "dtuser.php";
    </script>
<?php
} else {
    echo "Terjadi error!";
}
?>