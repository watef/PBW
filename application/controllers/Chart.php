<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Chart extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('m_read');
    }
    public function index()
    {
        $data['report'] = $this->m_read->report();
        $this->load->view('report', $data);
    }
}