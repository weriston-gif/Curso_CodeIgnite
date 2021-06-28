
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Restrict extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
    }

    public function index()
    {
        //valida se já tem login
        if ($this->session->userdata("user_id")) {
            //se tiver vem para área
            $this->template->show("restrict");
        } else {
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
            $this->template->show("login", $data, $estilo);
            //    $this->load->model('logon_model');

            //     print_r($this->logon_model->get_user_data("adminmaster"));
        }
    }

    public function logOff(){
        $this->session->sess_destroy();
        header("Location: ".base_url(). "Restrict");
    }

    public function ajax_login()

    {
       // validando segurança
        if (!$this->input->is_ajax_request()) {
            exit("Acesso bloqueado !");
        } else {

            $json = array();
            $json["status"] = 1;
            $json["error_lis"] = array();


            $username = $this->input->post('nome');
            $password = $this->input->post('senha');
            // $username = $_POST['user'];
            // $password = $_POST['pass'];



            if (empty($username)) {
                $json["status"] = 0;
                $json["error_lis"]["#username"] = "Usuário não pode ser vazio !";
            } else {
                $this->load->model("Logon_model");
                $result = $this->Logon_model->get_user_data($username);
                if ($result) {

                    $user_id = $result->user_id;
                    $password_hash = $result->password_hash;
                    if (password_verify($password, $password_hash)) {
                        $this->session->set_userdata("user_id", $user_id);
                    } else {
                        $json["status"] = 0;
                    }
                } else {
                    $json["status"] = 0;
                }
                if ($json["status"] == 0) {
                    $json["error_list"]["#btn_login"] = "Usuário ou senha inorreta ! ";
                }
            }
        }

        // echo ('valor do input:'.$username);

        echo (json_encode($json));
    }
}
