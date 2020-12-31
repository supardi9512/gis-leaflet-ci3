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