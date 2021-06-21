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
	 
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('welcome_message');
	}
	public function search(){
		$search = $this->input->post("search");
		$this->load->helper('url');
		$this->load->database();
		$query= "SELECT substances.substance_id,substances.ec_number, substances.cas_num, substances.substance_name, reach_svhc.reach_substances,reach_svhc.related_info
		FROM substances, reach_svhc
		WHERE substances.substance_id = reach_svhc.reach_substances
		AND substances.ec_number = '$search'";
		$data["data"] = $this->db->query($query)->result();
		$this->load->view('welcome_message',$data);
	}
}
	