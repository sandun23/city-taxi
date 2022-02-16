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
                        <h2>Contact us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="div-padding contact-info-div">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-contact-info text-center">
                        <img src="<?php echo $assets['img'];?>icon/contact_info.png" alt="icon">
                        <h4>Address</h4>
                        <p>Address : #1153, St No. 58, Hashtag Company Noida, Delhi, India.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-contact-info text-center">
                        <img src="<?php echo $assets['img'];?>icon/contact_info-2.png" alt="icon">
                        <h4>Phone number</h4>
                        <p>Phone : +911234567890, +919581236897</p>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-0 col-sm-6 offset-sm-3">
                    <div class="single-contact-info text-center">
                        <img src="<?php echo $assets['img'];?>icon/contact_info-3.png" alt="icon">
                        <h4>E-mail</h4>
                        <p>Email : Gambol943@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="div-padding contact-form-div p-t-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <form action="#">
                        <h2>Send us an Email</h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="email" id="email" placeholder="E-mail" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="phone" id="phone" placeholder="Phone" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="subject" id="subject" placeholder="Subject" class="form-control">
                            </div>
                            <div class="col-lg-12">
                                <textarea class="form-control" name="text-content" id="text-content" placeholder="Text Content"></textarea>
                            </div>
                        </div>
                        <button class="button button-dark tiny" type="submit">Send</button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="contact-us-map">
                        <div id="contact-map"></div>
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
 