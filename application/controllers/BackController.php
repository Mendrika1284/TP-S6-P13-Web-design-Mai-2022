<?php
defined('BASEPATH') OR exit('Bonjour');

class BackController extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function login()
    {
        $this->load->view('backOffice/login');
    }

    public function go(){
        $login = $this->input->post('login');
        $mdp = $this->input->post('mdp');
        if($this->FirstModel->loginSuperUtilisateur($login,sha1($mdp))){
                $this->load->view("template.php",$data);
        }else{
            $data = array();
            $data['erreur'] = "Email ou Mot de passe introuvable";
            $this->load->view("connexion.php",$data);            
        }
    }
}
?>
