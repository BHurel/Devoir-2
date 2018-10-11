<?php

class Model_Technologies extends CI_Model
{
    public function AfficherTechnologies()
    {
        $sql = $this->db->get('select nomtechno from technologie');
        foreach ($sql->result() as $row)
        {
            $data[] = $row;
        }
        return $data;
    }
}
?>