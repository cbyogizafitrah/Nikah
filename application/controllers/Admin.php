<?php 
	/**
	 * 
	 */
	class Admin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Admin_model');
		}

		public function select()
		{
			return $this->db->get('admin')->result();
		}

		public function index()
		{
			$this->load->view('admin/login');
		}
		
		public function cek_login()
		{
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$nama = $this->input->get('nama_admin');
		$cek_login= $this->Admin_model->login($email,$password);

			if (empty($cek_login)) {
				redirect(site_url('admin/index'));
			}else{
					$session = array(
          			'authenticated'=>true, // Buat session authenticated dengan value true
         			'email_admin'=>$data_admin->email_admin,  // Buat session username
          			'password_admin'=>$data_admin->password_admin // Buat session authenticated
        			);
        			$this->session->set_userdata($session);
				redirect(site_url('admin/home'));
			}
		}

		public function delete($id) 
		{
			$this->Admin_model->delete($id);
			redirect(site_url('admin/home'));
		}

		public function update($id)
		{
			$admin=$this->db->where('id_admin',$id)->get('admin')->row();
			$data['admin']=$admin;
			$this->load->view('admin/form_admin',$data);

		}

		public function insert()
		{
			$this->load->view('admin/form_admin');
		}
		public function insert_aksi()
		{
			$id_admin=$this->input->post('id_admin');
			$nama_admin=$this->input->post('nama_admin');
			$email_admin=$this->input->post('email_admin');		
			$password_admin=$this->input->post('password_admin');	
			$data_admin=array('nama_admin' =>$nama_admin,
								'email_admin'=>$email_admin,
								'password_admin'=>$password_admin);
				if ($id_admin == "") {
					$this->Admin_model->insert($data_admin);	
					redirect(site_url('admin/home'));
				}else {
					$this->Admin_model->update($data_admin,$id_admin);
					redirect(site_url('admin/home'));
				}
		}

		public function logout()
		{
			$this->session->sess_destroy();
			redirect(site_url('admin/index'));
		} 

		public function home()
		{
			$data_admin = $this->Admin_model->select();
			$data['admin']=$data_admin;
      		if( ! $this->session->userdata('authenticated'))
      		{
            redirect(site_url('admin/index')); 
        	}
			$this->load->view('admin/home',$data);
		}
	}
?>