<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="<?= base_url('template/assets/img/find_user.png" class="user-image img-responsive'); ?>"/>
            </li>    
            <li>
                <a  href="<?= site_url('home'); ?>"><i class="fa fa-globe"></i> View Map</a>
            </li>
            <li>
                <a  href="<?= site_url('marker'); ?>"><i class="fa fa-map-marker"></i> Marker</a>
            </li>
            <li>
                <a  href="<?= site_url('polyline'); ?>"><i class="fa fa-line-chart"></i> Polyline</a>
            </li>
            <li>
                <a  href="<?= site_url('rute'); ?>"><i class="fa fa-line-chart"></i> Rute</a>
            </li>
            <li>
                <a  href="<?= site_url('get-coordinat'); ?>"><i class="fa fa-map-marker"></i> Get Coordinat</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-map-marker"></i> TPS Kota Bandung<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?= site_url('tps'); ?>">Pemetaan Lokasi TPS</a>
                    </li>
                    <li>
                        <a href="<?= site_url('tps4'); ?>">Pemetaan Lokasi TPS Control Search</a>
                    </li>
                </ul>
            </li>  
        </ul>
    </div>
</nav>  
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2><?= $title; ?></h2>                   
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />