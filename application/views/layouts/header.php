<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="Staner.id adalah aplikasi khusus untuk mahasiswa dan mahasiswi PKN STAN kampus kedinasan Kementerian Keuangan Republik Indonesia">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

  <title><?= $title; ?> - Staner.id</title>

  <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>assets/img/favicon.png" />
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/custom.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
  <link id="effect" rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>assets/vendor/slick/slick.css" />
  <link rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>assets/vendor/slick/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/hamburgers/css/hamburgers.min.css">
  <link rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>assets/vendor/slinky/css/slinky.min.css" />
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/plyr/plyr.css">
  <style type="text/css">
    .scrollable-menu {
      height: auto;
      max-height: 50vh;
      overflow-x: hidden;
    }

    #root {
      width: 100%;
      max-width: 480px;
      margin-left: auto;
      margin-right: auto;
      overflow: hidden;
      box-shadow: 0 0 24px rgba(0, 0, 0, .15);
      min-height: 100vh;
      background-color: #fff;
    }

    body {
      background: #f5f5f5 url(https://etanee.id/static/media/body-pattern.09a0373a.png) repeat 50%/224px;
      background-attachment: fixed;
    }

    body,
    html {
      position: relative;
      width: 100%;
      height: 100vh;
    }

    .navbar {
      position: fixed;
      background-color: #fff;
      width: 100%;
      z-index: 10;
      max-width: 480px;
      height: 72px;
      margin: 0 auto;
    }

    .plyr--audio .plyr__controls {
      background: transparent;
      padding: 0;
      border: none;
    }

    button.plyr__controls__item.plyr__control {
      border-radius: 50%;
    }

    plyr--audio .plyr__control.plyr__tab-focus,
    .plyr--audio .plyr__control:hover,
    .plyr--audio .plyr__control[aria-expanded=true] {
      border-radius: 50%;
    }

    .img-nav {
      opacity: .7;
    }

    .img-nav.active,
    .img-nav:hover {
      opacity: 1;
    }
  </style>
</head>

<body>
  <div id="root">