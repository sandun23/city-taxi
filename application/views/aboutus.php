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
                <div class="col-lg-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Ride with City Taxi </a></li>
                    </ol>
                </div>
                <div class="col-lg-6">
                    <div class="navigation-lower">
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="about.html">Blog</a></li>
                            <li><a href="about.html">Career</a></li>
                            <li><a href="about.html">Media Posts</a></li>
                            <li><a href="about.html">Help</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-us-area div-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="div-title">About us</h2>
                    <div class="about-us-text">
                        <h4>Trusted Cab Services in All World</h4>
                        <p>Curabitur placerat cursus nisi nec pharetra. Proin quis tortor fringilla, placerat nisi nec, auctor ex. Donec commodo orci ac lectus mattis, sed interdum sem scelerisque. Vivamus at euismod magna. Aenean semper risus nec dolor bibendum cursus. Donec eu odio eu ligula sagittis fringilla. Phasellus vulputate velit eu vehicula auctor. Nam vel pellentesque libero. Duis eget efficitur dui. Mauris tempor ex non tortor aliquet, et interdum mi dapibus. Phasellus ac dui nunc. Sed quis sagittis lorem, in blandit nibh. Fusce dui metus, interdum ac malesuada eu, ornare nec neque. Fusce hendrerit, tortor id egestas rutrum, orci lorem lacinia velit, sed mollis augue diam eget ipsum. Curabitur euismod, tellus sit amet tincidunt semper, dui odio pharetra orci, sed molestie odio libero sed libero. Sed volutpat ornare mauris. Sed gravida pulvinar urna, eget euismod mi mattis a. Vivamus sagittis eu quam sed ullamcorper. Etiam aliquet ornare tempus. Maecenas dictum nunc ac tortor rutrum, quis sollicitudin libero feugiat. Mauris iaculis sed risus ut tempus.</p>
                        <a href="#" class="button button-dark tiny">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="div-padding counter-area">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-6">
                    <div class="single-counter">
                        <div class="counter-icon">
                            <img src="<?php echo $assets['img'];?>icon/counter-icon-1.png" alt="">
                        </div>
                        <h2>
                            <span class="counter">7,50,000</span>
                        </h2>
                        <p class="counter-text">Vehicles</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="single-counter">
                        <div class="counter-icon">
                            <img src="<?php echo $assets['img'];?>icon/counter-icon-2.png" alt="">
                        </div>
                        <h2>
                            <span class="counter">220</span> +
                        </h2>
                        <p class="counter-text">Cities</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="single-counter">
                        <div class="counter-icon">
                            <img src="<?php echo $assets['img'];?>icon/counter-icon-3.png" alt="">
                        </div>
                        <h2>
                            <span class="counter">5,50,000</span>
                        </h2>
                        <p class="counter-text">Entreprenurs Partners</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="single-counter">
                        <div class="counter-icon">
                            <img src="<?php echo $assets['img'];?>icon/counter-icon4.png" alt="">
                        </div>
                        <h2>
                            <span class="counter">75,00,000</span>
                        </h2>
                        <p class="counter-text">Passengers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="div-padding how-work-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2 class="div-title text-center">How It Work</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 d-none d-lg-block">
                    <div class="icons-div">
                        <div class="single-icon">
                            <img src="<?php echo $assets['img'];?>icon/1.png" alt="">
                        </div>
                        <div class="single-icon">
                            <img src="<?php echo $assets['img'];?>icon/2.png" alt="">
                        </div>
                        <div class="single-icon">
                            <img src="<?php echo $assets['img'];?>icon/3.png" alt="">
                        </div>
                        <div class="single-icon">
                            <img src="<?php echo $assets['img'];?>icon/4.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-icon text-center m-b-10 d-block d-lg-none">
                        <img src="<?php echo $assets['img'];?>icon/1.png" alt="">
                    </div>
                    <div class="how-work-text">
                        <h4>Book in Just 2 Tabs</h4>
                        <p>Curabitur ac quam aliquam urna vehicula semper sed vel elit. Sed et leo purus. Vivamus vitae sapien.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-icon text-center m-b-10 d-block d-lg-none">
                        <img src="<?php echo $assets['img'];?>icon/2.png" alt="">
                    </div>
                    <div class="how-work-text">
                        <h4>Get a Driver</h4>
                        <p>Curabitur ac quam aliquam urna vehicula semper sed vel elit. Sed et leo purus. Vivamus vitae sapien.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-icon text-center m-b-10 d-block d-lg-none">
                        <img src="<?php echo $assets['img'];?>con/3.png" alt="">
                    </div>
                    <div class="how-work-text">
                        <h4>Track your Driver</h4>
                        <p>Curabitur ac quam aliquam urna vehicula semper sed vel elit. Sed et leo purus. Vivamus vitae sapien.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-icon text-center m-b-10 d-block d-lg-none">
                        <img src="<?php echo $assets['img'];?>icon/4.png" alt="">
                    </div>
                    <div class="how-work-text">
                        <h4>Arrive safely</h4>
                        <p>Curabitur ac quam aliquam urna vehicula semper sed vel elit. Sed et leo purus. Vivamus vitae sapien.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="div-padding testimonial-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2 class="div-title text-center">What about passanger says</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div id="testimonial-carousel-2" class="testimonial-carousel owl-carousel">
                        <div class="single-testimonial-item text-center">
                            <img src="<?php echo $assets['img'];?>client-1.png" alt="" class="client-img">
                            <p class="testimonial-text">Quisque venenatis sit amet libero vel laoreet. Maecenas et eros a metus vestibulum rhoncus. Aenean varius tincidunt libero at egestas. Aliquam eget interdum enim. Nulla malesuada dolor at turpis blandit sagittis. </p>
                            <h4 class="client-name">John Doe</h4>
                            <p class="theme-color">Passanger</p>
                        </div>
                        <div class="single-testimonial-item text-center">
                            <img src="<?php echo $assets['img'];?>client-1.png" alt="" class="client-img">
                            <p class="testimonial-text">Quisque venenatis sit amet libero vel laoreet. Maecenas et eros a metus vestibulum rhoncus. Aenean varius tincidunt libero at egestas. Aliquam eget interdum enim. Nulla malesuada dolor at turpis blandit sagittis. </p>
                            <h4 class="client-name">John Doe</h4>
                            <p class="theme-color">Passanger</p>
                        </div>
                        <div class="single-testimonial-item text-center">
                            <img src="<?php echo $assets['img'];?>client-1.png" alt="" class="client-img">
                            <p class="testimonial-text">Quisque venenatis sit amet libero vel laoreet. Maecenas et eros a metus vestibulum rhoncus. Aenean varius tincidunt libero at egestas. Aliquam eget interdum enim. Nulla malesuada dolor at turpis blandit sagittis. </p>
                            <h4 class="client-name">John Doe</h4>
                            <p class="theme-color">Passanger</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="div-padding team-div">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2 class="div-title text-center">The Duo BehindCityTaxi </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-team-member">
                        <div class="member-img">
                            <img src="<?php echo $assets['img'];?>driver-1.jpg" alt="">
                        </div>
                        <div class="member-info">
                            <h4 class="member-name">John Doe</h4>
                            <p class="theme-color">Co-Founder and CEO</p>
                            <p>Duis leo ipsum, consequat sollicitudin enim id, accumsan condimentum felis. Donec nisl dolor, malesuada tincidunt ultricies et.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-team-member">
                        <div class="member-img">
                            <img src="<?php echo $assets['img'];?>driver-2.jpg" alt="">
                        </div>
                        <div class="member-info">
                            <h4 class="member-name">John Doe</h4>
                            <p class="theme-color">Co-Founder and CEO</p>
                            <p>Duis leo ipsum, consequat sollicitudin enim id, accumsan condimentum felis. Donec nisl dolor, malesuada tincidunt ultricies et.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-0 col-sm-6 offset-sm-3">
                    <div class="single-team-member">
                        <div class="member-img">
                            <img src="<?php echo $assets['img'];?>driver-3.jpg" alt="">
                        </div>
                        <div class="member-info">
                            <h4 class="member-name">John Doe</h4>
                            <p class="theme-color">Co-Founder and CEO</p>
                            <p>Duis leo ipsum, consequat sollicitudin enim id, accumsan condimentum felis. Donec nisl dolor, malesuada tincidunt ultricies et.</p>
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
 