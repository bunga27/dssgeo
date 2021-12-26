<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="ub/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="ub/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard Dark Edition by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="ub/assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="ub/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="ub/assets/img/sidebar-2.jpg">

      <div class="logo"><a href="home.php" class="simple-text logo-normal">
          USER DSS
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="./homeUser.php">
              <i class="material-icons">dashboard</i>
              <p>Home</p>
            </a>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="resultUser.php?metode=SAW">
              <i class="material-icons">library_books</i>
              <p>Result SAW</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="resultUser.php?metode=WP">
              <i class="material-icons">library_books</i>
              <p>Result WP</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="resultUser.php?metode=TOPSIS">
              <i class="material-icons">library_books</i>
              <p>Result TOPSIS</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="resultUser.php?metode=MULTIMOORA">
              <i class="material-icons">library_books</i>
              <p>Result MULTIMOORA</p>
            </a>
          </li>

        </ul>
      </div>
    </div>

    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">

          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">

            <ul class="navbar-nav">

              <li class="nav-item">
                <a class="nav-link" href="logout.php" onclick="return confirm('Apakah anda ingin keluar?');">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>