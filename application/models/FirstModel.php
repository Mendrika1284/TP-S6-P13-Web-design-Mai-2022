<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class FirstModel extends CI_Model
{
    public function getAllQuestion(){
        $query=$this->db->query('SELECT * FROM Question');
        $tab = array();
        foreach ($query->result_array() as $row) {
            $nom = $row;
            $tab[] = $nom;
        }
        return $tab;
    }

    public function getQuestionById($id){
        $query="SELECT * FROM Question WHERE id=%s";
        $sprint = sprintf($query, $this->db->escape($id));
        $query = $this->db->query($sprint);
        $tab = array();
        foreach ($query->result_array() as $row) {
            $nom = $row;
            $tab[] = $nom;
        }
        return $tab;
    }

    public function getCause(){
        $query=$this->db->query('SELECT * FROM Cause');
        $tab = array();
        foreach ($query->result_array() as $row) {
            $nom = $row;
            $tab[] = $nom;
        }
        return $tab;
    }

    public function getConsequence(){
        $query=$this->db->query('SELECT * FROM Consequence');
        $tab = array();
        foreach ($query->result_array() as $row) {
            $nom = $row;
            $tab[] = $nom;
        }
        return $tab;
    }

    public function getConsequenceById($id){
        $query="SELECT * FROM Consequence WHERE id=%s";
        $sprint = sprintf($query, $this->db->escape($id));
        $query = $this->db->query($sprint);
        $tab = array();
        foreach ($query->result_array() as $row) {
            $nom = $row;
            $tab[] = $nom;
        }
        return $tab;
    }

    public function getSolution(){
        $query=$this->db->query('SELECT * FROM Solution');
        $tab = array();
        foreach ($query->result_array() as $row) {
            $nom = $row;
            $tab[] = $nom;
        }
        return $tab;
    }

}

?>