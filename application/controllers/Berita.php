<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

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
		$data['berita'] = $this->M_user->getberita();
		$this->load->view('berita',$data);
	}
	public function detail($id)
	{
		$this->load->model('M_user');
		$berita = $this->M_user->getberita(' where id_berita = "'.$id.'"');
		if($berita->num_rows() <> 0){
			$data['berita'] = $berita->row();
		}else{
			redirect('berita');
		}
		$this->load->view('detailberita', $data);
	}
}
