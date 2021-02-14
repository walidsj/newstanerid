<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="Staner.id adalah aplikasi khusus untuk mahasiswa dan mahasiswi PKN STAN kampus kedinasan Kementerian Keuangan Republik Indonesia">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

  <title><?= !empty($title) ? $title . ' - ' . getenv('APP_NAME') : getenv('APP_NAME'); ?></title>

  <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>assets/img/favicon.png" />

  <!-- other load css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>assets/vendor/slick/slick.css" />
  <link rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>assets/vendor/slick/slick-theme.css" />

  <!-- load css good -->
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/app.css">

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
      opacity: .9;
    }

    .img-nav.active,
    .img-nav:hover {
      opacity: 2;
    }
  </style>
</head>

<body>
  <?= $this->load->view('components/preloader', null, true); ?>
  <div id="root">