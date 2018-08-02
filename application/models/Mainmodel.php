<?php
class Mainmodel extends CI_Model{
    static function query_execution($qry){
        $ci =& get_instance();
        $rrow=$ci->db->query($qry);
        return $rrow->result();
    }
    static function save($data,$table){
        $ci =& get_instance();
        $data["created_at"]=FULLDATE;
        $ci->db->insert($table, $data);
        $insertid=$ci->db->insert_id();
        return $insertid;
    }
    static function changedateformat($date){
        $rdate="";
        if(strstr($date,"/")){
            $date=explode("/",$date);
            $rdate=$date["2"]."-".$date["1"]."-".$date["0"];
        }
        return $rdate;
    }
    static function imageUploadConfig(){
        return array(
            'upload_path'=>'./uploads/',
            'allowed_types'=>'gif|jpg|png|jpeg|bmp',
            'max_size'=>256,
            'max_width'=>1024,
            'max_height'=>768,
            'encrypt_name'=>true
        );
    }
}