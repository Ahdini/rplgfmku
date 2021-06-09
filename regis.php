<?php
    session_start();
    if(isset($_COOKIE["userID"])){
      header("location:after.php");
      exit();
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
    <link rel="stylesheet" href="regis.css">
    <title>Registrasi Page</title>
    
  </head>

  <body>
    <!-- ======= Header ======= -->
    <div class="banner">
        <div class="navbar order-last order-lg-0">
            <h1>RASA</h1>
            <ul>
                <li><a class="nav-link scrollto active" href="beranda.html">Beranda</a></li>
                  <li class="dropdown"><a href="#"><span>Reservasi</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                      <li><a href="login.php">Buat Reservasi</a></li>
                      <li><a href="login.php">Reservasi Saya</a></li>
                      <li><a href="login.php">Riwayat Reservasi</a></li>
                    </ul>
                  </li>
                <a class="nav-link scrollto" href="login.php"><button>Masuk</button></a>
            </ul>
        </div>
    </div>

    <!-- ======= Form regis ======= -->
    <form action="doRegis.php" method="post" class="box">
    <div class="header">
           <h4>Selamat datang di Rasa</h4>
           <p>Daftarkan ke akunmu</p>
       </div>
       <div class="login-area">
            <?php
              if(isset($_SESSION["message"])){
              echo $_SESSION["message"];
              unset($_SESSION["message"]);
              }
              /*if(isset($_sesiData['status']['msg'])){
                echo $_sesiData['status']['msg'];
                unset($_sesiData['status']['msg']);
              }*/
            ?>
            <input type="text" class="username" name="inputEmail" placeholder="Email">
            <input type="text" class="username" name="inputNamaAwal" placeholder="Nama Awal">
            <input type="text" class="username" name="inputNamaAkhir" placeholder="Nama Akhir">
            <input type="password" class="password" name="inputPassword1" placeholder="Kata Sandi">
            <input type="password" class="password" name="inputPassword2" placeholder="Konfirmasi Kata Sandi"><br />
            <input type="submit" value="Daftar" class="submit">
       </div>
   </form> 


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>