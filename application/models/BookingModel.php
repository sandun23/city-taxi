<?php

class BookingModel extends CI_Model
{
    public function InsertBooking($customer_id,$start_location,$end_location,$status) {
        try {
            $query = $this->db->query("INSERT INTO booking(booking_id,cus_id,start_location,end_location,booking_status)VALUES ('','$customer_id','$start_location','$end_location','$status')");
            if ($query) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function SearchDrivers($start_location,$vehicle_type_id) {
        try {
            $query = $this->db->query("SELECT * FROM driver WHERE driver_current_job_location = '$start_location' AND driver_status = 'Available' AND vehicle_type_id = '$vehicle_type_id'");
            return $query->result();
        } catch (Exception $e) {
            throw $e;
        }
    }
}