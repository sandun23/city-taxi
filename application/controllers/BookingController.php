<?php

class BookingController extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('BookingModel');
        $this->load->model("infinitum/ModelCore");


    }


    public function InsertBooking(){


        $customer_id = $_POST['customer_id'];
        $start_location = $_POST['start_location'];
        $end_location =$_POST['end_location'];
        $vehicle_type =$_POST['vehicle_type'];
        $status ='Pending';
       // $token=$_POST[''];

        $data12 = $this->BookingModel->InsertBooking($customer_id,$start_location,$end_location,$status);
        
        if($data12){
           // $drivers =  $this->BookingModel->SearchDrivers($start_location);

            $data = array(
                "assets" => $this->ModelCore->getAssets(),
                "drivers" => $this->BookingModel->SearchDrivers($start_location,$vehicle_type)
            );

            $this->load->view('ride_with_taxi_second_part',$data);
//          var_dump($data);
//          exit();
        }

    }

}