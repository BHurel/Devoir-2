<?php

class CtrlConferences extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Creation');
    }
    public function index()
    {
        $data['lesCreations'] = $this->Model_Creation;
        $this->load->view('AfficherCreation', $data);
	}
	function AfficherTechnologies()
    {
        $idtechno = $_GET['idtechno'];
        $this->load->model('Model_Techno');
        $data['lesTechnologies'] = $this->model_Technologies->getTechnologies($idtechno);
        $this->load->view('AfficherTechnologies', $data);
	}
	function ValiderChoixConf()
	{
		
	}
}