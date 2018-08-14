<?php
class RequestSubCatOneModels extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

//========================= CATALOG ONE ==========================//
    public function sub_catalogs_one($id)
    {
        $this->db->where('category_id',$id);
        $select = $this->db->get('sub_category_one_info');
        $cat_one = $select->result();
        return $cat_one;
    }
    
    public function insert_sub_cat_one()
    {
        $type_package = $this->input->post('type_package', true);
        if($type_package==null){
            echo 'заполните все поля';
            return;
        }
        $price = $this->input->post('price', true);

        $package_includes_one = $this->input->post('package_includes_one', true);
        $package_includes_two = $this->input->post('package_includes_two', true);
        $package_includes_three = $this->input->post('package_includes_three', true);
        $book_now_text = $this->input->post('book_now_text', true);
        $ticket_text = $this->input->post('ticket_text', true);
        $ticket_type = $this->input->post('ticket_type', true);
        $packet_id = $this->input->post('packet_id', true);

        $type_package1 = $this->input->post('type_package1', true);
        $package_includes_one1 = $this->input->post('package_includes_one1', true);
        $package_includes_two1 = $this->input->post('package_includes_two1', true);
        $package_includes_three1 = $this->input->post('package_includes_three1', true);
        $book_now_text1 = $this->input->post('book_now_text1', true);
        $ticket_text1 = $this->input->post('ticket_text1', true);
        $ticket_type1 = $this->input->post('ticket_type1', true);

        $type_package2 = $this->input->post('type_package2', true);
        $package_includes_one2 = $this->input->post('package_includes_one2', true);
        $package_includes_two2 = $this->input->post('package_includes_two2', true);
        $package_includes_three2 = $this->input->post('package_includes_three2', true);
        $book_now_text2 = $this->input->post('book_now_text2', true);
        $ticket_text2 = $this->input->post('ticket_text2', true);
        $ticket_type2 = $this->input->post('ticket_type2', true);

        $data = array(
            "type_package" => $type_package, 
            "price" => $price, 
            "package_includes_one" => $package_includes_one,
            "package_includes_two" => $package_includes_two,
            "package_includes_three" => $package_includes_three,
            "book_now_text" => $book_now_text,
            "ticket_text" => $ticket_text,
            "ticket_type" => $ticket_type,
            "en_type_package" => $type_package1,
            "en_package_includes_one" => $package_includes_one1,
            "en_package_includes_two" => $package_includes_two1,
            "en_package_includes_three" => $package_includes_three1,
            "en_book_now_text" => $book_now_text1,
            "en_ticket_text" => $ticket_text1,
            "en_ticket_type" => $ticket_type1,
            "chi_type_package" => $type_package2,
            "chi_package_includes_one" => $package_includes_one2,
            "chi_package_includes_two" => $package_includes_two2,
            "chi_package_includes_three" => $package_includes_three2,
            "chi_book_now_text" => $book_now_text2,
            "chi_ticket_text" => $ticket_text2,
            "chi_ticket_type" => $ticket_type2,
            "category_id" => $packet_id,
        );
        $this->db->insert('sub_category_one_info', $data);
    }
    public function update_sub_cat_one()
    {
        $type_package = $this->input->post('type_package', true);
        $price = $this->input->post('price', true);
        $package_includes_one = $this->input->post('package_includes_one', true);
        $package_includes_two = $this->input->post('package_includes_two', true);
        $package_includes_three = $this->input->post('package_includes_three', true);
        $book_now_text = $this->input->post('book_now_text', true);
        $ticket_text = $this->input->post('ticket_text', true);
        $ticket_type = $this->input->post('ticket_type', true);
        $sub_id = $this->input->post('sub_id', true);

        $type_package1 = $this->input->post('type_package1', true);
        $package_includes_one1 = $this->input->post('package_includes_one1', true);
        $package_includes_two1 = $this->input->post('package_includes_two1', true);
        $package_includes_three1 = $this->input->post('package_includes_three1', true);
        $book_now_text1 = $this->input->post('book_now_text1', true);
        $ticket_text1 = $this->input->post('ticket_text1', true);
        $ticket_type1 = $this->input->post('ticket_type1', true);

        $type_package2 = $this->input->post('type_package2', true);
        $package_includes_one2 = $this->input->post('package_includes_one2', true);
        $package_includes_two2 = $this->input->post('package_includes_two2', true);
        $package_includes_three2 = $this->input->post('package_includes_three2', true);
        $book_now_text2 = $this->input->post('book_now_text2', true);
        $ticket_text2 = $this->input->post('ticket_text2', true);
        $ticket_type2 = $this->input->post('ticket_type2', true);
        if($type_package2){
            $data = array(
                "type_package" => $type_package,
                "price" => $price,
                "package_includes_one" => $package_includes_one,
                "package_includes_two" => $package_includes_two,
                "package_includes_three" => $package_includes_three,
                "book_now_text" => $book_now_text,
                "ticket_text" => $ticket_text,
                "ticket_type" => $ticket_type,
                "en_type_package" => $type_package1,
                "en_package_includes_one" => $package_includes_one1,
                "en_package_includes_two" => $package_includes_two1,
                "en_package_includes_three" => $package_includes_three1,
                "en_book_now_text" => $book_now_text1,
                "en_ticket_text" => $ticket_text1,
                "en_ticket_type" => $ticket_type1,
                "chi_type_package" => $type_package2,
                "chi_package_includes_one" => $package_includes_one2,
                "chi_package_includes_two" => $package_includes_two2,
                "chi_package_includes_three" => $package_includes_three2,
                "chi_book_now_text" => $book_now_text2,
                "chi_ticket_text" => $ticket_text2,
                "chi_ticket_type" => $ticket_type2,
            );
        }
        elseif ($type_package1){
            $data = array(
                "type_package" => $type_package,
                "price" => $price,
                "package_includes_one" => $package_includes_one,
                "package_includes_two" => $package_includes_two,
                "package_includes_three" => $package_includes_three,
                "book_now_text" => $book_now_text,
                "ticket_text" => $ticket_text,
                "ticket_type" => $ticket_type,
                "en_type_package" => $type_package1,
                "en_package_includes_one" => $package_includes_one1,
                "en_package_includes_two" => $package_includes_two1,
                "en_package_includes_three" => $package_includes_three1,
                "en_book_now_text" => $book_now_text1,
                "en_ticket_text" => $ticket_text1,
                "en_ticket_type" => $ticket_type1,
            );
        }
        else {
            $data = array(
                "type_package" => $type_package,
                "price" => $price,
                "package_includes_one" => $package_includes_one,
                "package_includes_two" => $package_includes_two,
                "package_includes_three" => $package_includes_three,
                "book_now_text" => $book_now_text,
                "ticket_text" => $ticket_text,
                "ticket_type" => $ticket_type
            );
        }
        $this->db->where('id', $sub_id);
        $this->db->update('sub_category_one_info', $data);
    }
    public function delete_sub_cat_one()
    {
        $id_subcat_one = $this->input->post('id', true);
        $this->db->where('id', $id_subcat_one);
        $this->db->delete('sub_category_one_info');
    }
}
