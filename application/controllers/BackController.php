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

    public function seConnecter(){
        $data = array();
        $login = $this->input->post('login');
        $mdp = $this->input->post('mdp');
        if($this->FirstModel->login($login,sha1($mdp))){
            $data['table'] = $this->FirstModel->getTable();
            $this->load->view("backOffice/backOffice",$data);
        }else{
            $data = array();
            $data['erreur'] = "Email ou Mot de passe introuvable";
            $this->load->view("backOffice/login",$data);            
        }
    }

    public function traitementChoix(){
        $table = $_POST['table'];
        $data = array();
        $data['titre'] = "Page CRUD pour ";
        if($table == "cause"){
            $data['table'] = $table;
            $data['backview']="util/backView/cause";
            $data['column'] = $this->FirstModel->getColumn($table);
            $data['cause']=$this->FirstModel->getCause();
            $this->load->view("backCrud",$data);
        }else if($table == "consequence"){
            $data['table'] = $table;
            $data['backview']="util/backView/consequence";
            $data['column'] = $this->FirstModel->getColumn($table);
            $data['consequence']=$this->FirstModel->getConsequence();
            $this->load->view("backCrud",$data);
        }else if($table == "solution"){
            $data['table'] = $table;
            $data['backview']="util/backView/solution";
            $data['column'] = $this->FirstModel->getColumn($table);
            $data['solution']=$this->FirstModel->getSolution();
            $this->load->view("backCrud",$data);
        }else{
            $data['error'] = "Mbola tsy kitihana aloha ka, kouny an 😉";
            $data['table'] = $this->FirstModel->getTable();
            $this->load->view("backOffice/backOffice.php",$data);
        }
    }

    public function add(){
        $table = $_POST['table'];
        $id= $_POST['id'];

        if($table == "cause"){
            $data = array(
                'idQuestion' => $id,
                'detail' => $_POST['textarea']
            );
            $this->FirstModel->insert($table,$data);

            $data['titre'] = "Page CRUD pour ";
            $data['table'] = $table;
            $data['backview']="util/backView/cause";
            $data['column'] = $this->FirstModel->getColumn($table);
            $data['cause']=$this->FirstModel->getCause();
            $this->load->view("backCrud",$data);

        }else if($table == "consequence"){
            if($this->input->post('submit')){
            
                //Check whether user upload picture
                if(!empty($_FILES['file']['name'])){
                    $config['upload_path'] = 'assets/assets/img/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['file_name'] = $_FILES['file']['name'];
                    
                    //Load upload library and initialize configuration
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    
                    if($this->upload->do_upload('file')){
                        $uploadData = $this->upload->data();
                        $picture = $uploadData['file_name'];
                        $slug = url_title($_POST['input'], 'dash', true);
                        $data = array(
                            'idQuestion' => $id,
                            'representation' => $picture,
                            'titre' => $_POST['input'],
                            'consequence' => $_POST['textarea'],
                            'url' => $slug
                        );
                        $this->FirstModel->insert($table,$data);            
                    
                        $data['titre'] = "Page CRUD pour ";
                        $data['table'] = $table;
                        $data['backview']="util/backView/consequence";
                        $data['column'] = $this->FirstModel->getColumn($table);
                        $data['consequence']=$this->FirstModel->getConsequence();
                        $this->load->view("backCrud",$data);
        
                    }else{
                        $picture = '';
                        $data['titre'] = "Page CRUD pour ";
                        $data['table'] = $table;
                        $data['backview']="util/backView/consequence";
                        $data['column'] = $this->FirstModel->getColumn($table);
                        $data['consequence']=$this->FirstModel->getConsequence();
                        $this->load->view("backCrud",$data);
                    }
                }else{
                    $picture = '';
                    $data['titre'] = "Page CRUD pour ";
                    $data['table'] = $table;
                    $data['backview']="util/backView/consequence";
                    $data['column'] = $this->FirstModel->getColumn($table);
                    $data['consequence']=$this->FirstModel->getConsequence();
                    $this->load->view("backCrud",$data);
                }
            }
        }else if($table == "solution"){
            $data = array(
                'idQuestion' => $id,
                'solution' => $_POST['input']
            );
            $this->FirstModel->insert($table,$data);

            
            $data['titre'] = "Page CRUD pour ";
            $data['table'] = $table;
            $data['backview']="util/backView/solution";
            $data['column'] = $this->FirstModel->getColumn($table);
            $data['solution']=$this->FirstModel->getSolution();
            $this->load->view("backCrud",$data);
        }
    }



    public function delete(){
        $id = $_GET['id'];
        $table = $_GET['table'];
        $data['titre'] = "Page CRUD pour ";
        $this->FirstModel->delete($table,$id);
        if($table == "cause"){
            $data['table'] = $table;
            $data['backview']="util/backView/cause";
            $data['column'] = $this->FirstModel->getColumn($table);
            $data['cause']=$this->FirstModel->getCause();
            $this->load->view("backCrud",$data);
        }else if($table == "consequence"){
            $data['table'] = $table;
            $data['backview']="util/backView/consequence";
            $data['column'] = $this->FirstModel->getColumn($table);
            $data['consequence']=$this->FirstModel->getConsequence();
            $this->load->view("backCrud",$data);
        }else if($table == "solution"){
            $data['table'] = $table;
            $data['backview']="util/backView/solution";
            $data['column'] = $this->FirstModel->getColumn($table);
            $data['solution']=$this->FirstModel->getSolution();
            $this->load->view("backCrud",$data);
        }
    }

    public function goBack(){
        $data['table'] = $this->FirstModel->getTable();
        $this->load->view("backOffice/backOffice.php",$data); 
    }
    
}
?>
