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
                        <h2>Our services</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="div-padding our-service-div">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2 class="div-title text-center">Our Services</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-item">
                        <img class="service-icon" src="<?php echo $assets['img'];?>icon/service-icon-1.png" alt="service icon">
                        <h4>Taxi</h4>
                        <p>Aenean dictum odio sit amet congue semper. In laoreet metus nec dolor ullamcorper, ut iaculis risus scelerisque. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-item">
                        <img class="service-icon" src="<?php echo $assets['img'];?>icon/service-icon-2.png" alt="service icon">
                        <h4>Car Book</h4>
                        <p>Aenean dictum odio sit amet congue semper. In laoreet metus nec dolor ullamcorper, ut iaculis risus scelerisque. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-item">
                        <img class="service-icon" src="<?php echo $assets['img'];?>icon/service-icon-3.png" alt="service icon">
                        <h4>Share</h4>
                        <p>Aenean dictum odio sit amet congue semper. In laoreet metus nec dolor ullamcorper, ut iaculis risus scelerisque. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-item">
                        <img class="service-icon" src="<?php echo $assets['img'];?>icon/service-icon-4.png" alt="service icon">
                        <h4>Rental</h4>
                        <p>Aenean dictum odio sit amet congue semper. In laoreet metus nec dolor ullamcorper, ut iaculis risus scelerisque. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-item">
                        <img class="service-icon" src="<?php echo $assets['img'];?>icon/service-icon-5.png" alt="service icon">
                        <h4>Food</h4>
                        <p>Aenean dictum odio sit amet congue semper. In laoreet metus nec dolor ullamcorper, ut iaculis risus scelerisque. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-item">
                        <img class="service-icon" src="<?php echo $assets['img'];?>icon/service-icon-6.png" alt="service icon">
                        <h4>Airport Transfer</h4>
                        <p>Aenean dictum odio sit amet congue semper. In laoreet metus nec dolor ullamcorper, ut iaculis risus scelerisque. </p>
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
 