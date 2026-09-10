<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('main_model');        
    }

    public function index() {
        $this->load->view('index');
    }

    public function feedback() {
        if($_POST["submit"]){
            unset($_POST["submit"]);
            $this->main_model->insert_data('feedback', $_POST);
            $page_data['acc_name'] = $_POST['acc_name'];
            $this->load->view('thank-you',$page_data);
        }
    }

    public function get_ajax_name() {
        $search_keyword = $_POST['search_keyword'];
        $query = "SELECT acc_name FROM `conference_certificate` WHERE `acc_name` LIKE '%".$search_keyword."%' GROUP BY acc_name";
        $users = $this->main_model->where_query($query);

        if(!empty($users)){
            echo '<ul id="country-list">';
            foreach ($users as $key => $value) { 
                echo '<li onClick="selectCountry(\''.$value->acc_name.'\')">'.$value->acc_name.'</li>';
            } 
            echo '</ul>';
        }
    }
}