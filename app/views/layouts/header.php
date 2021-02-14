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
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/app.css?v=1.0">
</head>

<body>
  <?= $this->load->view('components/preloader', null, true); ?>
  <div id="root">