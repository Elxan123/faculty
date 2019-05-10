<?php


class Mecnun_model extends  CI_Model{

//==========   Xeberemeliyatlari ===================
    public function getNews()
    {
       return $this->db->order_by('news_id', 'DESC')->get('news_db')-> result_array();
    }

    public function deleteNews($where)
    {
        $this->db->where($where)->delete('news_db');
    }

    public function getOneNews($where)
    {
       return $this->db->where($where)->get('news_db')->row_array();
    }

    public function addNews($news_data)
    {
        $this->db->insert('news_db',$news_data);
    }

    public function updateNews($where,$news_data)
    {
        $this->db->where($where)->update('news_db',$news_data);
    }



//    =================================================================cavidin isleri=================================================================

    public function get_teachers()
    {
        return $this->db->get('teachers_db')->result_array();
    }

    public function get_teacher($where)
    {
        return $this->db->where($where)->get('teachers_db')->row_array();
    }


    public function get_categories()
    {
        return $this->db->get('department_categories')-> result_array();
    }

//    =================================================================cavidin isleri=================================================================



}