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

}

?>