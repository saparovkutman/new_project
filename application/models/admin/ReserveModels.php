<?php
class ReserveModels extends CI_Model{
    /**
     * ReserveModels constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('upload');
        $this->load->library('image_lib');
    }

    //========================= RESTAURANTS ==========================//
    //insert
    public function insert_kitchen() {
        $date = $this->input->post('date', true);
        $time = $this->input->post('time', true);
        $people = $this->input->post('people', true);
        $cat_id = $this->input->post('cat_id', true);
        $data = array(
            "date" => $date,
            "time" => $time,
            "count_people" => $people,
            "cat_id" => $cat_id
        );
        $this->db->insert('booking_restaurants', $data);
    }

    //========================= TRANSPORTATION SERVICES ==========================//
    //insert
    public function insert_transport() {
        $departure_point = $this->input->post('departure_point', true);
        $destination = $this->input->post('destination', true);
        $count_people = $this->input->post('count_people', true);
        $date_of_departure = $this->input->post('date_of_departure', true);
        $date_of_change = $this->input->post('date_of_change', true);
        $cat_id = $this->input->post('cat_id', true);
        $data = array(
            "departure_point" => $departure_point,
            "destination" => $destination,
            "count_people" => $count_people,
            "date_of_departure" => $date_of_departure,
            "date_of_change" => $date_of_change,
            "cat_id" => $cat_id
        );
        $this->db->insert('transportation_services', $data);
    }

    //========================= BOOKING PACKAGE (CHIP) ==========================//
//insert
    public function insert_package() {
        $departure_point = $this->input->post('departure_point', true);
        $destination = $this->input->post('destination', true);
        $count_people = $this->input->post('count_people', true);
        $date_of_departure = $this->input->post('date_of_departure', true);
        $date_of_change = $this->input->post('date_of_change', true);
        $cat_id = $this->input->post('cat_id', true);
        $data = array(
            "departure_point" => $departure_point,
            "destination" => $destination,
            "count_people" => $count_people,
            "date_of_departure" => $date_of_departure,
            "date_of_change" => $date_of_change,
            "cat_id" => $cat_id
        );
        $this->db->insert('booking_package', $data);
    }

//========================= TICKET BOOKING(SHOW) ==========================//
    //insert
    public function insert_show() {
        $date = $this->input->post('date', true);
        $type = $this->input->post('type', true);
        $count_people = $this->input->post('count_people', true);
        $cat_id = $this->input->post('cat_id', true);
        $data = array(
            "date" => $date,
            "type" => $type,
            "count_people" => $count_people,
            "cat_id" => $cat_id
        );
        $this->db->insert('ticket_booking', $data);
    }

//========================= ACCOMMODATION PACKAGE ==========================//
    //insert
    public function insert_accommodation() {
        $date = $this->input->post('date', true);
        $name = $this->input->post('name', true);
        $family_name = $this->input->post('family_name', true);
        $type_of_document = $this->input->post('type_of_document', true);
        $document_number = $this->input->post('document_number', true);
        $contact_number = $this->input->post('contact_number', true);
        $notes = $this->input->post('notes', true);
        $additional_guests = $this->input->post('additional_guests', true);
        $payment_method = $this->input->post('payment_method', true);
        $package_price = $this->input->post('package_price', true);
        $additional_price = $this->input->post('additional_price', true);
        $total = $this->input->post('total', true);
        $cat_id = $this->input->post('cat_id', true);
        $data = array(
            "date" => $date,
            "name" => $name,
            "family_name" => $family_name,
            "type_of_document" => $type_of_document,
            "document_number" => $document_number,
            "contact_number" => $contact_number,
            "notes" => $notes,
            "additional_guests" => $additional_guests,
            "payment_method" => $payment_method,
            "package_price" => $package_price,
            "additional_price" => $additional_price,
            "total" => $total,
            "cat_id" => $cat_id
        );
        $this->db->insert('accommodation_package', $data);
    }
}