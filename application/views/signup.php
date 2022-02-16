<!DOCTYPE html>
<html lang="en">
  <?php 
    $this->load->view('inc/head', array(
      "assets" => $assets,
      "extra_css" => array()
    )); 
  ?>
 
 <body class="striped-bg theme-3">

    <header class="theme-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="logo">
                        <a href="index.html"><img src="<?php echo $assets['img'];?>logo-main.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </header>


<div class="div-padding p-t-0 signup-div user-access-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h1 class="h3 mb-3 fw-normal">Please Sign Up</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="account-access sign-up">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#rider" class="active" aria-controls="rider" role="tab" data-toggle="tab">Sign up to Ride</a>
                            </li>
                            <li role="presentation">
                                <a href="#driver" aria-controls="driver" role="tab" data-toggle="tab">Sign up to Drive</a>
                            </li>
                        </ul>
                        
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="rider">
                                <form class="user-access-form">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="exampleFirstName" placeholder="name@example.com">
                                                <label for="exampleFirstName">First Name</label>
                                              </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="exampleLastName" placeholder="name@example.com">
                                                <label for="exampleLastName">Last Name</label>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="examplePhone" placeholder="Phone number">
                                        <label for="examplePhone">Phone Number</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="exampleEmail" placeholder="Email">
                                        <label for="exampleEmail">Email</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="examplePass" placeholder="Create Password">
                                        <label for="examplePass">Password</label>
                                    </div>
                                    <button type="submit" class="w-100 button button-light big">Sign Up</button>
                                </form>
                                <p class="acclink">Already have an account? 
                                    <a href="<?php echo base_url('sign-in');?>">Sign in
                                        <i class="icofont">double_right</i>
                                    </a>
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="driver">
                                
                                <form class="user-access-form">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                <label for="floatingInput">First Name</label>
                                              </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingLName" placeholder="name@example.com">
                                                <label for="floatingLName">Last Name</label>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="exampleInputphone" placeholder="Phone number">
                                        <label for="exampleInputphone">Phone Number</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
                                        <label for="exampleInputEmail">Email</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="exampleInputPass" placeholder="Create Password">
                                        <label for="exampleInputPass">Password</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="exampleInputCity" placeholder="City">
                                        <label for="exampleInputCity">City</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="exampleInputCode" placeholder="Invite Code">
                                        <label for="exampleInputCode">Invite Code</label>
                                    </div>
                                    <button type="submit" class="w-100 button button-light big"  >Sign Up</button>

                                    
                                </form>
                                <p class="acclink">Already have an account? 
                                    <a href="sign-in.html">Sign in
                                        <i class="icofont">double_right</i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <footer class="theme-2">

        <div class="footer-nav-div div-padding theme-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-brand">
                            <a href="index.html"><img src=" <?php echo $assets['img'];?>logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="social-nav">
                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" class="google-p"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <div class="app-download-box">
                            <a href="#"><img src="<?php echo $assets['img'];?>icon/google-play.jpg" alt="Google play"></a>
                            <a href="#"><img src="<?php echo $assets['img'];?>icon/apple-store.jpg" alt="Apple store"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright-div theme-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright 2021 by citytaxy. All Right Reserved.</p>
                    </div>
                    <div class="col-lg-6">
                        <ul class="social-nav">
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>


 

<?php 
  $this->load->view('inc/foot', array(
    "assets" => $assets,
    "extra_js" => array()
  )); 
?>