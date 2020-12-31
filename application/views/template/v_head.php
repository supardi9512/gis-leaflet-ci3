<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GIS Leaflet : <?= $title; ?></title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?= base_url('template/assets/css/bootstrap.css'); ?>" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?= base_url('template/assets/css/font-awesome.css'); ?>" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?= base_url('template/assets/css/custom.css'); ?>" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- LEAFLET -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?= base_url('template/assets/js/jquery-1.10.2.js'); ?>"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?= base_url('template/assets/js/bootstrap.min.js'); ?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?= base_url('template/assets/js/jquery.metisMenu.js'); ?>"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="<?= base_url('template/assets/js/custom.js'); ?>"></script>

    <!-- LEAFLET CONTROL SEARCH -->
    <link rel="stylesheet" href="<?= base_url('leaflet-search/src/leaflet-search.css'); ?>" />
    <script src="<?= base_url('leaflet-search/src/leaflet-search.js'); ?>"></script>
</head>