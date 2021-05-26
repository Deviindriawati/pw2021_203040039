<!DOCTYPE html>
<html>

<head>
  <title>Halaman Admin</title>
  <link rel="stylesheet" href="../css/materialize.css" />
  <script src="../js/materialize.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--My CSS-->
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <!--My Fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Viga&display=swap" rel="stylesheet">
  <style>
    header,
    main,
    footer {
      padding-left: 300px;
    }

    @media only screen and (max-width : 992px) {

      header,
      main,
      footer {
        padding-left: 0;
      }
    }

    .card {
      margin-left: 200px;
      width: 750px;
      height: 470px;
      text-align: center;
      box-shadow: 7px 7px 7px 7px rgba(0, 0, 0, 0.4);
      font-family: 'Bree Serif', serif;
    }
  </style>

  <title></title>
</head>

<body style="background-image: url(../assets/img/20.jpg); background-size: cover;">
  <div class="navbar-fixed">
    <nav>
      <div class="container">
        <div class="nav-wrapper">


          <ul class="right hide-on-med-and-down">
            <li><a href="../index.php">HOME</a></li>
            <li><a href="menu.php">MENU</a></li>
            <li><a href="logout.php" class="waves-effect #795548 brown btn">LOGOUT</a></li>

          </ul>
        </div>
    </nav>
  </div>
  </div>
  <ul id="slide-out" class="sidenav sidenav-fixed">
    <div class="user-view">
      <div class="background">
        <img src="../assets/img/1.jpg">
      </div>
      <a href="#user"><img class="circle" src="../assets/img/br1.jpg"></a>
      <a href="#name"><span class="white-text name">Devi Indriawati</span></a>
      <a href="#email"><span class="white-text email">deviindriawati02@gmail.com</span></a>
    </div>
    </li>
    <li><a class="subheader">Menu</a></li>
    <li><a href="#!"><i class="material-icons">dashboard</i>Dashboard</a></li>
    <li><a href="admin.php"><i class="material-icons">build</i>Data Setting</a></li>
    <li>
      <div class="divider"></div>
    </li>
    <li><a class="subheader">Other</a></li>
    <li><a href="logout.php" class="waves-effect #795548 brown btn">LOGOUT</a></li>
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  <div class="container">
    <div class="Profile row py-5 justify-content-center" id="Profile">
      <div class="col-lg-8">
        <div class="card-shadow-lg-8">
          <div class="card shadow-lg border-0" style="border-radius: 30px;">
            <div class="card-body px-5 pb-5">
              <div class="row">
                <div class="col">
                  <h3 class="card-title font-weight bold">Hi!</h3>
                </div>
                <div class="col pt-3">
                  <img src="assets/img/3.jpg" alt style="width: 100px;" class="rounded-circle float-right">
                </div>
              </div>
              <div class="row">
                <p class="card-text text-justify pt-3">
                  I am Marsha Yunita Dwi Putri Sarjono and i was born in Batang Central Java at June 7th 2001, now i am 18 years old girl. I am a university student in Pasundan University and live in Indonesia. My major in university is Informatics Engineering.
                </p>
                <p class="card-text text-justify">
                  My hobbies are watching a movie, learning new language, reading a novel, hanging out with close friends, spending time with family, and also i am a fan of technology, food, and cooking. I’m also interested in web development and programming.
                </p>
              </div>
              <div class="row">
                <div class="col">
                  <p class="card-text text-right pt-3">Best Regards,</p>
                  <img src="../assets/img/ttd.png" style="width: 120px; height: 60px;" class="float-right">
                  <br>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <p class="card-text text-right pt-3 font-weight-bolder">Devi Indriawati</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.sidenav').sidenav();
    });
  </script>

</body>

</html>