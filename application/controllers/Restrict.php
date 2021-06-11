<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restrict extends CI_Controller{

    public function index()
    {
        $data = array(
            "scripts" => array(
                "util.js",
                "login.js"
            )
        );
        $estilo = array(
            "css" => array(
                "css_login.css"
            )
            );
        //cria uma chave generica 
        //echo password_hash('Alves@123', PASSWORD_DEFAULT);
        $this->template->show("login",$data,$estilo);
    //    $this->load->model('logon_model');

    //     print_r($this->logon_model->get_user_data("adminmaster"));
    }

    
}