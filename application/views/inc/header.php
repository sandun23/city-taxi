<body class="theme-1">

    <header class="theme-1">
        <div class="header__upper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__upper--left">
                            <div class="logo">
                                <a href="<?php echo base_url('home');?>">
                                <img src="<?php echo $assets['img'];?>logo-main.png"  alt=""> </a>
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
                             
                
                            <!-- <a href="sign-in.html" class="button button-dark big">Sign in</a> -->

                            <a href="<?php echo base_url('sign-up');?>" class="button button-dark big">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header__lower">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-dark">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="<?php echo base_url('home');?>"><i class="fas fa-home"></i>Home</a>
                                    </li>
 
                                    <li class="nav-item"> 
                                        <a class="nav-link" href="<?php echo base_url('about-us');?>"><i class="fas fa-exclamation-circle"></i>About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('our-services');?>"><i class="fas fa-cog"></i>Our Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('our-vehicles');?>"><i class="fas fa-taxi"></i>Our Vehicles</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('packages');?>"><i class="fas fa-cube"></i>Packages</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('contact-us');?>"><i class="fas fa-map-marker-alt"></i>Contacts</a>
                                    </li>
                                </ul>
                                <div class="my-2 my-lg-0">
                                   
                                    

                                    <a href="<?php echo base_url('ride-with-citytaxi');?>" class="button button-light big">Ride with City Taxi </a>

                                </div>
                                
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

 
