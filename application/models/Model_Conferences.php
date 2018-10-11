<?php

class Model_Conferences extends CI_Model
{
    public function getAllConferences()
    {
        $sql = $this->db->get('conference');
        foreach ($sql->result() as $row)
        {
            $data[] = $row;
        }
        return $data;
    }
}
