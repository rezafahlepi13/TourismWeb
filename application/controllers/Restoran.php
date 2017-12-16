<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restoran extends CI_Controller {

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
	public function index()
	{
		$this->load->model('M_user');
		$data['restoran'] = $this->M_user->getrestoran();
		$this->load->view('restoran',$data);
	}
	public function detail($id)
	{
		$this->load->model('M_user');
		$berita = $this->M_user->getrestoran(' where id_restoran = "'.$id.'"');
		if($berita->num_rows() <> 0){
			$data['restoran'] = $berita->row();
		}else{
			redirect('restoran');
		}
		$this->load->view('detailrestoran', $data);
	}
}
