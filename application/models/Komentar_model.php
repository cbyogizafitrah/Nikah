<?php 
/**
 * 
 */
class Komentar_model extends CI_Model
{
		public function insert($data)	
		{
			$this->db->insert('komentar',$data);
		}

		public function select()
		{
			return $this->db->get('komentar')->result();
		}
		public function delete($id)
		{
			$this->db->where('id_komentar',$id);
			$this->db->delete('komentar');
		}
		public function update($data,$id)
		{
			$this->db->where('id_komentar',$id);
			$this->db->update('komentar',$data);
		}

}
 ?>
