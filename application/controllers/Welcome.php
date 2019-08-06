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
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('index');

	}
	public function login()
	{
		$this->load->view('front/login');

	}
	public function persiapan()
	{
		$this->load->view('front/persiapan');

	}
	public function tips()
	{
		$this->load->view('front/tipsinspirasi');

	}
	public function step1()
	{
		$this->load->view('front/step1');

	}
	public function step2()
	{
		$this->load->view('front/step2');

	}
	public function step3()
	{
		$this->load->view('front/step3');

	}
	public function step4()
	{
		$this->load->view('front/step4');

	}
	public function step5()
	{
		$this->load->view('front/step5');

	}
	public function step6()
	{
		$this->load->view('front/step6');

	}

}
