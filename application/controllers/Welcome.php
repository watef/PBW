<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('modelkomen');

	}

	public function index()
	{
		$this->load->view('index2');
	}
	public function mengapa()
	{
		$this->load->view('mengapa');
	}
	public function fasilitas()
	{
		$this->load->view('fasilitas');
	}
	public function peluang()
	{
		$this->load->view('peluang');
	}
	public function terakhir()
	{
		$this->load->view('terakhir');
	}
	
	public function add()
	{
		$this->load->view('add');
	}
	public function edit()
	{
		$this->load->view('edit');
	}
	public function komentar()
	{
		$users =$this->modelkomen->getusers();
		$this->load->view('komentar',array('users'=>$users));
	}
	public function delete($id)
	{
		$this->modelkomen->delete($id);
		redirect('Welcome/komentar');
	}
	

	/*public function edit($id)
	{
		$data['edit'] = $this->modelkomen->get_data_id($id);
		$this->load->view('Welcome/edit',$data);

		//redirect('Welcome/komentar');
	}*/

	public function edited($id)
	{
		$where = array('id' => $id);
		$data['users'] = $this->modelkomen->edit($where,'users')->result();
		$this->load->view('edited',$data);
	}

	function update(){
	$id = $this->input->post('id');
	$name = $this->input->post('name');
	$email = $this->input->post('email');
	$komentar = $this->input->post('komentar');
 
	$data = array(
		'name' => $name,
		'email' => $email,
		'komentar' => $komentar
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->modelkomen->edit($where,$data,'user');
	redirect('Welcome/komentar');
	}
	
	public function added()
	{
		$name = $this->input->post('name');
		$komentar = $this->input->post('komentar');
		$email = $this->input->post('email');
		
		$data = array(
			'name' => $name,
			'komentar' => $komentar,
			'email' => $email
		);
		$this->modelkomen->add($data,'users');
		redirect('Welcome/komentar');
	}

	public function download()
	{
		$data['users'] = $this->modelkomen->getusers();
		$this->load->view('download', $data);
	}
}
