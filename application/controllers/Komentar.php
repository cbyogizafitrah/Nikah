<?php 
	/**
	 * 
	 */
	class Komentar extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Komentar_model');
		}

		public function home()
		{
			$data_komentar = $this->Komentar_model->select();
			$data['komentar']=$data_komentar;
			if( ! $this->session->userdata('authenticated'))
      		{
            redirect(site_url('admin/index')); 
        	}
			$this->load->view('admin/komen',$data);
		}

		public function select()
		{
			return $this->db->get('komentar')->result();
		}
		

		public function delete($id) 
		{
			$this->Komentar_model->delete($id);
			redirect(site_url('komentar/home'));
		}

		public function update($id)
		{
			$komentar=$this->db->where('id_komentar',$id)->get('komentar')->row();
			$data['komentar']=$komentar;
			$this->load->view('admin/form_komen',$data);

		}

		public function insert()
		{
			$this->load->view('admin/form_komen');
		}
		public function insert_aksi()
		{
			$id_komentar=$this->input->post('id_komentar');
			$nama_komentar=$this->input->post('nama_komentar');
			$isi_komentar=$this->input->post('isi_komentar');			
			$data_komentar=array('nama_komentar' =>$nama_komentar,
								'isi_komentar'=>$isi_komentar);
				if ($id_komentar == "") {
					$this->Komentar_model->insert($data_komentar);	
					redirect(site_url('komentar/home'));
				}else {
					$this->Komentar_model->update($data_komentar,$id_komentar);
					redirect(site_url('komentar/home'));
				}
		}
	}
?>