<!DOCTYPE html>
<html lang="en">
  <?php 
    $this->load->view('inc/head', array(
      "assets" => $assets,
      "extra_css" => array()
    )); 
  ?>
 
<?php $this->load->view('inc/header'); ?>

<div class="breadcrumb-div">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Ride with City Taxi </a></li>
                    </ol>
                </div>
                <div class="col-6">
                    <div class="text-end">
                        <h2>Our packages</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="div-padding our-pakages-div">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2 class="div-title text-center">Our Packages</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-package-item text-center">
                        <div class="package-icon">
                            <span class="icon-wrapper">
                                <img src="<?php echo $assets['img'];?>icon/package-icon.png" alt="icon">
                            </span>
                        </div>
                        <div class="package-details">
                            <h4 class="div-title text-center">Prime</h4>
                            <h2 class="package-price">
                                $599
                                <span>/24hour</span>
                            </h2>
                            <ul>
                                <li>City trave Prime</li>
                                <li>Ac Vehicle</li>
                                <li>Your Choice 3 Tourism </li>
                                <li>Places</li>
                                <li>Tourist Guide</li>
                                <li>Quality Vehicle</li>
                            </ul>
                            <a href="#" class="button button-dark tiny">Get Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-package-item text-center">
                        <div class="package-icon">
                            <span class="icon-wrapper">
                                <img src="<?php echo $assets['img'];?>icon/package-icon.png" alt="icon">
                            </span>
                        </div>
                        <div class="package-details">
                            <h4 class="div-title text-center">Superior</h4>
                            <h2 class="package-price">
                                $1399
                                <span>/24hour</span>
                            </h2>
                            <ul>              
                                <li>Any Location Under 400 Km</li>
                                <li>Ac Vehicle</li>
                                <li>Your Choice 3 Tourism </li>
                                <li>Places</li>
                                <li>Tourist Guide</li>
                                <li>Quality Vehicle</li>
                            </ul>
                            <a href="#" class="button button-dark tiny">Get Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3">
                    <div class="single-package-item text-center">
                        <div class="package-icon">
                            <span class="icon-wrapper">
                                <img src="<?php echo $assets['img'];?>icon/package-icon.png" alt="icon">
                            </span>
                        </div>
                        <div class="package-details">
                            <h4 class="div-title text-center">Prime</h4>
                            <h2 class="package-price">
                                $2599
                                <span>/24hour</span>
                            </h2>
                            <ul>
                                <li>City trave Prime</li>
                                <li>Ac Vehicle</li>
                                <li>Your Choice 3 Tourism </li>
                                <li>Places</li>
                                <li>Tourist Guide</li>
                                <li>Quality Vehicle</li>
                            </ul>
                            <a href="#" class="button button-dark tiny">Get Now</a>
                        </div>
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
 