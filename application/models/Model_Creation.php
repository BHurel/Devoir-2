<?php

class Model_Creation extends CI_Model
{
    public function AfficherCreation()
    {
        $sql = $this->db->get('conference');
        foreach ($sql->result() as $row)
        {
            $data[] = $row;
        }
        return $data;
    }
}