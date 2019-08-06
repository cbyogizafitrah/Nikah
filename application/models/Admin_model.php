<?php 
/**
 * 
 */
class Admin_model extends CI_Model
{
	public function login($email,$password)
		{
			return $this->db->query("Select * from admin where
								email_admin ='".$email."'
								and password_admin='".$password."'")->row();
		}

		public function insert($data)	
		{
			$this->db->insert('admin',$data);
		}

		public function select()
		{
			return $this->db->get('admin')->result();
		}
		public function delete($id)
		{
			$this->db->where('id_admin',$id);
			$this->db->delete('admin');
		}
		public function update($data,$id)
		{
			$this->db->where('id_admin',$id);
			$this->db->update('admin',$data);
		}   

}
 ?>
