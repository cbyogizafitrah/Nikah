<?php 
	/**
	 * 
	 */
	class Tahap extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Tahap_model');
		}

		public function home()
		{
			$data_tahap = $this->Tahap_model->select();
			$data['tahap']=$data_tahap;
			if( ! $this->session->userdata('authenticated'))
      		{
            redirect(site_url('admin/index')); 
        	}
			$this->load->view('admin/content',$data);
		}

		public function select()
		{
			return $this->db->get('tahap')->result();
		}
		

		public function delete($id) 
		{
			$this->Tahap_model->delete($id);
			redirect(site_url('tahap/home'));
		}

		public function update($id)
		{
			$tahap=$this->db->where('id_tahap',$id)->get('tahap')->row();
			$data['tahap']=$tahap;
			$this->load->view('admin/form_content',$data);

		}

		public function insert()
		{
			$this->load->view('admin/form_content');
		}
		public function insert_aksi()
		{
			$id_tahap=$this->input->post('id_tahap');
			$jangka_tahap=$this->input->post('jangka_tahap');
			$isi_tahap=$this->input->post('isi_tahap');			
			$data_tahap=array('jangka_tahap' =>$jangka_tahap,
								'isi_tahap'=>$isi_tahap);
				if ($id_tahap == "") {
					$this->Tahap_model->insert($data_tahap);	
					redirect(site_url('tahap/home'));
				}else {
					$this->Tahap_model->update($data_tahap,$id_tahap);
					redirect(site_url('tahap/home'));
				}
		}
	}
?>