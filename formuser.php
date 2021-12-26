<html>

<head>
    <title>User</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
    <?php
    include "koneksi.php";
    include "sidebar.php";
    include "footer.php";
    ?>

    <div class="col-md-10 p-5 pt-2">
        <h3>Form Add User</h3>
        <hr class="bg-secondary">

        <div class="panel-body ">
            <form action="insertuser.php" method="POST">

                <div class="form-group">
                    <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <input class="form-control" type="text" name="username" placeholder="Masukkan Username" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Masukkan Password" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <select class="form-control dropdown-menu dropdown-menu-right show" name="level">
                            <option class="dropdown-item" value="" disabled selected>Pilih Level</option>
                            <option class="dropdown-item" value="admin" >Admin</option>
                            <option class="dropdown-item" value="user" >User</option>
                        </select>
                    </div>
                </div>
                <br>
                <a href="dtuser.php">
                    <button type="submit" name="Tambah" class="btn btn-info">Tambah</button>
                </a>
            </form>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>

</html>