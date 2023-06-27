<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">


	
</head>
<body>

<?php $this->load->view('header'); ?>

    <div class="header-container">
    <div class="logo-container">
      <a href=""><img src="assets/images/logo.png"></a>
    </div>
    <div>
      <span id="header-text-center">Area Pengiriman <br> Jabodetabek</span>
    </div>
    <div>
      <span id="header-text-right">Selamat Datang<br> Customer</span>
    </div>
  </div>
  <div class="search-bar-container">
    <div class="search-bar">
      <input type="text" placeholder="Search">
      <button type="submit"><i class="fas fa-search"></i></button>
    </div>
  </div>


  <br><br><br><br><br><br><br>

<div>

	<div class="slider">
      <span id="slide-1"></span>
      <span id="slide-2"></span>
      <span id="slide-3"></span>
      <div class="image-container">
        <img src="assets/images/banner1.png" class="slide" width="500" height="300" />
        <img src="assets/images/banner2.png" class="slide" width="500" height="300" />
        <img src="assets/images/banner1.png" class="slide" width="500" height="300" />
      </div>
	</div>

	<br><br>


	<div class="menu-bar-2">	
	<div class="menu-item-2 menu-item-active-2">
    	<a href=""><img id="semua-produk" src="assets/images/semua-produk.png" alt="Icon-1"><br>
    	<span>Semua<br>Produk</span></a><div class="menu-item-divider-2"></div>
  	</div>
  	<div class="menu-item-2">
    	<a href=""><img src="assets/images/daging-sapi.png" alt="Icon-2"><br>
    	<span>Daging<br>Sapi</span></a><div class="menu-item-divider-transparent-2"></div>
  	</div>
  	<div class="menu-item-2">
    	<a href=""><img src="assets/images/daging-ayam.png" alt="Icon-3"><br>
    	<span>Daging<br>Ayam</span></a><div class="menu-item-divider-transparent-2"></div>
  	</div>
  	<div class="menu-item-2">
    	<a href=""><img src="assets/images/seafood.png" alt="Icon-4"><br>
    	<span>Sea<br>Food</span></a><div class="menu-item-divider-transparent-2"></div>
  	</div>
  	<div class="menu-item-2">
    	<a href=""><img src="assets/images/ready-to-cook.png" alt="Icon-5"><br>
    	<span>Ready To<br>Cook</span></a><div class="menu-item-divider-transparent-2"></div>
  	</div>
  	</div>

</div>

<br><br><br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>


<?php $this->load->view('footer'); ?>
</body>
</html>
