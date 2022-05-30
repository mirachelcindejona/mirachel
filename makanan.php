<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">MAKANAN</a>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="row">
  <div class="col-sm-3">
  <img src="img/burger.jpg" class="d-block w-100" alt="...">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Burger Daging</h5>
        <p class="card-text">Rp.30,000</p>
        <a href="#" class="btn btn-primary">Beli Sekarang</a>
        <a href="#" class="btn btn-primary">Tambahkan Keranjang</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
  <img src="img/kentang.jpg" class="d-block w-100" alt="...">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Kentang Goreng</h5>
        <p class="card-text">Rp.15,000</p>
        <a href="#" class="btn btn-primary">Beli Sekarang</a>
        <a href="#" class="btn btn-primary">Tambahkan Keranjang</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
  <img src="img/pizza.jpg" class="d-block w-100" alt="...">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pizza</h5>
        <p class="card-text">Rp.50,000</p>
        <a href="#" class="btn btn-primary">Beli Sekarang</a>
        <a href="#" class="btn btn-primary">Tambahkan Keranjang</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
  <img src="img/ayam.jpg" class="d-block w-100" alt="...">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Fried Chiken</h5>
        <p class="card-text">Rp.15,000</p>
        <a href="#" class="btn btn-primary">Beli Sekarang</a>
        <a href="#" class="btn btn-primary">Tambahkan Keranjang</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
  <img src="img/hotdogg.jpg" class="d-block w-100" alt="...">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Hot Dog</h5>
        <p class="card-text">Rp.25,000</p>
        <a href="#" class="btn btn-primary">Beli Sekarang</a>
        <a href="#" class="btn btn-primary">Tambahkan Keranjang</a>
      </div>
    </div>
  </div>
</div>

<?php
include('footer.php');
?>