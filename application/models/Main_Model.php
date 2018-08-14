<?php
class Main_Model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }
    public function get_cat_one()
    {
        $lang =$this -> session -> userdata ('lang');
//        echo $lang;
        $select = $this->db->get('category_one');
        $cat_one = $select->result();

        $data='';
        foreach ($cat_one as $res){
            if($lang=="rus"){
                $data[]=array(
                    'id'=>$res->id,
                    'title'=>$res->title,
                    'desc'=>$res->description,
                    'image'=>$res->image_name
                );
            }
           else if($lang=="english"){
                $data[]=array(
                    'id'=>$res->id,
                    'title'=>$res->en_title,
                    'desc'=>$res->en_desc,
                    'image'=>$res->image_name
                );
            }
            else{
                $data[]=array(
                    'id'=>$res->id,
                    'title'=>$res->chi_title,
                    'desc'=>$res->chi_desc,
                    'image'=>$res->image_name
                );
            }

        }

//        echo "<pre>";
//        print_r($data);
//        echo "</pre>";
        return $data;
    }
}