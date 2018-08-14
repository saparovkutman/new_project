<?php
class Podcatalog_two_models extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('upload');
        $this->load->library('image_lib');
    }

//========================= FILE UPLOAD ==========================//
    private function image()
    {
        //images
        $config['upload_path'] = './assets/upload/images/cat_two';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = TRUE;
        $config['remove_spaces'] = TRUE;

        $this->upload->initialize($config);

        $img_name = $this->input->post('img_name',true);
        
        if ( !$this->upload->do_upload('img_add'))
        {
            $file_name = $img_name;
        }
        else
        {
            $image_data = $this->upload->data();
            $config['image_library'] = 'gd2';
            $config['source_image'] = $image_data['full_path'];
            $config['new_image'] = APPPATH . '../assets/upload/thumb/cat_two';
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 350;
            $config['height'] = 200;

            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $name = $this->upload->data();
            $file_name = $name['file_name'];
            if($img_name){
                unlink('assets/upload/images/cat_two/' . $img_name);
                unlink('assets/upload/thumb/cat_two/' . $img_name);
            }
        }
        return $file_name;
    }

//========================= podcatalog two ==========================//
//insert
    public function show_services_vip($id_cat){
        $this->db->where('category_id', $id_cat);
        $select = $this->db->get('services_book');
        return $select->result();
    }
    public function show_services_restaurant($id_cat){
        $this->db->where('category_id', $id_cat);
        $select = $this->db->get('services_restaurants');
        return $select->result();
    }
    //    show
    public function get_show($id_cat){
        $this->db->where('category_id', $id_cat);
        $select = $this->db->get('services_tickets_show');
        return $select->result();
    }

   // update_restaurants
    public function update_restaurants(){
        $title = $this->input->post('title', true);
        $content = $this->input->post('content', true);
        $title1 = $this->input->post('title1', true);
        $content1 = $this->input->post('content1', true);
        $title2 = $this->input->post('title2', true);
        $content2 = $this->input->post('content2', true);
        $id_cat = $this->input->post('id', true);
        $img = $this->image();
        if($title2){
            $data = array(
                'title' => $title,
                'description' => $content,
                "en_title" => $title1,
                "en_desc" => $content1,
                "chi_title" => $title2,
                "chi_desc" => $content2,
                'img_name' => $img
            );
        }
        else if($title1){
            $data = array(
                'title' => $title,
                'description' => $content,
                "en_title" => $title1,
                "en_desc" => $content1,
                'img_name' => $img
            );
        }

        else {
            $data = array(
                'title' => $title,
                'description' => $content,
                'img_name' => $img
            );
        }
        $this->db->where('id', $id_cat);
        $this->db->update('services_restaurants', $data);
    }
   //   add_restaurants
    public function add_restaurants(){
        $title = $this->input->post('title', true);
        if($title==null){
            echo 'заполните все поля';
            return;
        }
        $content = $this->input->post('content', true);
        $title1 = $this->input->post('title1', true);
        $content1 = $this->input->post('content1', true);
        $title2 = $this->input->post('title2', true);
        $content2 = $this->input->post('content2', true);
        $cat_id = $this->input->post('cat_id', true);
        $img = $this->image();
        $data = array(
            "title" => $title,
            "description" => $content,
            "en_title" => $title1,
            "en_desc" => $content1,
            "chi_title" => $title2,
            "chi_desc" => $content2,
            "img_name" => $img,
            "category_id" => $cat_id,
        );
        $this->db->insert('services_restaurants', $data);
    }
  //    delete_restorana
    public function delete_res(){
        $id_cat_one = $this->input->post('id', true);
        $cat_img = $this->input->post('img', true);
        unlink('assets/upload/images/cat_two/' . $cat_img);
        unlink('assets/upload/thumb/cat_two/' . $cat_img);
        $this->db->where('id', $id_cat_one);
        $this->db->delete('services_restaurants');
    }


    public function add_show(){
        $title = $this->input->post('title', true);
        if($title==null){
            echo 'заполните все поля';
            return;
        }
        $content = $this->input->post('content', true);
        $cat_id = $this->input->post('cat_id', true);
        $title1 = $this->input->post('title1', true);
        $content1 = $this->input->post('content1', true);
        $title2 = $this->input->post('title2', true);
        $content2 = $this->input->post('content2', true);
        $img = $this->image();
        $data = array(
            "title" => $title,
            "description" => $content,
            "en_title" => $title1,
            "en_desc" => $content1,
            "chi_title" => $title2,
            "chi_desc" => $content2,
            "category_id" => $cat_id,
            "img_name" => $img
        );
        $this->db->insert('services_tickets_show', $data);
    }

    public function update_show(){
        $title = $this->input->post('title', true);
        $content = $this->input->post('content', true);
        $title1 = $this->input->post('title1', true);
        $content1 = $this->input->post('content1', true);
        $title2 = $this->input->post('title2', true);
        $content2 = $this->input->post('content2', true);
        $id_cat = $this->input->post('id', true);
        $img = $this->image();

        if($title2){
            $data = array(
                'title' => $title,
                'description' => $content,
                "en_title" => $title1,
                "en_desc" => $content1,
                "chi_title" => $title2,
                "chi_desc" => $content2,
                'img_name' => $img
            );
        }
         else if($title1){
            $data = array(
                'title' => $title,
                'description' => $content,
                "en_title" => $title1,
                "en_desc" => $content1,
                'img_name' => $img
            );
        }

        else {
            $data = array(
                'title' => $title,
                'description' => $content,
                'img_name' => $img
            );
        }
        $this->db->where('id', $id_cat);
        $this->db->update('services_tickets_show', $data);
    }

    public function delete_show(){
        $id_cat_one = $this->input->post('id', true);
        $cat_img = $this->input->post('img', true);
        unlink('assets/upload/images/cat_two/' . $cat_img);
        unlink('assets/upload/thumb/cat_two/' . $cat_img);
        $this->db->where('id', $id_cat_one);
        $this->db->delete('services_tickets_show');
    }
    // travel packets

    public function add_book(){
        $title = $this->input->post('title', true);
        $content = $this->input->post('content', true);
        $cat_id = $this->input->post('cat_id', true);
        $title1 = $this->input->post('title1', true);
        $content1 = $this->input->post('content1', true);
        $title2 = $this->input->post('title2', true);
        $content2 = $this->input->post('content2', true);
        $img = $this->image();
        $data = array(
            "title" => $title,
            "description" => $content,
            "en_title" => $title1,
            "en_desc" => $content1,
            "chi_title" => $title2,
            "chi_desc" => $content2,
            "category_id" => $cat_id,
            "img_name" => $img
        );
        $this->db->insert('services_book', $data);
    }
    public function update_book(){
        $title = $this->input->post('title', true);
        $content = $this->input->post('content', true);
        $title1 = $this->input->post('title1', true);
        $content1 = $this->input->post('content1', true);
        $title2 = $this->input->post('title2', true);
        $content2 = $this->input->post('content2', true);
        $img_name = $this->input->post('img_name',true);
        $id_cat = $this->input->post('id', true);
        $img = $this->image();

         if($title2){
            $data = array(
                'title' => $title,
                'description' => $content,
                "en_title" => $title1,
                "en_desc" => $content1,
                "chi_title" => $title2,
                "chi_desc" => $content2,
                'img_name' => $img
            );
        }
         else if($title1){
            $data = array(
                'title' => $title,
                'description' => $content,
                "en_title" => $title1,
                "en_desc" => $content1,
                'img_name' => $img
            );
        }
        else {
            $data = array(
                'title' => $title,
                'description' => $content,
                'img_name' => $img
            );
        }
        $this->db->where('id', $id_cat);
        $this->db->update('services_book', $data);
    }
    public function delete_book(){
        $id_cat_one = $this->input->post('id', true);
        $cat_img = $this->input->post('img', true);
        unlink('assets/upload/images/cat_two/' . $cat_img);
        unlink('assets/upload/thumb/cat_two/' . $cat_img);
        $this->db->where('id', $id_cat_one);
        $this->db->delete('services_book');
    }

//    service view

    public function get_serv_vip_view($id_cat){
        $this->db->where('sub_cat_id', $id_cat);
        $select = $this->db->get('service_book_view');
        return $select->result();
    }
    public function get_serv_rest_view($id_cat){
        $this->db->where('sub_cat_id', $id_cat);
        $select = $this->db->get('service_rest_view');
        return $select->result();
    }
    public function get_serv_show_view($id_cat){
        $this->db->where('sub_cat_id', $id_cat);
        $select = $this->db->get('service_tick_sh_view');
        return $select->result();
    }

    public function insert_vip(){
        $title = $this->input->post('title', true);
        if($title==null){
            echo 'заполните все поля';
            return;
        }
        $content = $this->input->post('content', true);
        $cat_id = $this->input->post('cat_id', true);
        $title1 = $this->input->post('title1', true);
        $content1 = $this->input->post('content1', true);
        $title2 = $this->input->post('title2', true);
        $content2 = $this->input->post('content2', true);
        $img = $this->image();
        $data = array(
            "title" => $title,
            "description" => $content,
            "en_title" => $title1,
            "en_desc" => $content1,
            "chi_title" => $title2,
            "chi_desc" => $content2,
            "sub_cat_id" => $cat_id,
            "img_name" => $img
        );
        $this->db->insert('service_book_view', $data);
    }

    public function update_vip(){
        $title = $this->input->post('title', true);
        $content = $this->input->post('content', true);
        $title1 = $this->input->post('title1', true);
        $content1 = $this->input->post('content1', true);
        $title2 = $this->input->post('title2', true);
        $content2 = $this->input->post('content2', true);
        $id_cat = $this->input->post('id', true);
        $img = $this->image();
        if($title2){
            $data = array(
                'title' => $title,
                'description' => $content,
                "en_title" => $title1,
                "en_desc" => $content1,
                "chi_title" => $title2,
                "chi_desc" => $content2,
                'img_name' => $img
            );
        }
        else if($title1){
            $data = array(
                'title' => $title,
                'description' => $content,
                "en_title" => $title1,
                "en_desc" => $content1,
                'img_name' => $img
            );
        }

        else {
            $data = array(
                'title' => $title,
                'description' => $content,
                'img_name' => $img
            );
        }
        $this->db->where('id', $id_cat);
        $this->db->update('service_book_view', $data);
    }

    public function delete_vip(){
        $id_cat_one = $this->input->post('id', true);
        $cat_img = $this->input->post('img', true);
        if($cat_img){
            unlink('assets/upload/images/cat_two/' . $cat_img);
            unlink('assets/upload/thumb/cat_two/' . $cat_img);
        }
        $this->db->where('id', $id_cat_one);
        $this->db->delete('service_book_view');
    }

    public function insert_res(){
        $title = $this->input->post('title', true);
        if($title==null){
            echo 'заполните все поля';
            return;
        }
        $content = $this->input->post('content', true);
        $cat_id = $this->input->post('cat_id', true);
        $title1 = $this->input->post('title1', true);
        $content1 = $this->input->post('content1', true);
        $title2 = $this->input->post('title2', true);
        $content2 = $this->input->post('content2', true);
        $add_time = $this->input->post('add_time', true);
        $img = $this->image();
        $data = array(
            "title" => $title,
            "description" => $content,
            "en_title" => $title1,
            "en_desc" => $content1,
            "chi_title" => $title2,
            "chi_desc" => $content2,
            "date_time" => $add_time,
            "sub_cat_id" => $cat_id,
            "img_name" => $img
        );
        $this->db->insert('service_rest_view', $data);
    }

    public function update_rest(){
        $title = $this->input->post('title', true);
        $content = $this->input->post('content', true);
        $title1 = $this->input->post('title1', true);
        $content1 = $this->input->post('content1', true);
        $title2 = $this->input->post('title2', true);
        $content2 = $this->input->post('content2', true);
        $add_time = $this->input->post('date_time', true);
        $id_cat = $this->input->post('id', true);
        $img = $this->image();
        if($title2){
            $data = array(
                'title' => $title,
                'description' => $content,
                "en_title" => $title1,
                "en_desc" => $content1,
                "chi_title" => $title2,
                "chi_desc" => $content2,
                "date_time" => $add_time,
                'img_name' => $img
            );
        }
        else if($title1){
            $data = array(
                'title' => $title,
                'description' => $content,
                "en_title" => $title1,
                "en_desc" => $content1,
                "date_time" => $add_time,
                'img_name' => $img
            );
        }

        else {
            $data = array(
                'title' => $title,
                'description' => $content,
                "date_time" => $add_time,
                'img_name' => $img
            );
        }


        $this->db->where('id', $id_cat);
        $this->db->update('service_rest_view', $data);
    }
    public function delete_rest(){
        $id_cat_one = $this->input->post('id', true);
        $cat_img = $this->input->post('img', true);
        if($cat_img){
            unlink('assets/upload/images/cat_two/' . $cat_img);
            unlink('assets/upload/thumb/cat_two/' . $cat_img);
        }
        $this->db->where('id', $id_cat_one);
        $this->db->delete('service_rest_view');
    }

    public function insert_show_view(){
        $title = $this->input->post('title', true);
        if($title==null){
            echo 'заполните все поля';
            return;
        }
        $content = $this->input->post('content', true);
        $cat_id = $this->input->post('cat_id', true);
        $title1 = $this->input->post('title1', true);
        $content1 = $this->input->post('content1', true);
        $title2 = $this->input->post('title2', true);
        $content2 = $this->input->post('content2', true);
        $add_time = $this->input->post('add_time', true);
        $img = $this->image();
        $data = array(
            "title" => $title,
            "description" => $content,
            "en_title" => $title1,
            "en_desc" => $content1,
            "chi_title" => $title2,
            "chi_desc" => $content2,
            "date_time" => $add_time,
            "sub_cat_id" => $cat_id,
            "img_name" => $img
        );
        $this->db->insert('service_tick_sh_view', $data);
    }

    public function update_show_view(){
        $title = $this->input->post('title', true);
        $content = $this->input->post('content', true);
        $title1 = $this->input->post('title1', true);
        $content1 = $this->input->post('content1', true);
        $title2 = $this->input->post('title2', true);
        $content2 = $this->input->post('content2', true);
        $add_time = $this->input->post('date_time', true);
        $id_cat = $this->input->post('id', true);
        $img = $this->image();

        if($title2){
            $data = array(
                'title' => $title,
                'description' => $content,
                "en_title" => $title1,
                "en_desc" => $content1,
                "chi_title" => $title2,
                "chi_desc" => $content2,
                "date_time" => $add_time,
                'img_name' => $img
            );
        }
        else if($title1){
            $data = array(
                'title' => $title,
                'description' => $content,
                "en_title" => $title1,
                "en_desc" => $content1,
                "date_time" => $add_time,
                'img_name' => $img
            );
        }

        else {
            $data = array(
                'title' => $title,
                'description' => $content,
                "date_time" => $add_time,
                'img_name' => $img
            );
        }
        $this->db->where('id', $id_cat);
        $this->db->update('service_tick_sh_view', $data);
    }
    public function delete_show_view(){
        $id_cat_one = $this->input->post('id', true);
        $cat_img = $this->input->post('img', true);
        if($cat_img){
            unlink('assets/upload/images/cat_two/' . $cat_img);
            unlink('assets/upload/thumb/cat_two/' . $cat_img);
        }
        $this->db->where('id', $id_cat_one);
        $this->db->delete('service_tick_sh_view');
    }
}