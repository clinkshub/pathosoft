<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Doctors extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->data["module"]="Masters";
        $this->data["submodule"]="Doctors";
        $this->data["page"]="All";
        $this->data["scriptfiles"]="doctor";
        $this->load->model('DoctorsModel','doctor');
    }
    public function index() {
        $this->template->load("Default","masters/doctors/All",$this->data);
    }
    public function new() {
        $this->data["page"]="New";
        $this->template->load("Default","masters/doctors/New",$this->data);
    }
    public function show() {
        $this->data["page"]="Show";
        $this->template->load("Default","masters/doctors/Show",$this->data);
    }
    function new_save(){
        try{
            //post data
            $requestdata=$_REQUEST;
            //upload the photo
            $config=Mainmodel::imageUploadConfig();
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('photo')){ 
                $data = $this->upload->data();
                $requestdata['photo']=$data['file_name'];
            }
            if($this->doctor->save($requestdata)){
                echo json_encode(array("status"=>1,"message"=>"success","data"=>$requestdata));
            }
            else{
                echo json_encode(array("status"=>0,"message"=>"error"));
            }
        }
        catch(Exception $ex){
            echo json_encode(array("status"=>0,"message"=>"error"));
        }
    }
    public function getalldoctors(){
        // storing  request (ie, get/post) global array to a variable  
        $requestData= $_REQUEST;
        $options=array(
            'search'=>$requestData['search'],
            'order'=>$requestData['order'],
            'start'=>$requestData['start'],
            'length'=>$requestData['length'],
            'draw'=>$requestData['draw']
        );
        $json_data = $this->doctor->getDoctorList($options);
        echo json_encode($json_data);  // send data as json format
    }
}
