<?php  
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: ../control/login.php");
      }else{
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/index.css">
    <link rel="stylesheet" type="text/css" href="../../fontawesome/css/all.min.css">

    <title>IDL THRIFT</title>
  </head>
  <body>

  <!-- Jumbotron -->
      <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
          <h1 class="display-4"><span class="font-weight-bold">IDL THRIFT</span></h1>
          <hr>
          <p class="lead font-weight-bold">If You Can't Stop Thinking About It <br> BUY IT.....</p>
        </div>
      </div>
  <!-- Akhir Jumbotron -->

  <!-- Navbar -->
      <nav class="navbar navbar-expand-lg  bg-dark">
        <div class="container">
        <a class="navbar-brand text-white" href="user.php"><strong>IDL</strong> THRIFT </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mr-4" href="user.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="menu_pembeli.php">DAFTAR KATALOG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="pesanan_pembeli.php">PESANAN ANDA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="../control/logout.php">LOGOUT</a>
            </li>
          </ul>
        </div>
       </div> 
      </nav>
  <!-- Akhir Navbar -->

  <!-- Menu -->    
      <div class="container">
        <div class="judul text-center mt-5">
          <h3 class="font-weight-bold">IDL THRIFT</h3>
          <h5>
            <br> Alamat :<strong>Komplek lantang tipo no B29, Kec. Sungai Raya Kab.Kubu Raya, Kalimantan Barat </strong>
            <br>Buka:<strong>10.00 – 22.00 WIB</strong>
            <br>Since :<strong>2022 – now</strong> 
            <br>ABOUT US : 
            <br>IDL Thrift berdiri sejak tahun 2022 yang menyediakan sebuah produk produk fashion yang terjangkau bagi masyarakat sekitar. IDL Thrift ini produk fashion berupa sweater crewneck, hoodie, kaos, kemeja, blouse, dress, celana, dan lain-lain. Produk yang dijual merupakan barang dari ball yang telah disortir sebelum dijual. IDL Thrift ini terletak di Komplek lantang tipo no B29, Kec. Sungai Raya Kab.Kubu Raya, Kalimantan Barat .
          </h5>
        </div>

      </div>
  <!-- Akhir Menu -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.js"></script>
  </body>
</html>
<?php } ?>