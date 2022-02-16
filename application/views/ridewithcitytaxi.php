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
                <div class="col-lg-6">
                    <div class="booking-form">
                        <form action="#">
                            <div class="from-group destination">
                                <label for="inputFrom">From</label>
                                <i class="fas fa-map-marker-alt"></i>
                                <input type="text" name="frominputDestination" placeholder="Select Pickup" id="inputFrom" class="form-control">
                            </div>
                            <div class="from-group destination">
                                <label for="inputDestination">Where to?</label>
                                <i class="fas fa-map-marker-alt"></i>
                                <input type="text" name="desctination" placeholder="Select Destination" id="inputDestination" class="form-control">
                            </div>
                            <div class="payment-options-wrapper">
                                <h2>Payment Method</h2>
                                <div class="from-group payment-options">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="payment-opts" id="cash-pay" value="option1">
                                        <label class="form-check-label" for="cash-pay">Cash</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="payment-opts" id="banking-pay" value="option2">
                                        <label class="form-check-label" for="banking-pay">Net Banking</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="payment-opts" id="card-pay" value="option3">
                                        <label class="form-check-label" for="card-pay">Debit Card</label>
                                    </div>
                                </div>
                            </div>

                            <div class="select-car-wrapper">
                                <h2>Selected Car</h2>
                                <div class="selected-car">
                                    <div class="from-group car-options">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="car-opts" id="scooter" value="option1">
                                            <label class="form-check-label" for="scooter">
                                                <img src="<?php echo $assets['img'];?>dashboard/car-1.png" alt="car">
                                            </label>
                                            <div class="car-details">
                                                <h4>1x</h4>
                                                <p>Scooter</p>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="car-opts" id="alto" value="option2">
                                            <label class="form-check-label" for="alto">
                                                <img src="<?php echo $assets['img'];?>dashboard/car-2.png" alt="Car">
                                            </label>
                                            <div class="car-details">
                                                <h4>2x</h4>
                                                <p>Alto</p>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="car-opts" id="swift" value="option3">
                                            <label class="form-check-label" for="swift">
                                                <img src="<?php echo $assets['img'];?>dashboard/car-3.png" alt="Car">
                                            </label>
                                            <div class="car-details">
                                                <h4>3x</h4>
                                                <p>Swift dzire</p>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="car-opts" id="luxury" value="option3">
                                            <label class="form-check-label" for="luxury">
                                                <img src="<?php echo $assets['img'];?>dashboard/car-4.png" alt="Car">
                                            </label>
                                            <div class="car-details">
                                                <h4>4x</h4>
                                                <p>Luxury</p>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="car-opts" id="tourist" value="option3">
                                            <label class="form-check-label" for="tourist">
                                                <img src="<?php echo $assets['img'];?>dashboard/car-5.png" alt="Car">
                                            </label>
                                            <div class="car-details">
                                                <h4>5x</h4>
                                                <p>Tourist</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="button button-dark tiny">Book Now</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ride-map-area">
                        <div id="ride-map"></div>
                    </div>
                </div>
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
 