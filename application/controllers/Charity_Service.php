<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charity_Service extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('SharingModel');

    }


	public function index(){
        
        $mapData = $this->SharingModel->getAllfromTable('cafe_owner');
        $data['locations'] = $this->SharingModel->getLocations($mapData);
        $this->loadView('charity_service/index',  $data);

    }




    /**
     * Load view 
     * @param 1 : view name
     * @param 2 : data to be render on view. If no data pass null
     */
    function loadView($view, $data) {

        $this->load->view('common/header');
        //$this->load->view('common/sidebar');

        $this->load->view($view, array('data' => $data));
        $this->load->view('common/footer');

    }   	
}
