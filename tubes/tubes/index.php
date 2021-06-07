<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/materialize.css" />
  <script src="js/materialize.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--My CSS-->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!--My Fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Viga&display=swap" rel="stylesheet">
  <style>
    @media only screen and (max-width: 600px) {
      .parallax-container {
        height: 250px;
      }
    }

    @media only screen and (max-width: 600px) {
      .novel img {
        max-width: 100px !important;
        max-height: 60px !important;
      }
    }

    @media only screen and (max-width: 600px) {
      .icons {
        padding-left: 130px;
        max-width: 250px !important;

      }

      .text a {
        font-size: 8px;
      }
    }
  </style>
  <link rel="shorcut icon" href="logo2.jpeg">
  <title>Devi Indriawati</title>
</head>

<body>
  <div class="navbar-fixed">
    <nav class="brown lighten-1">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo">NOVEL</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="../tubes/index.php">HOME</a></li>
            <li><a href="php/novel.php">ALL NOVEL</a></li>
            <li><a href="php/login.php" class="waves-effect #8d6e63 brown lighten-1 btn">LOGIN</a></li>
            <li><a href="php/registrasi.php" class="waves-effect #8d6e63 brown lighten-1 btn">REGISTRASI</a></li>

          </ul>
        </div>
    </nav>
  </div>
  </div>

  <!--SideNav-->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="../tubes/index.php">HOME</a></li>
    <li><a href="../tubes/php/novel.php">ALL NOVEL</a></li>
    <li><a href="../tubes/php/login.php" class="waves-effect #795548 brown btn">LOGIN</a></li>
    <li><a href="../tubes/php/registrasi.php" class="waves-effect #795548 brown btn">REGISTRASI</a></li>
  </ul>

  <!--Slider -->
  <div class="slider fullscreen">
    <ul class="slides">
      <li>
        <img src="../tubes/assets/img/2.jpg">
        <div class="caption center-align tulisan">
          <h1><b>Welcome To My Website!</b></h1>
        </div>
      </li>
      <li>
        <img src="../tubes/assets/img/3.jpg">
        <div class="caption left-align tulisan">
          <h2>Sudahi Galaumu Mari Membeli Novel di Websiteku</h2>
        </div>
      </li>
      <li>
        <img src="../tubes/assets/img/4.jpg">
        <div class="caption right-align tulisan">
          <h2>Jangan membaca sosial media mulu, mari membaca buku</h2>
        </div>
      </li>
      <li>
        <img src="../tubes/assets/img/21.jpg">
        <div class="caption center-align tulisan">
          <h2>Hilangkan Bosanmu dengan membaca</h2>
        </div>
      </li>
    </ul>
  </div>
  <!--Section-->
  <section id="index" class="index #795548 white" style="margin-top: 600px">
    <div class="container">
      <div class="row">
        <div class="col m4 s12">
          <div class="card-panel center ">
            <h5 style="color:sienna"> Jangan membaca sampai koma, Tapi bacalah sampai titik. </h5>
          </div>
        </div>
        <div class="col m4 s12">
          <div class="card-panel center">
            <h5 style="color:sienna">Ada yang membaca untuk mengenal, ada yang membaca untuk mengenang</h5>
          </div>
        </div>
        <div class="col m4 s12">
          <div class="card-panel center">
            <h5 style="color: sienna">Membaca, bagi pikiran, seperti olahraga bagi tubuh</h5>
          </div>
        </div>
      </div>
  </section>
  <!-- Paralax -->
  <div class="parallax-container center">
    <div class="parallax"><img src="../tubes/assets/img/2.jpg"></div>
    <div class="row">
      <div class="container novel">
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  <!--Footer-->
  <footer class="page-footer background: brown">
    <h5 class="white-text">
      <center>Jika berminat Hubungi kontak Dibawah ini</center>
    </h5>
    <div class="row">
      <div class="container text">
        <div class="icons center text-white">
          <a class="waves-effect waves-light btn-small btn-#795548 brown"></i>0812367487</a>
          <a class="waves-effect waves-light btn-small btn-#795548 brown"></i>Depiw12@gmail.com</a>
        </div>
        <p>
          <center>© 2020 Copyright Deviindr</center>
        </p>
      </div>
    </div>
    </div>
    </nav>
  </footer>


  <!--JavaScript-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);

    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider);
    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);
  </script>
</body>

</html>