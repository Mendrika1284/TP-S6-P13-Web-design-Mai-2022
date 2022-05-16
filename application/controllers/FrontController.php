<?php
defined('BASEPATH') OR exit('Bonjour');

class FrontController extends CI_Controller {

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


    // public function content()
    // {
    //     $data = array();
    //     $this->load->model('FirstModel');
    //     $data['nom_caisse']=$this->FirstModel->getListCaisse();
    //     $data['view'] = 'acceuil';
    //     $this->load->view('template',$data);
    // }
    public function question(){
        $data = array();
        $idQuestion = $_GET['id'];
        if($idQuestion == 1){
            $data['question'] = $this->FirstModel->getQuestionById($idQuestion);
            $data['cause'] = $this->FirstModel->getCause();
            $data['title'] = "Cause";
            $data['header'] = 'util/header/cause';
            $data['view'] = 'util/view/cause';
            $this->load->view('frontdetail',$data);
        }else if($idQuestion == 2){
            $data['question'] = $this->FirstModel->getQuestionById($idQuestion);
            $data['consequence'] = $this->FirstModel->getConsequence();
            $data['title'] = "Conséquence";
            $data['header'] = 'util/header/consequenceBase';
            $data['view'] = 'util/view/consequenceBase';
            $this->load->view('frontdetail',$data);
        }else if($idQuestion == 3){
            $data['question'] = $this->FirstModel->getQuestionById($idQuestion);
            $data['solution'] = $this->FirstModel->getSolution();
            $data['title'] = "Solution";
            $data['header'] = 'util/header/solution';
            $data['view'] = 'util/view/solution';
            $this->load->view('frontdetail',$data);
        }else{
            $this->load->view('errors/html/error_404.php');
        }
    }
    public function consequence(){
        $data = array();
        $idConsequence = $_GET['id'];
        $data['consequence'] = $this->FirstModel->getConsequenceById($idConsequence);
        $data['title'] = "Conséquence";
        $data['header'] = 'util/header/consequence';
        $data['view'] = 'util/view/consequence';
        $this->load->view('frontdetail',$data);
    }
}

?>
