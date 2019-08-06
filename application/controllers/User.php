<?php 
	/**
	 * 
	 */
	class User extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('User_model');
		}

		public function home()
		{
			$data_user = $this->User_model->select();
			$data['user']=$data_user;
			if( ! $this->session->userdata('authenticated'))
      		{
            redirect(site_url('admin/index')); 
        	}
			$this->load->view('admin/user',$data);
		}

		public function select()
		{
			return $this->db->get('user')->result();
		}
		

		public function delete($id) 
		{
			$this->User_model->delete($id);
			redirect(site_url('user/home'));
		}

		public function update($id)
		{
			$user=$this->db->where('id_user',$id)->get('user')->row();
			$data['user']=$user;
			$this->load->view('admin/form_user',$data);

		}

		public function insert()
		{
			$this->load->view('admin/form_user');
		}
		public function insert_aksi()
		{
			$id_user=$this->input->post('id_user');
			$nama_user=$this->input->post('nama_user');
			$email_user=$this->input->post('email_user');		
			$password_user=$this->input->post('password_user');
			$ket_user=$this->input->post('ket_user');		
			$data_user=array('nama_user' =>$nama_user,
								'email_user'=>$email_user,
								'password_user'=>$password_user,
								'ket_user'=>$ket_user);
				if ($id_user == "") {
					$this->User_model->insert($data_user);	
					redirect(site_url('user/home'));
				}else {
					$this->User_model->update($data_user,$id_user);
					redirect(site_url('user/home'));
				}
		}
	}
?>