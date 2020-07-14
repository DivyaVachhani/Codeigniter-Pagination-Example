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
	public function __construct(){
		parent::__construct();
		$this->load->model('user');
		$this->load->library('pagination');
	}



	public function get_user()
	{
		$total_rows = $this->user->getRecordCount();
		$config = array(
			'base_url' => base_url().'welcome/get_user/',
			'per_page' => 10,
			'total_rows' => $total_rows,
			'full_tag_open' => '<ul class="pagination">',
			'full_tag_close' => '</ul>',
			'next_tag_open' => '<li>',
			'next_tag_close' => '</li>',
			'prev_tag_open' => '<li>',
			'prev_tag_close' => '</li>',
			'num_tag_open' => '<li>',
			'num_tag_close' => '</li>',
			'cur_tag_open' => '<li class="active"><a>',
			'cur_tag_close' => '</a></li>',
			'first_link' => FALSE,
			'last_link' => FALSE,
			);

		$this->pagination->initialize($config);

		$data['user_detail'] = $this->user->user_list($config['per_page'],$this->uri->segment(3));
		$this->load->view('view_user',$data);
	}
	
}
