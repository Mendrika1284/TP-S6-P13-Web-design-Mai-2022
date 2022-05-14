<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class FirstModel extends CI_Model
{
    public function getListCaisse(){
        $query=$this->db->query('SELECT * FROM Caisse');
        $tab = array();
        foreach ($query->result_array() as $row) {
            $nom = $row;
            $tab[] = $nom;
        }
        return $tab;
    }

}

?>