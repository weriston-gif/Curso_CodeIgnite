
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
   
    public function ajax_login(){
        
        $json = array();
        $json["status"] = 1;
        $json["error_lis"] = array();

        
        $username = $this->input->post('user');
        $password = $this->input->post('pass');
        // $username = $_POST['user'];
        // $password = $_POST['pass'];


        
        if(empty ($username) ){
            $json["status"] = 0;
            $json["error_lis"]["#username"] = "Usuário não pode ser vazio !";
        }else{
            $this->load->model("Logon_model");
            $result = $this->Logon_model->get_user_data($username);
            if ($result){

                $user_id = $result->user_id;
                $password_hash = $result->password_hash;
                if(password_verify($password, $password_hash)){
                    $this->session->set_userdata("user_id", $user_id);
                }else{
                    $json["status"] = 0;
                }
            }
            else{
                $json["status"] = 0;
            }
            if($json["status"] == 0){
                $json["error_list"]["#btn_login"] = "Usuário ou senha inorreta ! ";
            }
        }
        var_dump($username) ;
        
        var_dump(json_encode($json)) ;
    }
    
    
}



