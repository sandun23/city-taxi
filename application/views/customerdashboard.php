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
            <div class="col-6">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">My dashboard</a></li>
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

<div class="div-padding driver-dashboard-div">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="passanger-name">
                    <div class="media">
                        <img class="me-3" src="<?php echo $assets['img'];?>client-1.png" alt="partner-img">
                        <div class="media-body">
                            <h2 class="mt-0">Kalshan Jananjaya</h2>
                            <p>ID 1234567890</p>
                            <a href="#">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 right-text">
                <h2>Partnership with <span style="color: #F7BC00;">City Taxi</span> </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-dashboard">
                    <ul class="nav nav-tabs tab-navigation" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#dashboard" aria-controls="dashboard" class="active" role="tab" data-toggle="tab">Dashboard</a>
                        </li>
                        <li role="presentation">
                            <a href="#ratings" aria-controls="rides" role="tab" data-toggle="tab">Ratings</a>
                        </li>
                        <li role="presentation" class="active">
                            <a href="#info" aria-controls="info" role="tab" data-toggle="tab">Personal Information</a>
                        </li>
                        
                         
                        <li role="presentation">
                            <a href="#rides" aria-controls="rides" role="tab" data-toggle="tab">Rides</a>
                        </li>
                        <li role="presentation">
                            <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a>
                        </li>
                    </ul>
                    
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="dashboard">
                            <div class="dashboard-info">
                                
                                <div class="overview-counter small-div">
                                    <h4>Overview</h4>
                                    <div class="counter-wrapper bg-gray small-div-item">
                                        <div class="single-counter-box">
                                            <h2 class="counter-number" style="color: #F7BC00;">18445</h2>
                                            <p class="counter-text">Total Payments</p>
                                        </div>
                                        <div class="single-counter-box">
                                            <h2 class="counter-number" style="color: #F7BC00;">85</h2>
                                            <p class="counter-text">Total Rides</p>
                                        </div>
                                        <div class="single-counter-box">
                                            <h2 class="counter-number" style="color: #F7BC00;">150</h2>
                                            <p class="counter-text">Drivers</p>
                                        </div>
                                        <div class="single-counter-box">
                                            <h2 class="counter-number" style="color: #F7BC00;">75</h2>
                                            <p class="counter-text">Today Rides</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="earning-details small-div">
                                    <h4>Total earnings of last month</h4>
                                    <div class="total-earning-table table-responsive small-div-item">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                <th scope="col">Driver Name</th>
                                                <th scope="col">price</th>
                                                <th scope="col">from</th>
                                                <th scope="col">to</th>
                                                <th scope="col">date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">BMW 5 <small>“4976ART RU”</small></th>
                                                    <td>$337.29</td>
                                                    <td>May 11, 2018</td>
                                                    <td>Johnson Smith</td>
                                                    <td>May 11, 2018</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Audi <small>“4876ORT AU”</small></th>
                                                    <td>$856.56</td>
                                                    <td>May 11, 2018</td>
                                                    <td>John Doe</td>
                                                    <td>May 11, 2018</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Alto XL <small>“4865ART KU”</small></th>
                                                    <td>$186.00</td>
                                                    <td>May 11, 2018</td>
                                                    <td>Rock William</td>
                                                    <td>May 11, 2018</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Swift Dezire <small>“9856BRU PO”</small></th>
                                                    <td>$847.25</td>
                                                    <td>May 11, 2018</td>
                                                    <td>Jassica</td>
                                                    <td>May 11, 2018</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">BMW 5 <small>“4976ART RU”</small></th>
                                                    <td>$1337.29</td>
                                                    <td>May 11, 2018</td>
                                                    <td>Elly Smith</td>
                                                    <td>May 11, 2018</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Tesia  <small>“68946KUY UK”</small></th>
                                                    <td>$869.29</td>
                                                    <td>May 11, 2018</td>
                                                    <td>Stone Gold</td>
                                                    <td>May 11, 2018</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Audi 8 <small>“4976ART RU”</small></th>
                                                    <td>$537.29</td>
                                                    <td>May 11, 2018</td>
                                                    <td>Rock</td>
                                                    <td>May 11, 2018</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Honda City XL <small>“8766ART TU”</small></th>
                                                    <td>$225.50</td>
                                                    <td>May 11, 2018</td>
                                                    <td>Johnson Doe</td>
                                                    <td>May 11, 2018</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Alto XL <small>“3589PMT MB”</small></th>
                                                    <td>$100.00</td>
                                                    <td>May 11, 2018</td>
                                                    <td>John William</td>
                                                    <td>May 11, 2018</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="button button-dark tiny">View More</a>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="info">
                            <div class="personal-info small-div">
                                <div class="div-heading">
                                    <h4 class="heading-item heading-item-1">Personal Information</h4>
                                    <p class="heading-item heading-item-2 right">
                                        <a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
                                    </p>
                                </div>
                                <div class="personal-details small-div-item">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="inputFirstName">First Name</label>
                                                <input type="text" class="form-control text-muted" id="inputFirstName" readonly value="John">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="inputLastName">Last Name</label>
                                                <input type="text" class="form-control text-muted" id="inputLastName" readonly value="Doe">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="inputEmail">Your Email</label>
                                                <input type="text" class="form-control text-muted" id="inputEmail" readonly value="johndoe@gmail.com">
                                            </div>
                                        </div> 
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="inputBirthday">Your Birthday</label>
                                                <input type="text" class="form-control text-muted" id="inputBirthday" readonly value="01 June 1984">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="inputPhoneNumber">Your Phone Number</label>
                                                <input type="text" class="form-control text-muted" id="inputPhoneNumber" readonly value="+91 - 123 456 7890">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="inputGender">Your Gender</label>
                                                <input type="text" class="form-control text-muted" id="inputGender" readonly value="Male">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="inputStatus">Address</label>
                                                <input type="text" class="form-control text-muted" id="inputStatus" readonly value="Colombo rd,matara">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="inputDesc"> about you</label>
                                                <textarea class="form-control text-muted" id="inputDesc" readonly>Vestibulum suscipit faucibus dolor, vitae mollis justo consequat vel. Vestibulum in nisi ut neque tristique accumsan vel eu eros. Quisque pellentesque urna et hendrerit lacinia. Mauris vitae tellus neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec in placerat tortor, sit amet dictum sem. Donec et orci condimentum eros pulvinar maximus. Suspendisse accumsan imperdiet mauris vitae tincidunt. Donec imperdiet purus eget diam tristique vestibulum. Vestibulum posuere placerat lacus commodo sollicitudin. Nullam eget justo fermentum, rhoncus leo eget, viverra augue. Fusce odio odio, egestas id turpis at, faucibus consectetur nulla. Sed vel volutpat ligula, quis vulputate odio. Sed condimentum, neque nec aliquam sodales, dolor erat euismod erat, porta venenatis odio leo non dolor. Donec ut lacus non quam convallis sodales.</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div role="tabpanel" class="tab-pane" id="ratings">
                            <div class="rides-details">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4>Ratings</h4>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="rides-filter">
                                            <ul>
                                                <li>
                                                    <a href="#">Yesterday</a>
                                                </li>
                                                <li>
                                                    <a href="#">Last Week</a>
                                                </li>
                                                <li>
                                                    <a href="#">Last Month</a>
                                                </li>
                                                <li>
                                                    <a href="#">Last 6 Month</a>
                                                </li>
                                                <li>
                                                    <a href="#">Last Year</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row small-div">
                                    <div class="col-lg-12">
                                        <div class="total-earning-table table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">Driver Name</th>
                                                    <th scope="col">Star Rate</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Location</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">BMW 5 <small>“4976ART RU”</small></th>
                                                        <td>$337.29</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Johnson Smith</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Audi <small>“4876ORT AU”</small></th>
                                                        <td>$856.56</td>
                                                        <td>May 11, 2018</td>
                                                        <td>John Doe</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Alto XL <small>“4865ART KU”</small></th>
                                                        <td>$186.00</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Rock William</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Swift Dezire <small>“9856BRU PO”</small></th>
                                                        <td>$847.25</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Jassica</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">BMW 5 <small>“4976ART RU”</small></th>
                                                        <td>$1337.29</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Elly Smith</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tesia  <small>“68946KUY UK”</small></th>
                                                        <td>$869.29</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Stone Gold</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Audi 8 <small>“4976ART RU”</small></th>
                                                        <td>$537.29</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Rock</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Honda City XL <small>“8766ART TU”</small></th>
                                                        <td>$225.50</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Johnson Doe</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Alto XL <small>“3589PMT MB”</small></th>
                                                        <td>$100.00</td>
                                                        <td>May 11, 2018</td>
                                                        <td>John William</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="text-center">
                                            <a href="#" class="button button-dark tiny">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div role="tabpanel" class="tab-pane" id="rides">
                            <div class="rides-details">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4>Rides</h4>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="rides-filter">
                                            <ul>
                                                <li>
                                                    <a href="#">Yesterday</a>
                                                </li>
                                                <li>
                                                    <a href="#">Last Week</a>
                                                </li>
                                                <li>
                                                    <a href="#">Last Month</a>
                                                </li>
                                                <li>
                                                    <a href="#">Last 6 Month</a>
                                                </li>
                                                <li>
                                                    <a href="#">Last Year</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="row small-div">
                                    <div class="col-lg-12">
                                        <div class="total-earning-table table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">Name of Cabs</th>
                                                    <th scope="col">Earnigns</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Passengers</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">BMW 5 <small>“4976ART RU”</small></th>
                                                        <td>$337.29</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Johnson Smith</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Audi <small>“4876ORT AU”</small></th>
                                                        <td>$856.56</td>
                                                        <td>May 11, 2018</td>
                                                        <td>John Doe</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Alto XL <small>“4865ART KU”</small></th>
                                                        <td>$186.00</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Rock William</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Swift Dezire <small>“9856BRU PO”</small></th>
                                                        <td>$847.25</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Jassica</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">BMW 5 <small>“4976ART RU”</small></th>
                                                        <td>$1337.29</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Elly Smith</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tesia  <small>“68946KUY UK”</small></th>
                                                        <td>$869.29</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Stone Gold</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Audi 8 <small>“4976ART RU”</small></th>
                                                        <td>$537.29</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Rock</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Honda City XL <small>“8766ART TU”</small></th>
                                                        <td>$225.50</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Johnson Doe</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Alto XL <small>“3589PMT MB”</small></th>
                                                        <td>$100.00</td>
                                                        <td>May 11, 2018</td>
                                                        <td>John William</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="text-center">
                                            <a href="#" class="button button-dark tiny">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="settings">
                            <div class="personal-info">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4>Personal Information</h4>
                                    </div>
                                    <div class="col-lg-6 text-end">
                                        <a href="#"><i class="fas fa-edit"></i> Edit</a>
                                    </div>
                                </div>
                                <div class="personal-details">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="firstName">First Name</label>
                                                <input type="text" class="form-control text-muted" id="firstName" placeholder="your first name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="lastName">Last Name</label>
                                                <input type="text" class="form-control text-muted" id="lastName" placeholder="your last name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="yourEmail">Your Email</label>
                                                <input type="text" class="form-control text-muted" id="yourEmail" placeholder="your mail">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="yourWebsite">Your Profile picture</label>
                                                <input type="file" class="form-control text-muted" id="yourWebsite" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="yourBirthday">Your Birthday</label>
                                                <input type="date" class="form-control text-muted" id="yourBirthday" placeholder="your birthday">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="phoneNumber">Your Phone Number</label>
                                                <input type="text" class="form-control text-muted" id="phoneNumber" placeholder="your mobile number">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="yourGender">Your Gender</label>
                                            <select class="form-select">
                                                <option>Select</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="address">Your Address</label>
                                                <input type="text" class="form-control text-muted" id="phoneNumber" placeholder="your address">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12"><br><br>
                                            <div class="form-group">
                                                <label for="aboutDesc">Write a little description about you</label>
                                                <textarea class="form-control text-muted" id="aboutDesc" placeholder="text here "></textarea>
                                            </div>
                                            <a href="#" class="button button-dark tiny">Save</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
 