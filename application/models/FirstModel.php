<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class FirstModel extends CI_Model
{

    public function login($login, $mdp){
        $query ="SELECT * FROM Admin WHERE login =%s AND mdp =%s";
        $sprint = sprintf($query,$this->db->escape($login),$this->db->escape($mdp));
        $query=$this->db->query($sprint);
        $tab = array();
        foreach ($query->result_array() as $row) {
            $nom = $row;
            $tab[] = $nom;
        }
        return $tab;
    }

    public function getTable(){
        $tables = $this->db->list_tables();
        return $tables;
    }

    public function getColumn($table){
        $query=$this->db->query('SHOW COLUMNS FROM '.$table);
        $tab = array();
        foreach ($query->result_array() as $row) {
            $nom = $row;
            $tab[] = $nom;
        }
        return $tab;
    }

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

    public function getCauseById($id){        
        $query="SELECT * FROM Cause WHERE id=%s";
        $sprint = sprintf($query, $this->db->escape($id));
        $query = $this->db->query($sprint);
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

    public function getSolutionById($id){        
        $query="SELECT * FROM Solution WHERE id=%s";
        $sprint = sprintf($query, $this->db->escape($id));
        $query = $this->db->query($sprint);
        $tab = array();
        foreach ($query->result_array() as $row) {
            $nom = $row;
            $tab[] = $nom;
        }
        return $tab;
    }

    public function insert($table, $data){
        $this->db->insert($table, $data);
        return true;
    }

    public function update($nomTable, $id, $data){
        $this->db->where('id',$id);
        $this->db->update($nomTable, $data);
    }

    public function delete($nomTable,$id){
        $this->db->where('id', $id);
        $this->db->delete($nomTable);
    }

}

?>