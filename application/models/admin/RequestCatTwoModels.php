<?php
class RequestCatTwoModels extends CI_Model{
    /**
     * RequestCatTwoModels constructor.
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
    private function image(){
        //images
        $config['upload_path'] = './assets/upload/images/cat_two';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = TRUE;
        $config['remove_spaces'] = TRUE;

        $this->upload->initialize($config);

        $img_name = $this->input->post('img_name');
        if ( !$this->upload->do_upload('img_cattwo'))
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
            $config['width'] = 50;
            $config['height'] = 50;

            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $name = $this->upload->data();
            $file_name = $name['file_name'];
            if($img_name){
                unlink('assets/upload/images/cat_one/' . $img_name);
                unlink('assets/upload/thumb/cat_one/' . $img_name);
            }

        }
        return $file_name;
    }


//========================= CATALOG TWO ==========================//
    //insert
    public function insert_cat_two() {
        $title = $this->input->post('title', true);
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
        $this->db->insert('category_two', $data);
    }

    //update
    public function update_cat_two()
    {
        $this->load->database();
        $title = $this->input->post('title', true);
        $content = $this->input->post('content', true);
        $title1 = $this->input->post('title1', true);
        $content1 = $this->input->post('content1', true);
        $title2 = $this->input->post('title2', true);
        $content2 = $this->input->post('content2', true);
        $id_cat = $this->input->post('id', true);
        $img_name = $this->input->post('img_name');
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
        $this->db->update('category_two', $data);
    }

    //delete
    public function delete_cat_two()
    {
        $id_cat_two = $this->input->post('id', true);
        $cat_img = $this->input->post('img', true);
        unlink('assets/upload/images/cat_two/'. $cat_img);
        unlink('assets/upload/thumb/cat_two/'. $cat_img);
        $this->db->where('id',$id_cat_two);
        $this->db->delete('category_two');
    }



}