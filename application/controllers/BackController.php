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
        if($table == "Cause"){
            $data['table'] = $table;
            $data['backview']="util/backView/cause";
            $data['column'] = $this->FirstModel->getColumn($table);
            $data['cause']=$this->FirstModel->getCause();
            $this->load->view("backCrud",$data);
        }else if($table == "Consequence"){
            $data['table'] = $table;
            $data['backview']="util/backView/consequence";
            $data['column'] = $this->FirstModel->getColumn($table);
            $data['consequence']=$this->FirstModel->getConsequence();
            $this->load->view("backCrud",$data);
        }else if($table == "Solution"){
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

        if($table == "Cause"){
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

        }else if($table == "Consequence"){
            if($this->input->post('submit')){
            
                //Check whether user upload picture
                if(!empty($_FILES['file']['name'])){
                    $config['upload_path'] = 'assets/assets/img/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
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
        }else if($table == "Solution"){
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
        if($table == "Cause"){
            $data['table'] = $table;
            $data['backview']="util/backView/cause";
            $data['column'] = $this->FirstModel->getColumn($table);
            $data['cause']=$this->FirstModel->getCause();
            $this->load->view("backCrud",$data);
        }else if($table == "Consequence"){
            $data['table'] = $table;
            $data['backview']="util/backView/consequence";
            $data['column'] = $this->FirstModel->getColumn($table);
            $data['consequence']=$this->FirstModel->getConsequence();
            $this->load->view("backCrud",$data);
        }else if($table == "Solution"){
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

    public function updatePage(){
        $id = $_GET['id'];
        $table = $_GET['table'];
        $data = array();
        if($table == "Cause"){
            $data['cause'] = $this->FirstModel->getCauseById($id);
            $data['update'] = "util/backUpdate/cause";
            $data['table'] = $table;
            $this->load->view("backUpdate.php",$data);
        }else if($table == "Consequence"){
            $data['consequence'] = $this->FirstModel->getConsequenceById($id);
            $data['update'] = "util/backUpdate/consequence";
            $data['table'] = $table;
            $this->load->view("backUpdate.php",$data);
        }else if($table == "Solution"){
            $data['solution'] = $this->FirstModel->getSolutionById($id);
            $data['update'] = "util/backUpdate/solution";
            $data['table'] = $table;
            $this->load->view("backUpdate.php",$data);
        }
    }

    public function update(){
        $id = $_POST['id'];
        $table=$_POST['table'];
        $data = array();
        if($table == "Cause"){
            $data = array(
                'detail' => $_POST['cause']
            );
            $this->FirstModel->update($table,$id,$data);
            $data['cause'] = $this->FirstModel->getCauseById($id);
            $data['update'] = "util/backUpdate/cause";
            $data['table'] = $table;
            $this->load->view("backUpdate.php",$data);
        }else if($table == "Consequence"){
                        $slug = url_title($_POST['titre'], 'dash', true);
                        $data = array(
                            'representation' => $_POST['image'],
                            'titre' => $_POST['titre'],
                            'consequence' => $_POST['consequence'],
                            'url' => $slug
                        );     
                        $this->FirstModel->update($table,$id,$data);
                        $data['consequence'] = $this->FirstModel->getConsequenceById($id);
                        $data['update'] = "util/backUpdate/consequence";
                        $data['table'] = $table;      
                        $this->load->view("backUpdate.php",$data);
        }else if($table == "Solution"){
            $data = array(
                'solution' => $_POST['solution']
            );
            $this->FirstModel->update($table,$id,$data);
            $data['solution'] = $this->FirstModel->getSolutionById($id);
            $data['update'] = "util/backUpdate/solution";
            $data['table'] = $table;      
            $this->load->view("backUpdate.php",$data);
        }
    }
    
}
?>
