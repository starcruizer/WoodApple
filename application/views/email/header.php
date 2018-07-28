<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title>Wood Apple School</title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="<?= base_url('assets/images/favicon.png'); ?>" rel="ico" type="images/ico" />

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/mdbootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/home.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/mdbootstrap/css/mdb.min.css'); ?>">
</head>
<body>

<!-- Navigation Bar Starts -->
<nav class="navbar navbar-expand-lg navbar-woodapple fixed-top">
	<div class="container">
  <a class="navbar-brand" href="#"><img src="<?= base_url('assets/images/woodapple-logo.png'); ?>" class="img-fluid" height="" width="100px" /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <img src="<?= base_url('assets/icons/site/png/shield.png'); ?>" height="30px" width="30px" />
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(''); ?>">Home</a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('home/about'); ?>">About</a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('home/programs'); ?>">Programs</a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('home/gallery'); ?>">Gallery</a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('home/team'); ?>">Team</a>
      </li>
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('home/events'); ?>">Events<span class="sr-only">(current)</span></a>
    </li>
	<!-- 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
	-->
    </ul>
    <ul class="navbar-nav">
	    <li class="nav-item">
            <a class="nav-link" href="#">Register<span class="sr-only">(current)</span></a>
        </li>
		<li class="nav-item">
            <a class="nav-link" href="<?= base_url('user/login'); ?>">Login<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('email'); ?>">Contact Us<span class="sr-only">(current)</span></a>
        </li>
	</ul>
  </div>
</div>
</nav>
<!-- Navigation Bar Ends -->
