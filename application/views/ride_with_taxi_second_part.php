<!DOCTYPE html>
<html lang="en">
<?php
$this->load->view('inc/head', array(
    "assets" => $assets,
    "extra_css" => array()
));
?>

<body class="theme-2">

<header class="theme-2">
    <div class="header__upper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header__upper--left">
                        <div class="logo">
                            <a href="index.html"><img src="<?php echo $assets['img'];?>logo-main.png" alt=""></a>
                        </div>
                        <div class="search-bar">
                            <form class="form">
                                <span class="icon icon-left"><i class="fas fa-map-marker-alt"></i></span>
                                <input class="form-control" type="search" name="search-bar" placeholder="Tell us your location" id="search-bar">
                                <button class="button button-dark" type="submit"><img src="<?php echo $assets['img'];?>arrow-shape.png" alt=""></button>
                            </form>


                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header__upper--right">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media">
                                    <img height="30" width="30" class="me-3" src="<?php echo $assets['img'];?>partner-img.png" alt="">
                                    <div class="media-body">
                                        <h6 class="m-0">Kalshan <i class="fas fa-angle-down"></i></h6>
                                        <p class="m-0">Sri Lanka</p>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="<?php echo base_url('index');?>">Home</a>
                                <a class="dropdown-item" href="<?php echo base_url('customer-dashboard');?>">Profile</a>
                                <a class="dropdown-item" href="<?php echo base_url('index');?>">Log out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="breadcrumb-div">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <ol class="breadcrumb">
                    <li><a href="ride-with-cabgo.html">Ride with City Taxi </a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="div-padding our-vehicles-div">
    <div class="container">

        <div class="row">
            <div class="col-sm-4 mb-3">
                <div class="card">
<!--                    <div class="card-header">Kamal Rajapaksha</div>-->

                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <img height="70" width="70" class="me-3" src="<?php echo $assets['img'];?>partner-img.png" alt="">
                            </div>
                            <div class="col-6">
                                <h5 class="card-title mt-3">Kamal Rajapaksha</h5>
                                <p class="card-text">0775527374</p>
                                <p class="card-text">HH-2020</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8 ">
                                <button type="button" class="btn btn-info" >Go somewhere</button>
                            </div>
                            <div class="col-4 ">
                                <button type="button" class="btn btn-info" style="float: right">Call</button>
                            </div>
                        </div>

<!--                        <p class="card-text">0775527374</p>-->
<!--                        <p class="card-text">HH-2020</p>-->

<!--                        <a href="#" class="btn btn-primary text-center">Go somewhere</a>-->
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
<!--            <div class="col-lg-6">-->
<!--                <div class="ride-map-area">-->
<!--                    <div id="ride-map"></div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</div>


<?php $this->load->view('inc/footer'); ?>

<?php
$this->load->view('inc/foot', array(
    "assets" => $assets,
    "extra_js" => array()
));
?>
 