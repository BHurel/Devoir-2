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
    /*
    function AfficherConferences()
    {
        $idConference = $_GET['idConference'];
        $this->load->model('Model_Formations');
        $data['lesFormations'] = $this->Model_Formations->getFormationsByActivite($idActivite);
        $this->load->view('AfficherFormations', $data);
    }
    
    function AfficherAgents()
    {
        $idFormation = $_GET['idFormation'];
        $this->load->model('Model_Agents');
        $data['lesAgents'] = $this->Model_Agents->getAgentsByFormation($idFormation);
        $this->load->view('AfficherAgents', $data);
    }
    function ValiderPresence()
    {
        $this->load->model('Model_Inscription');
        $this->Model_Inscription->ValiderPresence($_GET['tab1'],$_GET['tab2'],$_GET['numF']);
    }*/
}