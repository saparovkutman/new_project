<?php
class RequestCatThreeModels extends CI_Model
{
    /**
     * RequestCatThreeModels constructor.
     */
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
        $config['upload_path'] = './assets/upload/images/cat_three';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = TRUE;
        $config['remove_spaces'] = TRUE;

        $this->upload->initialize($config);

        $img_name = $this->input->post('img_name', true);
        if ( !$this->upload->do_upload('img_cattree'))
        {
            $file_name = $img_name;
        }
        else
        {
            $image_data = $this->upload->data();
            $config['image_library'] = 'gd2';
            $config['source_image'] = $image_data['full_path'];
            $config['new_image'] = APPPATH . '../assets/upload/thumb/cat_three';
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 350;
            $config['height'] = 200;

            $this->image_lib->initialize($config);
            $this->image_lib->resize();

            //in DB
            $name = $this->upload->data();
            $file_name = $name['file_name'];
            if($img_name){
                unlink('assets/upload/images/cat_three/' . $img_name);
                unlink('assets/upload/thumb/cat_three/' . $img_name);
            }
        }
        return $file_name;
    }

//========================= CATALOG THREE ==========================//
    //insert
    public function insert_cat_three()
    {
        $title = $this->input->post('title', true);
        if($title==null){
            echo 'заполните все поля';
            return;
        }
        $description = $this->input->post('content', true);
        $title1 = $this->input->post('title1', true);
        $description1 = $this->input->post('content1', true);
        $title2 = $this->input->post('title2', true);
        $description2 = $this->input->post('content2', true);
        $img = $this->image();
        $data = array(
            "title" => $title,
            "description" => $description,
            "en_title" => $title1,
            "en_desc" => $description1,
            "chi_title" => $title2,
            "chi_desc" => $description2,
            "image_name" => $img
        );
        $this->db->insert('category_three', $data);
    }

    //update
    public function update_cat_three()
    {
        $this->load->database();
        $title = $this->input->post('title', true);
        $content = $this->input->post('content', true);
        $title1 = $this->input->post('title1', true);
        $content1 = $this->input->post('content1', true);
        $title2 = $this->input->post('title2', true);
        $content2 = $this->input->post('content2', true);
        $id_cat = $this->input->post('id', true);


        $img = $this->image();
        if ($title2){
            $data = array(
                'title' => $title,
                'description' => $content,
                "en_title" => $title1,
                "en_desc" => $content1,
                "chi_title" => $title2,
                "chi_desc" => $content2,
                'image_name' => $img
            );
        }
        else if($title1){
            $data = array(
                'title' => $title,
                'description' => $content,
                "en_title" => $title1,
                "en_desc" => $content1,
                'image_name' => $img
            );
        }

        else {
            $data = array(
                'title' => $title,
                'description' => $content,
                'image_name' => $img
            );
        }
        $this->db->where('id', $id_cat);
        $this->db->update('category_three', $data);
    }

    //delete
    public function delete_cat_three()
    {
        $id_cat_three = $this->input->post('id', true);
        $cat_img = $this->input->post('img', true);
        unlink('assets/upload/images/cat_three/' . $cat_img);
        unlink('assets/upload/thumb/cat_three/' . $cat_img);
        $this->db->where('id', $id_cat_three);
        $this->db->delete('category_three');
    }

    //========================= SUBCATALOG THREE ==========================//
    //insert
    public function insert_subcat_three()
    {
        $title = $this->input->post('title', true);
        if($title==null){
            echo 'заполните все поля';
            return;
        }
        $id_cat = $this->input->post('cat_three_id', true);
        $description = $this->input->post('content', true);
        $title1 = $this->input->post('title1', true);
        $description1 = $this->input->post('content1', true);
        $title2 = $this->input->post('title2', true);
        $description2 = $this->input->post('content2', true);

        $total_rooms = $this->input->post('total_rooms', true);
        $occupied = $this->input->post('occupied', true);
        $idle = $this->input->post('idle', true);

        $img = $this->image();
        $data = array(
            "title" => $title,
            "description" => $description,
            "en_title" => $title1,
            "en_desc" => $description1,
            "chi_title" => $title2,
            "chi_desc" => $description2,
            "total_rooms" => $total_rooms,
            "occupied" => $occupied,
            "idle" => $idle,
            "image_name" => $img,
            'cat_three_id' => $id_cat
        );
        $this->db->insert('sub_category_three', $data);
    }

    //update
    public function update_subcat_three()
    {
        $id_cat = $this->input->post('id', true);
        $title = $this->input->post('title', true);
        $description = $this->input->post('content', true);

        $title1 = $this->input->post('title1', true);
        $description1 = $this->input->post('content1', true);
        $title2 = $this->input->post('title2', true);
        $description2 = $this->input->post('content2', true);

        $total_rooms = $this->input->post('total_rooms', true);
        $occupied = $this->input->post('occupied', true);
        $idle = $this->input->post('idle', true);
        $img = $this->image();

        if ($title2) {
            $data = array(
                "title" => $title,
                "description" => $description,
                "en_title" => $title1,
                "en_desc" => $description1,
                "chi_title" => $title2,
                "chi_desc" => $description2,
                "total_rooms" => $total_rooms,
                "occupied" => $occupied,
                "idle" => $idle,
                "image_name" => $img,
                'id' => $id_cat
            );

        }
        elseif($title1){
            $data = array(
                'id' => $id_cat,
                "title" => $title,
                "description" => $description,
                "en_title" => $title1,
                "en_desc" => $description1,
                "total_rooms" => $total_rooms,
                "occupied" => $occupied,
                "idle" => $idle
            );
        }
        else{
            $data = array(
                'id' => $id_cat,
                "title" => $title,
                "description" => $description,
                "total_rooms" => $total_rooms,
                "occupied" => $occupied,
                "idle" => $idle
            );
        }
        $this->db->where('id', $id_cat);
        $this->db->update('sub_category_three', $data);
    }

    //delete
    public function delete_subcat_three()
    {
        $id_cat_three = $this->input->post('id', true);
        $cat_img = $this->input->post('img', true);

        unlink('assets/upload/images/cat_three/' . $cat_img);
        unlink('assets/upload/thumb/cat_three/' . $cat_img);
        print_r($cat_img);print_r($id_cat_three);

        $this->db->where('id', $id_cat_three);
        $this->db->delete('sub_category_three');
    }
}