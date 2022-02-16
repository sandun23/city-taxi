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



    <div class="div-padding p-t-0 signin-div user-access-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="account-access sign-in">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#rider" class="active" aria-controls="rider" role="tab" data-toggle="tab">Rider</a>
                            </li>
                            <li role="presentation">
                                <a href="#driver" aria-controls="driver" role="tab" data-toggle="tab">Driver</a>
                            </li>
                        </ul>
                        
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="rider">
                                <form class="mb-4">
                                    <div class="form-floating">
                                      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                      <label for="floatingInput">Email address</label>
                                    </div>
                                    <div class="form-floating">
                                      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                      <label for="floatingPassword">Password</label>
                                    </div>
                                
                                    <div class="checkbox mb-3">
                                      <label>
                                        <input type="checkbox" value="remember-me"> Remember me
                                      </label>
                                    </div>
                                    <button class="w-100 button button-light big" type="submit">Sign in</button>
                                    
                                  </form>
                                <p class="acclink">Don't have an account? 
                                    <a href="<?php echo base_url('sign-up');?>">Sign up
                                        <i class="icofont">double_right</i>
                                    </a>
                                </p>
            
                                <div class="externel-signup">
                                    <a href="#" class="btn-block facebook">
                                        <i class="fab fa-facebook-f"></i>
                                        Sign up with Facebook</a>
                                    <a href="#" class="btn-block google">
                                        <i class="fab fa-google"></i>
                                        Sign up with Google</a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="driver">
                                <form class="mb-4">
                                    <div class="form-floating">
                                      <input type="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com">
                                      <label for="floatingInputEmail">Email address</label>
                                    </div>
                                    <div class="form-floating">
                                      <input type="password" class="form-control" id="floatingPass" placeholder="Password">
                                      <label for="floatingPass">Password</label>
                                    </div>
                                
                                    <div class="checkbox mb-3">
                                      <label>
                                        <input type="checkbox" value="remember-me"> Remember me
                                      </label>
                                    </div>
                                    <button class="w-100 button button-light big" type="submit">Sign in</button>
                                    
                                  </form>
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